<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class BucketInfo extends Model
{
    /**
     * @description Bucket读写权限类型： public-read-write：公共读写 public-read：公共读 private：私有（默认值）
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @description Bucket名称。 3~50 个字符，只允许小写字母、数字、短横线（-），且不能以短横线开头或结尾。
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description 备注。 1-128个字符或汉字，UTF-8编码。
     *
     * @var string
     */
    public $comment;

    /**
     * @description Bucket创建时间。 （格式：yyyy-mm-ddThh:mm:ss.timezone, 例如 2011-12-01T12:27:13.000Z）
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 指定Bucket的数据容灾类型。 取值范围： LRS（默认值）。本地冗余LRS ZRS 同城冗余ZRS采用多可用区（AZ）机制。
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @description Bucket的调度类型： node：节点(同城) area：区域(多城市) global：全局(全国)
     *
     * @var string
     */
    public $dispatcherType;

    /**
     * @description 访问域名，边缘存储取值： eos.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description 节点区域id，如果为空表示全局
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description Bucket修改时间。 （格式：yyyy-mm-ddThh:mm:ss.timezone, 例如 2011-12-01T12:27:13.000Z）
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 指定Bucket的资源类型。 取值范围： general：通用 national-network：国网
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Bucket存储类型，支持Standard
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
