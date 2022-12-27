<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class BucketInfo extends Model
{
    /**
     * @example private
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @example bucket001
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example this is a bucket
     *
     * @var string
     */
    public $comment;

    /**
     * @example 2011-12-01T12:27:13.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @example global
     *
     * @var string
     */
    public $dispatcherType;

    /**
     * @example eos.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @example 2011-12-01T12:27:13.000Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example general
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Standard
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'bucketAcl'          => 'BucketAcl',
        'bucketName'         => 'BucketName',
        'comment'            => 'Comment',
        'createTime'         => 'CreateTime',
        'dataRedundancyType' => 'DataRedundancyType',
        'dispatcherType'     => 'DispatcherType',
        'endpoint'           => 'Endpoint',
        'ensRegionId'        => 'EnsRegionId',
        'modifyTime'         => 'ModifyTime',
        'resourceType'       => 'ResourceType',
        'storageClass'       => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketAcl) {
            $res['BucketAcl'] = $this->bucketAcl;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->dispatcherType) {
            $res['DispatcherType'] = $this->dispatcherType;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['DispatcherType'])) {
            $model->dispatcherType = $map['DispatcherType'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
