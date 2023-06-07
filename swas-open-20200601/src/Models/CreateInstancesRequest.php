<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateInstancesRequest extends Model
{
    /**
     * @description The number of simple application servers that you want to create. Valid values: 1 to 20.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   true: enables auto-renewal.
     *   false: does not enable auto-renewal.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period. This parameter is required only when you set `AutoRenew` to true. Unit: months Valid values: 1, 3, 6, 12, 24, and 36.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of the simple application server. Set the value to PrePaid, which indicates the subscription billing method. Only the subscription billing method is supported.
     *
     * Default value: PrePaid.
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.**** For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The size of the data disk. Unit: GB. Valid values: 0 to 16380. The value must be an integral multiple of 20.
     *
     *   A value of 0 indicates that no data disk is attached.
     *   If the disk included in the specified plan is a standard SSD, the data disk must be 20 GB or larger in size.
     *
     * Default value: 0.
     * @example 20
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The ID of the image. You can call the [ListImages](~~189313~~) operation to query the available images in the specified region.
     *
     * @example e2c9c365024a44369c9b955a998a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The subscription period. Unit: months Valid values: 1, 3, 6, 12, 24, and 36.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the plan. You can call the [ListPlans](~~189314~~) operation to query all the plans provided by Simple Application Server in the specified region.
     *
     * @example swas.s1.c1m1s40b3t05
     *
     * @var string
     */
    public $planId;

    /**
     * @description The region ID of the simple application servers. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'amount'          => 'Amount',
        'autoRenew'       => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'chargeType'      => 'ChargeType',
        'clientToken'     => 'ClientToken',
        'dataDiskSize'    => 'DataDiskSize',
        'imageId'         => 'ImageId',
        'period'          => 'Period',
        'planId'          => 'PlanId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
