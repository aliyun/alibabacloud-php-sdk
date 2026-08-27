<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DtsAI\V20260401\Models\AuthorizeFileUploadResponseBody\authorizations;

class AuthorizeFileUploadResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var authorizations[]
     */
    public $authorizations;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $encodedPolicy;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'authorizations' => 'Authorizations',
        'bucket' => 'Bucket',
        'encodedPolicy' => 'EncodedPolicy',
        'endpoint' => 'Endpoint',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'expireTime' => 'ExpireTime',
        'httpStatusCode' => 'HttpStatusCode',
        'objectKey' => 'ObjectKey',
        'requestId' => 'RequestId',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->authorizations)) {
            Model::validateArray($this->authorizations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->authorizations) {
            if (\is_array($this->authorizations)) {
                $res['Authorizations'] = [];
                $n1 = 0;
                foreach ($this->authorizations as $item1) {
                    $res['Authorizations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['Authorizations'])) {
            if (!empty($map['Authorizations'])) {
                $model->authorizations = [];
                $n1 = 0;
                foreach ($map['Authorizations'] as $item1) {
                    $model->authorizations[$n1] = authorizations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
