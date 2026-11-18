<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\CreateOssUploadResponseBody;

use AlibabaCloud\Dara\Model;

class uploadCredentials extends Model
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
    public $bucket;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $postAccessKeyId;

    /**
     * @var string
     */
    public $postEndpoint;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $signedUrl;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucket' => 'Bucket',
        'expiration' => 'Expiration',
        'policy' => 'Policy',
        'postAccessKeyId' => 'PostAccessKeyId',
        'postEndpoint' => 'PostEndpoint',
        'region' => 'Region',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
        'signedUrl' => 'SignedUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->postAccessKeyId) {
            $res['PostAccessKeyId'] = $this->postAccessKeyId;
        }

        if (null !== $this->postEndpoint) {
            $res['PostEndpoint'] = $this->postEndpoint;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
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

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['PostAccessKeyId'])) {
            $model->postAccessKeyId = $map['PostAccessKeyId'];
        }

        if (isset($map['PostEndpoint'])) {
            $model->postEndpoint = $map['PostEndpoint'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }

        return $model;
    }
}
