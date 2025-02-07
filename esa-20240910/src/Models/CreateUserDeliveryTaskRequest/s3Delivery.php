<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\Dara\Model;

class s3Delivery extends Model
{
    /**
     * @var string
     */
    public $accessKey;
    /**
     * @var string
     */
    public $bucketPath;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $prefixPath;
    /**
     * @var string
     */
    public $region;
    /**
     * @var bool
     */
    public $s3Cmpt;
    /**
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
        'accessKey'            => 'AccessKey',
        'bucketPath'           => 'BucketPath',
        'endpoint'             => 'Endpoint',
        'prefixPath'           => 'PrefixPath',
        'region'               => 'Region',
        's3Cmpt'               => 'S3Cmpt',
        'secretKey'            => 'SecretKey',
        'serverSideEncryption' => 'ServerSideEncryption',
        'vertifyType'          => 'VertifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
