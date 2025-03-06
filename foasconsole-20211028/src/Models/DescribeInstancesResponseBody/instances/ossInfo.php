<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class ossInfo extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $bucketVersioningStatus;

    /**
     * @var string
     */
    public $endpoint;
    protected $_name = [
        'accessId'               => 'AccessId',
        'accessKey'              => 'AccessKey',
        'bucket'                 => 'Bucket',
        'bucketVersioningStatus' => 'BucketVersioningStatus',
        'endpoint'               => 'Endpoint',
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
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->bucketVersioningStatus) {
            $res['BucketVersioningStatus'] = $this->bucketVersioningStatus;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['BucketVersioningStatus'])) {
            $model->bucketVersioningStatus = $map['BucketVersioningStatus'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        return $model;
    }
}
