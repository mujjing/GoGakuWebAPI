<?php

namespace App\Http\Resources;

trait CommonParameters
{

    /**
     * リソース配列と共に返すべき、追加データの取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'result' => true,
        ];
    }
    /**
     * リソースに対して送信するレスポンスのカスタマイズ
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function withResponse($request, $response)
    {
        $response->header('X-app-version-ios', config('app.version.ios'))
            ->header('X-app-version-android', config('app.version.android'));
    }
}
