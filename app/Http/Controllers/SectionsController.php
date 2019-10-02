<?php

namespace App\Http\Controllers;
use App\Subject;
use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function create(Subject $subject)
    {
    	return view('sections.create')->with('subject', $subject);
    }

    public function store(Subject $subject)
    {
    	$subject->sections()->create([
    		'name' => request()->name
    	]);

    	return redirect('/subjects/'.$subject->id);
    }
    
    public function edit(Section $section)
    {
        return view('sections.edit')->with('section', $section);
    }

    public function update(Section $section)
    {
        $section->name = request()->name;
        $section->save();
        return redirect('/subjects/'.$section->subject->id);
    }
}
