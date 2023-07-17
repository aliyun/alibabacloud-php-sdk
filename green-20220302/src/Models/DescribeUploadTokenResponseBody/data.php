<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeUploadTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $bucketName;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var string
     */
    public $fileNamePrefix;

    /**
     * @var string
     */
    public $ossInternalEndPoint;

    /**
     * @var string
     */
    public $ossInternetEndPoint;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'         => 'AccessKeyId',
        'accessKeySecret'     => 'AccessKeySecret',
        'bucketName'          => 'BucketName',
        'expiration'          => 'Expiration',
        'fileNamePrefix'      => 'FileNamePrefix',
        'ossInternalEndPoint' => 'OssInternalEndPoint',
        'ossInternetEndPoint' => 'OssInternetEndPoint',
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
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->fileNamePrefix) {
            $res['FileNamePrefix'] = $this->fileNamePrefix;
        }
        if (null !== $this->ossInternalEndPoint) {
            $res['OssInternalEndPoint'] = $this->ossInternalEndPoint;
        }
        if (null !== $this->ossInternetEndPoint) {
            $res['OssInternetEndPoint'] = $this->ossInternetEndPoint;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['FileNamePrefix'])) {
            $model->fileNamePrefix = $map['FileNamePrefix'];
        }
        if (isset($map['OssInternalEndPoint'])) {
            $model->ossInternalEndPoint = $map['OssInternalEndPoint'];
        }
        if (isset($map['OssInternetEndPoint'])) {
            $model->ossInternetEndPoint = $map['OssInternetEndPoint'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
