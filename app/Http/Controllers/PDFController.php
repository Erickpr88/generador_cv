<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Generate;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\Personalinformation;
use App\Models\Projects;
use App\Models\Skills;
use App\Models\User;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Obtener información de la tabla 
        $information = PersonalInformation::first();
        $educations = Education::all();
        $skills = Skills::all();
        $languages = Languages::all();
        $interests = Interests::all();
        $experiences = Experience::all();
        $projects = Projects::all();
        $contact = ContactInformation::all();
        $user = User::first();
    
        // Generar el PDF
        $pdf = Pdf::loadView('pdf.user-profile', compact(
            'information',
            'educations',
            'skills',
            'languages',
            'interests',
            'experiences',
            'projects',
            'contact',
            'user'
            

        ));
    
        return $pdf->stream();
    }
    
}