<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAsyncErrorRequestListByCodeResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The data returned.
     *
     * @example {         "fail": false,         "data": [             {                 "sqlId": "ad78a4e7d3ce81590c9dc2d5f4bc****",                 "instanceId": "rm-2ze8g2am97624****"             },             {                 "sqlId": "0f92feacd92c048b06a16617a633****",                 "instanceId": "rm-2ze8g2am97624****"             }         ],         "resultId": "async__c39d43ece52d35267cc4b92a0c26****",         "isFinish": true,         "state": "SUCCESS",         "complete": true,         "timestamp": 1644559407740     }
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, **Successful** is returned. If the request failed, an error message such as an error code is returned.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 9CB97BC4-6479-55D0-B9D0-EA925AFE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncErrorRequestListByCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
