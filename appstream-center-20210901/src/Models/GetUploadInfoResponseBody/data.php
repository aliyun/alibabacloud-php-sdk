<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetUploadInfoResponseBody;

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
    public $accessKeySecret;

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
     * @var string
     */
    public $ossPoint;

    /**
     * @var string
     */
    public $ossPointInternal;

    /**
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucketName' => 'BucketName',
        'expiration' => 'Expiration',
        'filePath' => 'FilePath',
        'ossPoint' => 'OssPoint',
        'ossPointInternal' => 'OssPointInternal',
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

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
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

        if (null !== $this->ossPoint) {
            $res['OssPoint'] = $this->ossPoint;
        }

        if (null !== $this->ossPointInternal) {
            $res['OssPointInternal'] = $this->ossPointInternal;
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

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
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

        if (isset($map['OssPoint'])) {
            $model->ossPoint = $map['OssPoint'];
        }

        if (isset($map['OssPointInternal'])) {
            $model->ossPointInternal = $map['OssPointInternal'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        return $model;
    }
}
