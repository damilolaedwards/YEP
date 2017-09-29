<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
   public function getForm(){
   	return view('pages.form');
   }

   public function postForm(Request $request){

   	$this->validate($request, [
   		'name' => 'required',
   		'age' => 'required',
   		'email' => 'required|email|unique:forms',
   		'phone' => 'required|unique:forms',
   		'gender' => 'required',
   		'state' => 'required',
   		'academic' => 'required',
   		'institution' => 'required_if:academic,==,Undergraduate',
   		'faculty' => 'required_if:academic,==,Undergraduate',
   		'course' => 'required_if:academic,==,Undergraduate',
   		'level' => 'required_if:academic,==,Undergraduate',
   		'status' => 'required_if:academic,==,Graduate',
   		'qualification' => 'required_if:academic,==,Graduate',
   		'discipline' => 'required_if:academic,==,Graduate',
   		'business' => 'required',
   		'specify' => 'required_if:business,==,Yes|max:150',
   		'intention' => 'required',
   		'aspiration' => 'required|max:200',
         'hear' => 'required',
         'pursue' => 'required',
         'sector' => 'required_if:pursue,==,Yes',
         'requirement' => 'required_if:pursue,==,Yes'
		]);

   	Form::create([
   		'name' => $request->input('name'),
   		'age' => $request->input('age'),
   		'email' => $request->input('email'),
   		'phone' => $request->input('phone'),
   		'gender' => $request->input('gender'),
   		'state' => implode(" ", $request->input('state')),
   		'academic' => $request->input('academic'),
   		'institution' => implode(" ", $request->input('institution')),
   		'faculty' => $request->input('faculty'),
   		'course' => $request->input('course'),
   		'level' => $request->input('level'),
   		'status' => $request->input('status'),
   		'qualification' => implode(" ", $request->input('qualification')),
   		'discipline' => $request->input('discipline'),
   		'business' => $request->input('business'),
   		'specify' => $request->input('specify'),
   		'intention' => $request->input('intention'),
   		'aspiration' => $request->input('aspiration'),
         'hear' => $request->input('hear'),
         'pursue' => $request->input('pursue'),
         'sector' => implode(" ", $request->input('sector')),
         'requirement' => implode(" ", $request->input('requirement'))
]);
   	
   	return view('pages.success');


   }

   public function success(){

   	return view('pages.success');

   }

   public function display(){

		$results = Form::all();
		return view('pages.display')->with('results', $results);

   }

   public function getResults(Request $request)
	{
		$field = $request->input('field');
		$value = $request->input('value');
		if (!$field && !$value){
			return redirect()->back();
	}
		$results = Form::where($field , 'LIKE', "%{$value}%")->get();
return view('pages.results')->with('results', $results)->with('field', $field)->with('value', $value); 
	}

	public function getCSV(){
	$items = Form::all();
      \Excel::create('items', function($excel) use($items) {
          $excel->sheet('ExportFile', function($sheet) use($items) {
              $sheet->fromArray($items);
          });
      })->export('xls');
	}

	public function getSearchCSV($field, $value){
	$formdata = $field . '-' . $value;
	$items = $results = Form::where($field , 'LIKE', "%{$value}%")->get();
      \Excel::create($formdata, function($excel) use($items) {
          $excel->sheet('ExportFile', function($sheet) use($items) {
              $sheet->fromArray($items);
          });
      })->export('xls');
	}
}
