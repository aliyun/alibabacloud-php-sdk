<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeSlotResponseBody\tags;

class DescribeSlotResponseBody extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ioType;

    /**
     * @var SlotLifeCycle
     */
    public $lifeCycle;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SlotStatus
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $storageUri;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'capacity' => 'Capacity',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId' => 'InstanceId',
        'ioType' => 'IoType',
        'lifeCycle' => 'LifeCycle',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'storageUri' => 'StorageUri',
        'tags' => 'Tags',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->lifeCycle) {
            $this->lifeCycle->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['LifeCycle'] = null !== $this->lifeCycle ? $this->lifeCycle->toArray($noStream) : $this->lifeCycle;
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
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->storageUri) {
            $res['StorageUri'] = $this->storageUri;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
