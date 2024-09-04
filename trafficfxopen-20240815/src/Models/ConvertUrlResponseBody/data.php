<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\ConvertUrlResponseBody;

use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\ConvertUrlResponseBody\data\status;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example wx6a96c49f29850eb5
     *
     * @var string
     */
    public $appId;

    /**
     * @example https://fx.wapa.taobao.com/connect?return_url=https%3A%2F%2Fmarket.wapa.taobao.com%2Fapp%2Ftrip%2Frx-traffic%2Fpages%2Fota%3F_F_sht_sm%3D12345678%26leaveFlightNo%3DCZ6132%26arrCityCode%3DDLC%26arrCityName%3D%25E5%25A4%25A7%25E8%25BF%259E%26leaveCabinClass%3D0%26itemParams%3DmQZ4eyJhZHRQcmljZSI6MzEyLCJhZnRlclByb21vdGlvbgUamFNlYXJjaCI6dHJ1ZSwiYWdlbnRJZCI6IjUwNTUiLCJhdmVyYWdlUAFFdFNob3ciOmZhbHNlLCJjYWJpbiI6IloiLCJjaGlsZAVODWgUZmlyc3RDASJkQ2xhc3MiOiJBTExfQ0FCSU4iLCJpbmZhbnQNMMgxNDAsIml0ZW1JZCI6IjEyZDJhZTdiMzk0ZjQ5MWY5MjE2ZjQzMzBjYjdkY2E5XzY2IiwFL_BCVHlwZSI6MSwibGVhdmVGbGlnaHRObyI6IkNaNjEzMiIsInByZVF1ZXJ5VGltZXN0YW1wIjoxNzI1MzQyMzI0MDU3LAEiEFRyYWNlBXscMjEwM2EzNDAVJDQwNDM3MjEyNmQzZTY4IgFQLjgBFCI6MCwicyU9GFNlZ21lbnQB53hbe1wiYXJyQ2l0eUNvZGVcIjpcIkRMQ1wiLFwiZGVwMhgACEJKUxEYCERhdAksODIwMjQtMTAtMTRcIn1dIgFiDGxlY3QJ3xhIYXNTdG9wNYMAcwUcBGVkRoAAGEFpcnBvcnRCgwBqmwA-MwAIUEtYEZ6qtgAgIDA4OjMwOjAwBTwoam91cm5leVNlcVwhLyhcIm1hcmtldGluZwnRBE5vJSEpshHxFHVwcGx5QVWIFCxbNTQ0NyULBRoQT2ZmZXJRrx0TsExpbmtlZElkIjoiYTAzOTk4MzZkZGUzNDBhMTlhZGQ2NzU4ZDZkNjQ1YjEifQ%253D%253D%26depCityName%3D%25E5%258C%2597%25E4%25BA%25AC%26leaveDate%3D2024-10-14%26fpt%3Dta.fx%2528017595%2529017595%26_fli_webview%3Dfalse%26ttid%3Ddidi.000017598%26depCityCode%3DBJS&fliggy_scene=didi
     *
     * @var string
     */
    public $authUrl;

    /**
     * @description This parameter is required.
     *
     * @var status
     */
    public $status;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'   => 'appId',
        'authUrl' => 'authUrl',
        'status'  => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->authUrl) {
            $res['authUrl'] = $this->authUrl;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['authUrl'])) {
            $model->authUrl = $map['authUrl'];
        }
        if (isset($map['status'])) {
            $model->status = status::fromMap($map['status']);
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
