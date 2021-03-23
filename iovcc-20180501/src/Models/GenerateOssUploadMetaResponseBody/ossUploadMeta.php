<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssUploadMetaResponseBody;

use AlibabaCloud\Tea\Model;

class ossUploadMeta extends Model
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
    public $securityToken;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $objectKey;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'securityToken'   => 'SecurityToken',
        'bucket'          => 'Bucket',
        'objectKey'       => 'ObjectKey',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossUploadMeta
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        return $model;
    }
}
