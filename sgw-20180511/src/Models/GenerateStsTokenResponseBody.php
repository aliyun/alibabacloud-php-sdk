<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class GenerateStsTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $supportBundleTarget;
    protected $_name = [
        'accessKeyId'         => 'AccessKeyId',
        'accessKeySecret'     => 'AccessKeySecret',
        'code'                => 'Code',
        'environment'         => 'Environment',
        'expiration'          => 'Expiration',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'securityToken'       => 'SecurityToken',
        'success'             => 'Success',
        'supportBundleTarget' => 'SupportBundleTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->supportBundleTarget) {
            $res['SupportBundleTarget'] = $this->supportBundleTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateStsTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SupportBundleTarget'])) {
            $model->supportBundleTarget = $map['SupportBundleTarget'];
        }

        return $model;
    }
}
