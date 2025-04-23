<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $inDebt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'createTime' => 'createTime',
        'description' => 'description',
        'expiredTime' => 'expiredTime',
        'inDebt' => 'inDebt',
        'instanceId' => 'instanceId',
        'lockMode' => 'lockMode',
        'resourceGroupId' => 'resourceGroupId',
        'status' => 'status',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        if (null !== $this->inDebt) {
            $res['inDebt'] = $this->inDebt;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        if (isset($map['inDebt'])) {
            $model->inDebt = $map['inDebt'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
