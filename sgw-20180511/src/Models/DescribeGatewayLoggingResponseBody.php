<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayLoggingResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $gatewayLoggingStatus;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 17D08346-BD08-4107-BFBC-01A6AAD5F5FB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example alex***
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @example 123***
     *
     * @var string
     */
    public $slsProject;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                 => 'Code',
        'gatewayLoggingStatus' => 'GatewayLoggingStatus',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'slsLogstore'          => 'SlsLogstore',
        'slsProject'           => 'SlsProject',
        'success'              => 'Success',
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
        if (null !== $this->gatewayLoggingStatus) {
            $res['GatewayLoggingStatus'] = $this->gatewayLoggingStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayLoggingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GatewayLoggingStatus'])) {
            $model->gatewayLoggingStatus = $map['GatewayLoggingStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
