<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false; // default is no one can perform the request, so change to true.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ];
    }
}
