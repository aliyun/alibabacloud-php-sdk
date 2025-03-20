<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class s3Delivery extends Model
{
    /**
     * @description The access key ID of your Amazon S3 account.
     *
     * @example LTAIKh***
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The directory in the bucket.
     *
     * @example logriver-test/log
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @description The endpoint. This parameter is required when the S3Cmpt parameter is set to true.
     *
     * @example https://s3.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The prefix of the path in which you want to store logs.
     *
     * @example logriver-test/log
     *
     * @var string
     */
    public $prefixPath;

    /**
     * @description The region ID of the service.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description Specifies whether the service is compatible with Amazon S3.
     *
     * @example true
     *
     * @var bool
     */
    public $s3Cmpt;

    /**
     * @description The secret access key of your Amazon S3 account.
     *
     * @example LDSIKh***
     *
     * @var string
     */
    public $secretKey;

    /**
     * @var bool
     */
    public $serverSideEncryption;

    /**
     * @var string
     */
    public $vertifyType;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'bucketPath' => 'BucketPath',
        'endpoint' => 'Endpoint',
        'prefixPath' => 'PrefixPath',
        'region' => 'Region',
        's3Cmpt' => 'S3Cmpt',
        'secretKey' => 'SecretKey',
        'serverSideEncryption' => 'ServerSideEncryption',
        'vertifyType' => 'VertifyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bucketPath) {
            $res['BucketPath'] = $this->bucketPath;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->prefixPath) {
            $res['PrefixPath'] = $this->prefixPath;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->s3Cmpt) {
            $res['S3Cmpt'] = $this->s3Cmpt;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->vertifyType) {
            $res['VertifyType'] = $this->vertifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return s3Delivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['BucketPath'])) {
            $model->bucketPath = $map['BucketPath'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['PrefixPath'])) {
            $model->prefixPath = $map['PrefixPath'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['S3Cmpt'])) {
            $model->s3Cmpt = $map['S3Cmpt'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['VertifyType'])) {
            $model->vertifyType = $map['VertifyType'];
        }

        return $model;
    }
}
