<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetPackageStorageCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class credential extends Model
{
    /**
     * @description The AccessKey ID of your account.
     *
     * @example <yourAccessKeyId>
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The AccessKey secret of your account.
     *
     * @example <yourAccessKeySecret>
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description The name of the OSS bucket.
     *
     * @example edas-bj
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The time when the STS credential expires. Example: 2019-11-10T07:20:19Z.
     *
     * @example 2019-11-10T07:20:19Z
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The object key prefix in Object Storage Service (OSS).
     *
     * @example release-pkg/117274586608****
     *
     * @var string
     */
    public $keyPrefix;

    /**
     * @description The private endpoint of OSS.
     *
     * @example oss-cn-beijing-internal.aliyuncs.com
     *
     * @var string
     */
    public $ossInternalEndpoint;

    /**
     * @description The public endpoint of OSS.
     *
     * @example oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $ossPublicEndpoint;

    /**
     * @description The VPC endpoint of OSS.
     *
     * @example oss-cn-beijing-internal.aliyuncs.com
     *
     * @var string
     */
    public $ossVpcEndpoint;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security token issued by STS.
     *
     * @example <yourSecurityToken>
     *
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'         => 'AccessKeyId',
        'accessKeySecret'     => 'AccessKeySecret',
        'bucket'              => 'Bucket',
        'expiration'          => 'Expiration',
        'keyPrefix'           => 'KeyPrefix',
        'ossInternalEndpoint' => 'OssInternalEndpoint',
        'ossPublicEndpoint'   => 'OssPublicEndpoint',
        'ossVpcEndpoint'      => 'OssVpcEndpoint',
        'regionId'            => 'RegionId',
        'securityToken'       => 'SecurityToken',
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

    /**
     * @param array $map
     *
     * @return credential
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
