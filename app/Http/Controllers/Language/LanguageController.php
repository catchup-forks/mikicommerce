<?php

namespace App\Http\Controllers\Language;

use App\Http\Controllers\Controller;

/**
 * Class LanguageController.
 */
class LanguageController extends Controller
{
    public function languageRoute($lang)
    {
        if ($lang != 'en') {
            dd($lang);
        } else {
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
