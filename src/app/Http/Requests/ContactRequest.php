<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tell' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['string', 'max:255'],
            'detail' => ['required', 'string', 'max:120'],
            'content' => ['required', 'string', 'max:120']
        ];
    }

   public function messages()
   {
        return [
            'name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tell.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を入力してください',
            'content.required' => 'お問い合わせの内容を入力してください'
        ];
   }
}
