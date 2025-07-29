<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class ExportAnalysisTagDetailByTaskIdResponseBody extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $code;

    /**
     * @example http://www.example.com/xxxx.xlsx
     *
     * @var string
     */
    public $data;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 085BE2D2-BB7E-59A6-B688-F2CB32124E7F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'httpStatusCode' => 'httpStatusCode',
        'message' => 'message',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportAnalysisTagDetailByTaskIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
