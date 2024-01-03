<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AccessKey ID that is used to access OSS.
     *
     * @example STS.NTm*****8tu
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The AccessKey secret used to access OSS.
     *
     * @example 9NG*****K4X
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description The OSS bucket that is used to store the architecture image.
     *
     * @example bucket-1
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The OSS endpoint.
     *
     * @example https://oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The token that is used to access the Object Storage Service (OSS) bucket that stores the architecture image.
     *
     * @example ABCD
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The OSS bucket that is used to save data snapshots.
     *
     * @example bucket-2
     *
     * @var string
     */
    public $snapshotBucket;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucket'          => 'Bucket',
        'endpoint'        => 'Endpoint',
        'securityToken'   => 'SecurityToken',
        'snapshotBucket'  => 'SnapshotBucket',
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
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->snapshotBucket) {
            $res['SnapshotBucket'] = $this->snapshotBucket;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SnapshotBucket'])) {
            $model->snapshotBucket = $map['SnapshotBucket'];
        }

        return $model;
    }
}
