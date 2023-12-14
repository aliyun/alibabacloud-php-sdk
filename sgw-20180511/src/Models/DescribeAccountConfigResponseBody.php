<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSupportClientSideEncryption;

    /**
     * @var bool
     */
    public $isSupportElasticGatewayBeta;

    /**
     * @var bool
     */
    public $isSupportGatewayLogging;

    /**
     * @var bool
     */
    public $isSupportServerSideEncryption;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                          => 'Code',
        'isSupportClientSideEncryption' => 'IsSupportClientSideEncryption',
        'isSupportElasticGatewayBeta'   => 'IsSupportElasticGatewayBeta',
        'isSupportGatewayLogging'       => 'IsSupportGatewayLogging',
        'isSupportServerSideEncryption' => 'IsSupportServerSideEncryption',
        'message'                       => 'Message',
        'requestId'                     => 'RequestId',
        'success'                       => 'Success',
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
        if (null !== $this->isSupportClientSideEncryption) {
            $res['IsSupportClientSideEncryption'] = $this->isSupportClientSideEncryption;
        }
        if (null !== $this->isSupportElasticGatewayBeta) {
            $res['IsSupportElasticGatewayBeta'] = $this->isSupportElasticGatewayBeta;
        }
        if (null !== $this->isSupportGatewayLogging) {
            $res['IsSupportGatewayLogging'] = $this->isSupportGatewayLogging;
        }
        if (null !== $this->isSupportServerSideEncryption) {
            $res['IsSupportServerSideEncryption'] = $this->isSupportServerSideEncryption;
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
     * @return DescribeAccountConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSupportClientSideEncryption'])) {
            $model->isSupportClientSideEncryption = $map['IsSupportClientSideEncryption'];
        }
        if (isset($map['IsSupportElasticGatewayBeta'])) {
            $model->isSupportElasticGatewayBeta = $map['IsSupportElasticGatewayBeta'];
        }
        if (isset($map['IsSupportGatewayLogging'])) {
            $model->isSupportGatewayLogging = $map['IsSupportGatewayLogging'];
        }
        if (isset($map['IsSupportServerSideEncryption'])) {
            $model->isSupportServerSideEncryption = $map['IsSupportServerSideEncryption'];
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
