<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest\uploadMetadatas;

use AlibabaCloud\Tea\Model;

class s3UploadInfo extends Model
{
    /**
     * @description 上传的临时AK
     *
     * @var string
     */
    public $s3AccessKey;

    /**
     * @description Bucket
     *
     * @var string
     */
    public $s3Bucket;

    /**
     * @description Endpoint
     *
     * @var string
     */
    public $s3Endpoint;

    /**
     * @description 上传的FileKey
     *
     * @var string
     */
    public $s3FileKey;

    /**
     * @description 供应商名称
     *
     * @var string
     */
    public $s3Provider;

    /**
     * @description 上传的临时SK
     *
     * @var string
     */
    public $s3SecretKey;

    /**
     * @description 上传的临时Token
     *
     * @var string
     */
    public $s3Token;

    /**
     * @var int
     */
    public $id;

    /**
     * @description Job Id
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        's3AccessKey' => 'S3AccessKey',
        's3Bucket'    => 'S3Bucket',
        's3Endpoint'  => 'S3Endpoint',
        's3FileKey'   => 'S3FileKey',
        's3Provider'  => 'S3Provider',
        's3SecretKey' => 'S3SecretKey',
        's3Token'     => 'S3Token',
        'id'          => 'id',
        'jobId'       => 'jobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->s3AccessKey) {
            $res['S3AccessKey'] = $this->s3AccessKey;
        }
        if (null !== $this->s3Bucket) {
            $res['S3Bucket'] = $this->s3Bucket;
        }
        if (null !== $this->s3Endpoint) {
            $res['S3Endpoint'] = $this->s3Endpoint;
        }
        if (null !== $this->s3FileKey) {
            $res['S3FileKey'] = $this->s3FileKey;
        }
        if (null !== $this->s3Provider) {
            $res['S3Provider'] = $this->s3Provider;
        }
        if (null !== $this->s3SecretKey) {
            $res['S3SecretKey'] = $this->s3SecretKey;
        }
        if (null !== $this->s3Token) {
            $res['S3Token'] = $this->s3Token;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return s3UploadInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['S3AccessKey'])) {
            $model->s3AccessKey = $map['S3AccessKey'];
        }
        if (isset($map['S3Bucket'])) {
            $model->s3Bucket = $map['S3Bucket'];
        }
        if (isset($map['S3Endpoint'])) {
            $model->s3Endpoint = $map['S3Endpoint'];
        }
        if (isset($map['S3FileKey'])) {
            $model->s3FileKey = $map['S3FileKey'];
        }
        if (isset($map['S3Provider'])) {
            $model->s3Provider = $map['S3Provider'];
        }
        if (isset($map['S3SecretKey'])) {
            $model->s3SecretKey = $map['S3SecretKey'];
        }
        if (isset($map['S3Token'])) {
            $model->s3Token = $map['S3Token'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        return $model;
    }
}
