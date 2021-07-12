<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $comment;

    /**
     * @var string
     */
    public $dispatcherType;

    /**
     * @var string
     */
    public $bucketAcl;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $dataRedundancyType;
    protected $_name = [
        'ownerId'            => 'OwnerId',
        'bucketName'         => 'BucketName',
        'endpoint'           => 'Endpoint',
        'comment'            => 'Comment',
        'dispatcherType'     => 'DispatcherType',
        'bucketAcl'          => 'BucketAcl',
        'storageClass'       => 'StorageClass',
        'resourceType'       => 'ResourceType',
        'dataRedundancyType' => 'DataRedundancyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dispatcherType) {
            $res['DispatcherType'] = $this->dispatcherType;
        }
        if (null !== $this->bucketAcl) {
            $res['BucketAcl'] = $this->bucketAcl;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DispatcherType'])) {
            $model->dispatcherType = $map['DispatcherType'];
        }
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }

        return $model;
    }
}
