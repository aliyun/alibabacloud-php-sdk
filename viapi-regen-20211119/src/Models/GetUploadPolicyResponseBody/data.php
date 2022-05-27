<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetUploadPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $originalFilename;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $signedHttpUrl;
    protected $_name = [
        'accessId'         => 'AccessId',
        'bucketName'       => 'BucketName',
        'endpoint'         => 'Endpoint',
        'fileName'         => 'FileName',
        'objectKey'        => 'ObjectKey',
        'originalFilename' => 'OriginalFilename',
        'policy'           => 'Policy',
        'signature'        => 'Signature',
        'signedHttpUrl'    => 'SignedHttpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->originalFilename) {
            $res['OriginalFilename'] = $this->originalFilename;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signedHttpUrl) {
            $res['SignedHttpUrl'] = $this->signedHttpUrl;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['OriginalFilename'])) {
            $model->originalFilename = $map['OriginalFilename'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignedHttpUrl'])) {
            $model->signedHttpUrl = $map['SignedHttpUrl'];
        }

        return $model;
    }
}
