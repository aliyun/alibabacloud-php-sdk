<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssUploadMetaResponseBody;

use AlibabaCloud\Tea\Model;

class ossUploadMeta extends Model
{
    /**
     * @var string
     */
    public $securityToken;

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
    public $accessKeyId;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'objectKey'       => 'ObjectKey',
        'accessKeySecret' => 'AccessKeySecret',
        'accessKeyId'     => 'AccessKeyId',
        'bucket'          => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
