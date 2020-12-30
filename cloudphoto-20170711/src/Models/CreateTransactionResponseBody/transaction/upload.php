<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateTransactionResponseBody\transaction;

use AlibabaCloud\Tea\Model;

class upload extends Model
{
    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $stsToken;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'objectKey'       => 'ObjectKey',
        'accessKeySecret' => 'AccessKeySecret',
        'sessionId'       => 'SessionId',
        'accessKeyId'     => 'AccessKeyId',
        'stsToken'        => 'StsToken',
        'ossEndpoint'     => 'OssEndpoint',
        'bucket'          => 'Bucket',
        'fileId'          => 'FileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
