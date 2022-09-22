<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeWaitingOrdersResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeWaitingOrdersResponseBody\data\instanceInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $failedMessage;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var instanceInfos[]
     */
    public $instanceInfos;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $lxCreateParam;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successAmount;

    /**
     * @var string
     */
    public $waitingOrderId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'chargeType'     => 'ChargeType',
        'createTime'     => 'CreateTime',
        'expireTime'     => 'ExpireTime',
        'failedMessage'  => 'FailedMessage',
        'instanceAmount' => 'InstanceAmount',
        'instanceInfos'  => 'InstanceInfos',
        'instanceType'   => 'InstanceType',
        'lxCreateParam'  => 'LxCreateParam',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
        'successAmount'  => 'SuccessAmount',
        'waitingOrderId' => 'WaitingOrderId',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->failedMessage) {
            $res['FailedMessage'] = $this->failedMessage;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = [];
            if (null !== $this->instanceInfos && \is_array($this->instanceInfos)) {
                $n = 0;
                foreach ($this->instanceInfos as $item) {
                    $res['InstanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lxCreateParam) {
            $res['LxCreateParam'] = $this->lxCreateParam;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successAmount) {
            $res['SuccessAmount'] = $this->successAmount;
        }
        if (null !== $this->waitingOrderId) {
            $res['WaitingOrderId'] = $this->waitingOrderId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FailedMessage'])) {
            $model->failedMessage = $map['FailedMessage'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n                    = 0;
                foreach ($map['InstanceInfos'] as $item) {
                    $model->instanceInfos[$n++] = null !== $item ? instanceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LxCreateParam'])) {
            $model->lxCreateParam = $map['LxCreateParam'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessAmount'])) {
            $model->successAmount = $map['SuccessAmount'];
        }
        if (isset($map['WaitingOrderId'])) {
            $model->waitingOrderId = $map['WaitingOrderId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
