<?php

namespace App\Http\Requests;

/**
 * @property integer sum
 */
class BetRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'sum' => 'required|numeric'
        ];
    }
}