<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\InstanceStatus;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListInstancesResponseBody\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 30.0G
     *
     * @var string
     */
    public $capacity;

    /**
     * @example xgboost数据集加速实例
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
     * @example readonly
     *
     * @var string
     */
    public $ioType;

    /**
     * @description 数据集加速实例的最大挂载点个数。
     *
     * @var int
     */
    public $maxEndpoint;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxSlot;

    /**
     * @example acc_instance_1
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
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 数据集加速实例的资源提供者类型。
     *
     * @example Ecs
     *
     * @var string
     */
    public $providerType;

    /**
     * @var InstanceStatus
     */
    public $status;

    /**
     * @description 数据集加速实例的存储类型。
     *
     * @example OSS
     *
     * @var string
     */
    public $storageType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example Basic
     *
     * @var string
     */
    public $type;

    /**
     * @example 276065346797410278
     *
     * @var string
     */
    public $userId;

    /**
     * @example inst-my1tk3jggooi5uwks5
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'capacity'        => 'Capacity',
        'description'     => 'Description',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'ioType'          => 'IoType',
        'maxEndpoint'     => 'MaxEndpoint',
        'maxSlot'         => 'MaxSlot',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'paymentType'     => 'PaymentType',
        'providerType'    => 'ProviderType',
        'status'          => 'Status',
        'storageType'     => 'StorageType',
        'tags'            => 'Tags',
        'type'            => 'Type',
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
        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }
        if (null !== $this->maxEndpoint) {
            $res['MaxEndpoint'] = $this->maxEndpoint;
        }
        if (null !== $this->maxSlot) {
            $res['MaxSlot'] = $this->maxSlot;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
     * @return instances
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
        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }
        if (isset($map['MaxEndpoint'])) {
            $model->maxEndpoint = $map['MaxEndpoint'];
        }
        if (isset($map['MaxSlot'])) {
            $model->maxSlot = $map['MaxSlot'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }
        if (isset($map['Status'])) {
            $model->status = InstanceStatus::fromMap($map['Status']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
