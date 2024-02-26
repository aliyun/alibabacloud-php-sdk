<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeSlotResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeSlotResponseBody extends Model
{
    /**
     * @example 30.0G
     *
     * @var string
     */
    public $capacity;

    /**
     * @example xgboost数据集加速槽
     *
     * @var string
     */
    public $description;

    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example inst-my1tk3jggooi5uwks5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 数据集加速槽的读写类型。
     *
     * @example readonly
     *
     * @var string
     */
    public $ioType;

    /**
     * @var SlotLifeCycle
     */
    public $lifeCycle;

    /**
     * @example slot_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SlotStatus
     */
    public $status;

    /**
     * @example OSS
     *
     * @var string
     */
    public $storageType;

    /**
     * @example oss://pai-vision-data-hz2.oss-cn-hangzhou-internal.aliyuncs.com/data/VOCdevkit/VOC2007/ImageSets/Main/val.txt
     *
     * @var string
     */
    public $storageUri;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 276065346797410278
     *
     * @var string
     */
    public $userId;

    /**
     * @example slot-5zk866779me51jgu3w
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'capacity'        => 'Capacity',
        'description'     => 'Description',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId'      => 'InstanceId',
        'ioType'          => 'IoType',
        'lifeCycle'       => 'LifeCycle',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'requestId'       => 'RequestId',
        'status'          => 'Status',
        'storageType'     => 'StorageType',
        'storageUri'      => 'StorageUri',
        'tags'            => 'Tags',
        'userId'          => 'UserId',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = null !== $this->lifeCycle ? $this->lifeCycle->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUri) {
            $res['StorageUri'] = $this->storageUri;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = SlotLifeCycle::fromMap($map['LifeCycle']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = SlotStatus::fromMap($map['Status']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUri'])) {
            $model->storageUri = $map['StorageUri'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
