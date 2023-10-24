<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetRunningJobsResponseBody extends Model
{
    /**
     * @description The returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description *   If the value of success was false, an error code was returned.
     *   If the value of success was true, a null value was returned.
     *
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example 0A3B1FD2006A24C8D8BE65CDAC028298
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Indicates whether the request was successful. If this parameter was not empty and the value of this parameter was not 200, the request failed.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The ID of the request.
     *
     * @example 0bc3b4ab16684833172127321e2c25
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'data',
        'errorCode' => 'errorCode',
        'errorMsg'  => 'errorMsg',
        'httpCode'  => 'httpCode',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRunningJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
