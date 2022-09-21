<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeFileUploadResponseBody extends Model
{
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
    public $encodedPolicy;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var bool
     */
    public $useAccelerate;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'bucket'        => 'Bucket',
        'encodedPolicy' => 'EncodedPolicy',
        'endpoint'      => 'Endpoint',
        'objectKey'     => 'ObjectKey',
        'requestId'     => 'RequestId',
        'signature'     => 'Signature',
        'useAccelerate' => 'UseAccelerate',
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
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->useAccelerate) {
            $res['UseAccelerate'] = $this->useAccelerate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeFileUploadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['UseAccelerate'])) {
            $model->useAccelerate = $map['UseAccelerate'];
        }

        return $model;
    }
}
