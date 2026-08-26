<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetFileUploadInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $maxFileSize;

    /**
     * @var string
     */
    public $ossPoint;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'bucketName' => 'BucketName',
        'expiration' => 'Expiration',
        'filePath' => 'FilePath',
        'maxFileSize' => 'MaxFileSize',
        'ossPoint' => 'OssPoint',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
        'stsToken' => 'StsToken',
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

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->maxFileSize) {
            $res['MaxFileSize'] = $this->maxFileSize;
        }

        if (null !== $this->ossPoint) {
            $res['OssPoint'] = $this->ossPoint;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
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

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['MaxFileSize'])) {
            $model->maxFileSize = $map['MaxFileSize'];
        }

        if (isset($map['OssPoint'])) {
            $model->ossPoint = $map['OssPoint'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        return $model;
    }
}
