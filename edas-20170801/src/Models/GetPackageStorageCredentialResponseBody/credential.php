<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetPackageStorageCredentialResponseBody;

use AlibabaCloud\Dara\Model;

class credential extends Model
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
    public $keyPrefix;

    /**
     * @var string
     */
    public $ossInternalEndpoint;

    /**
     * @var string
     */
    public $ossPublicEndpoint;

    /**
     * @var string
     */
    public $ossVpcEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucket' => 'Bucket',
        'expiration' => 'Expiration',
        'keyPrefix' => 'KeyPrefix',
        'ossInternalEndpoint' => 'OssInternalEndpoint',
        'ossPublicEndpoint' => 'OssPublicEndpoint',
        'ossVpcEndpoint' => 'OssVpcEndpoint',
        'regionId' => 'RegionId',
        'securityToken' => 'SecurityToken',
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

        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
        }

        if (null !== $this->ossInternalEndpoint) {
            $res['OssInternalEndpoint'] = $this->ossInternalEndpoint;
        }

        if (null !== $this->ossPublicEndpoint) {
            $res['OssPublicEndpoint'] = $this->ossPublicEndpoint;
        }

        if (null !== $this->ossVpcEndpoint) {
            $res['OssVpcEndpoint'] = $this->ossVpcEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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

        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }

        if (isset($map['OssInternalEndpoint'])) {
            $model->ossInternalEndpoint = $map['OssInternalEndpoint'];
        }

        if (isset($map['OssPublicEndpoint'])) {
            $model->ossPublicEndpoint = $map['OssPublicEndpoint'];
        }

        if (isset($map['OssVpcEndpoint'])) {
            $model->ossVpcEndpoint = $map['OssVpcEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
