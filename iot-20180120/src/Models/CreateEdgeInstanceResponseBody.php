<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeInstanceResponseBody extends Model
{
    /**
     * @description The error code. Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the call failed.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the edge instance.
     *
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 28D159F4-980F-423D-95F0-F705E9DFC016
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. true: indicates that the call was successful. false: indicates that the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'errorMessage' => 'ErrorMessage',
        'instanceId'   => 'InstanceId',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return CreateEdgeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
