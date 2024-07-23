<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetDeploymentResponseBody extends Model
{
    /**
     * @description *   If the value of success was true, the details of the deployment were returned.
     *   If the value of success was false, a null value was returned.
     *
     * @var Deployment
     */
    public $data;

    /**
     * @description *   If the value of success was false, an error code was returned.
     *   If the value of success was true, a null value was returned.
     *
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description *   If the value of success was false, an error message was returned.
     *   If the value of success was true, a null value was returned.
     *
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The value was fixed to 200.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The request ID.
     *
     * @example CBC799F0-AS7S-1D30-8A4F-882ED4DD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'         => 'data',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'httpCode'     => 'httpCode',
        'requestId'    => 'requestId',
        'success'      => 'success',
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
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeploymentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = Deployment::fromMap($map['data']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
