<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description The subscription duration of the DTS instance after renewal. Default value: 1.
     *
     *   If the **Period** parameter is set to **Year**, the valid values are **1 to 5**.
     *   If the **Period** parameter is set to **Month**, the valid values are **1 to 60**.
     *
     * @example 1
     *
     * @var string
     */
    public $buyCount;

    /**
     * @description The billing method of the DTS instance. Set the value to **PREPAY**, which indicates the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the data synchronization or change tracking task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example qi0r643lc31****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The billing cycle of the DTS instance after renewal. Valid values:
     *
     *   **Year**: annual subscription.
     *   **Month**: monthly subscription. This is the default value.
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'buyCount'   => 'BuyCount',
        'chargeType' => 'ChargeType',
        'dtsJobId'   => 'DtsJobId',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyCount) {
            $res['BuyCount'] = $this->buyCount;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyCount'])) {
            $model->buyCount = $map['BuyCount'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
