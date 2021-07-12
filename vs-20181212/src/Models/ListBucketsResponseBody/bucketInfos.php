<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsResponseBody;

use AlibabaCloud\Tea\Model;

class bucketInfos extends Model
{
    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $resourceType;

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
    public $createTime;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $bucketAcl;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'storageClass'       => 'StorageClass',
        'dataRedundancyType' => 'DataRedundancyType',
        'resourceType'       => 'ResourceType',
        'comment'            => 'Comment',
        'dispatcherType'     => 'DispatcherType',
        'createTime'         => 'CreateTime',
        'endpoint'           => 'Endpoint',
        'bucketAcl'          => 'BucketAcl',
        'bucketName'         => 'BucketName',
        'modifyTime'         => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dispatcherType) {
            $res['DispatcherType'] = $this->dispatcherType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->bucketAcl) {
            $res['BucketAcl'] = $this->bucketAcl;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DispatcherType'])) {
            $model->dispatcherType = $map['DispatcherType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
