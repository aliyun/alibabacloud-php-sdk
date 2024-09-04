<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\Tea\Model;

class ConvertUrlRequest extends Model
{
    /**
     * @example +86
     *
     * @var string
     */
    public $countryCallingCode;

    /**
     * @description This parameter is required.
     *
     * @example https%3A%2F%2Fmarket.wapa.taobao.com%2Fapp%2Ftrip%2Frx-traffic%2Fpages%2Fota%3F_F_sht_sm%3D12345678%26leaveFlightNo%3DCZ6132%26arrCityCode%3DDLC%26arrCityName%3D%25E5%25A4%25A7%25E8%25BF%259E%26leaveCabinClass%3D0%26itemParams%3DmQZ4eyJhZHRQcmljZSI6MzEyLCJhZnRlclByb21vdGlvbgUamFNlYXJjaCI6dHJ1ZSwiYWdlbnRJZCI6IjUwNTUiLCJhdmVyYWdlUAFFdFNob3ciOmZhbHNlLCJjYWJpbiI6IloiLCJjaGlsZAVODWgUZmlyc3RDASJkQ2xhc3MiOiJBTExfQ0FCSU4iLCJpbmZhbnQNMMgxNDAsIml0ZW1JZCI6IjEyZDJhZTdiMzk0ZjQ5MWY5MjE2ZjQzMzBjYjdkY2E5XzY2IiwFL_BCVHlwZSI6MSwibGVhdmVGbGlnaHRObyI6IkNaNjEzMiIsInByZVF1ZXJ5VGltZXN0YW1wIjoxNzI1MzQyMzI0MDU3LAEiEFRyYWNlBXscMjEwM2EzNDAVJDQwNDM3MjEyNmQzZTY4IgFQLjgBFCI6MCwicyU9GFNlZ21lbnQB53hbe1wiYXJyQ2l0eUNvZGVcIjpcIkRMQ1wiLFwiZGVwMhgACEJKUxEYCERhdAksODIwMjQtMTAtMTRcIn1dIgFiDGxlY3QJ3xhIYXNTdG9wNYMAcwUcBGVkRoAAGEFpcnBvcnRCgwBqmwA-MwAIUEtYEZ6qtgAgIDA4OjMwOjAwBTwoam91cm5leVNlcVwhLyhcIm1hcmtldGluZwnRBE5vJSEpshHxFHVwcGx5QVWIFCxbNTQ0NyULBRoQT2ZmZXJRrx0TsExpbmtlZElkIjoiYTAzOTk4MzZkZGUzNDBhMTlhZGQ2NzU4ZDZkNjQ1YjEifQ%253D%253D%26depCityName%3D%25E5%258C%2597%25E4%25BA%25AC%26leaveDate%3D2024-10-14%26fpt%3Dta.fx%2528017595%2529017595%26_fli_webview%3Dfalse%26ttid%3Ddidi.000017598%26depCityCode%3DBJS
     *
     * @var string
     */
    public $jumpUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $phone;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $scene;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $source;

    /**
     * @example 2215112050977
     *
     * @var string
     */
    public $thirdId;

    /**
     * @description This parameter is required.
     *
     * @example 123456789
     *
     * @var string
     */
    public $uid;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $xenv;
    protected $_name = [
        'countryCallingCode' => 'countryCallingCode',
        'jumpUrl'            => 'jumpUrl',
        'phone'              => 'phone',
        'scene'              => 'scene',
        'source'             => 'source',
        'thirdId'            => 'thirdId',
        'uid'                => 'uid',
        'xenv'               => 'xenv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countryCallingCode) {
            $res['countryCallingCode'] = $this->countryCallingCode;
        }
        if (null !== $this->jumpUrl) {
            $res['jumpUrl'] = $this->jumpUrl;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->thirdId) {
            $res['thirdId'] = $this->thirdId;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->xenv) {
            $res['xenv'] = $this->xenv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['countryCallingCode'])) {
            $model->countryCallingCode = $map['countryCallingCode'];
        }
        if (isset($map['jumpUrl'])) {
            $model->jumpUrl = $map['jumpUrl'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['thirdId'])) {
            $model->thirdId = $map['thirdId'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['xenv'])) {
            $model->xenv = $map['xenv'];
        }

        return $model;
    }
}
