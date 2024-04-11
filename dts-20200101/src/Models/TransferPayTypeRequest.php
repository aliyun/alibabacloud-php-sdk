<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class TransferPayTypeRequest extends Model
{
    /**
     * @description The subscription length.
     *
     *   If the **Period** parameter is set to **Year**, the value range is **1** to **5**.
     *   If the **Period** parameter is set to **Month**, the value range is **1** to **60**.
     *
     * >  You must specify this parameter only if you set the **ChargeType** parameter to **PrePaid**.
     * @example 5
     *
     * @var string
     */
    public $buyCount;

    /**
     * @description The billing method that you want to use. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * >
     *   The billing method of subscription instances cannot be changed to pay-as-you-go. To prevent resource waste, determine whether you need to change the billing method of your resources.
     *   If you do not need to change the billing method, specify the current billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the data synchronization or change tracking task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example o4nh3g7jg56****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @var int
     */
    public $maxDu;

    /**
     * @var int
     */
    public $minDu;

    /**
     * @description The billing cycle of the subscription instance. Valid values:
     *
     *   **Year**
     *   **Month** (default value)
     *
     * >  You must specify this parameter only if you set the **ChargeType** parameter to **PrePaid**.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'buyCount'        => 'BuyCount',
        'chargeType'      => 'ChargeType',
        'dtsJobId'        => 'DtsJobId',
        'maxDu'           => 'MaxDu',
        'minDu'           => 'MinDu',
        'period'          => 'Period',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }
        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferPayTypeRequest
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
        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }
        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
