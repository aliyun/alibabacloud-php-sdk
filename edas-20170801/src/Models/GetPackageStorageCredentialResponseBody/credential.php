<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetPackageStorageCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class credential extends Model
{
    /**
     * @var string
     */
    public $keyPrefix;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'keyPrefix'       => 'KeyPrefix',
        'securityToken'   => 'SecurityToken',
        'accessKeySecret' => 'AccessKeySecret',
        'expiration'      => 'Expiration',
        'accessKeyId'     => 'AccessKeyId',
        'bucket'          => 'Bucket',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
