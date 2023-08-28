<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method of the instance.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The service code.
     *
     * @example ha3-code
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2018-12-06T11:17:49.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the instance.
     *
     * @example Test instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the instance expires.
     *
     * @example 2019-01-06T16:00:00.0
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Indicates whether an overdue payment is involved.
     *
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @description The ID of the instance.
     *
     * @example ha-cn-0ju2s170b03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock mode of the instance.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aeky6hthboewpuy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The state of the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the instance was last updated.
     *
     * @example 2018-12-06T11:17:49.0
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'chargeType'      => 'chargeType',
        'commodityCode'   => 'commodityCode',
        'createTime'      => 'createTime',
        'description'     => 'description',
        'expiredTime'     => 'expiredTime',
        'inDebt'          => 'inDebt',
        'instanceId'      => 'instanceId',
        'lockMode'        => 'lockMode',
        'resourceGroupId' => 'resourceGroupId',
        'status'          => 'status',
        'updateTime'      => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
