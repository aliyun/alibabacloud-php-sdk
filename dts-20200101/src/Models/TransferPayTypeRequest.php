<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class TransferPayTypeRequest extends Model
{
    /**
     * @description Specifies whether to automatically renew the DTS instance when it expires. Valid values:
     *
     *   **false**: does not automatically renew the DTS instance when it expires. This is the default value.
     *   **true**: automatically renews the DTS instance when it expires.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The subscription length.
     *
     *   If the **Period** parameter is set to **Year**, the value range is **1** to **5**.
     *   If the **Period** parameter is set to **Month**, the value range is **1** to **60**.
     *
     * >  You must specify this parameter only if you set the **ChargeType** parameter to **PrePaid**.
     *
     * @example 5
     *
     * @var string
     */
    public $buyCount;

    /**
     * @description The new billing method. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go.
     *
     * This parameter is required.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the data synchronization or change tracking task. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * This parameter is required.
     *
     * @example o4nh3g7jg56****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The new instance class of the DTS instance. You can call the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation to query the original instance class of the DTS instance.
     *
     *   DTS supports the following instance classes for a data migration instance: **xxlarge**, **xlarge**, **large**, **medium**, and **small**.
     *   DTS supports the following instance classes for a data synchronization instance: **large**, **medium**, **small**, and **micro**.
     *
     * > For more information about the test performance of each instance class, see [Specifications of data migration instances](https://help.aliyun.com/document_detail/26606.html) and [Specifications of data synchronization channels](https://help.aliyun.com/document_detail/26605.html).
     *
     * @example small
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The maximum number of DUs in a serverless instance. Valid values: 2, 4, 8, and 16.
     *
     * >  This feature is not supported. Do not specify this parameter.
     *
     * @example 16
     *
     * @var int
     */
    public $maxDu;

    /**
     * @description The minimum number of DTS Units (DUs) in a serverless instance. Valid values: 1, 2, 4, 8, and 16.
     *
     * >  This feature is not supported. Do not specify this parameter.
     *
     * @example 1
     *
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
     *
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'buyCount' => 'BuyCount',
        'chargeType' => 'ChargeType',
        'dtsJobId' => 'DtsJobId',
        'instanceClass' => 'InstanceClass',
        'maxDu' => 'MaxDu',
        'minDu' => 'MinDu',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->buyCount) {
            $res['BuyCount'] = $this->buyCount;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BuyCount'])) {
            $model->buyCount = $map['BuyCount'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
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
