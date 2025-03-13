<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBandwidthResourcePackagesRequest extends Model
{
    /**
     * @description The number of the data transfer plans that you want to create at the same time. Valid values: 1 to 20. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable the auto-payment feature.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The size of the data transfer plan. Valid values: 10 to 1000. Unit: GiB.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $packageSize;

    /**
     * @description The subscription duration. The valid values of this parameter vary based on the value of `PeriodUnit`.
     *
     *   If `PeriodUnit` is set to `Month`, the valid values of Period are 1, 3, and 6.
     *   If `PeriodUnit` is set to `Year`, the valid value of Period is 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * Valid values:
     *
     *   Month (default)
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the promotional activity.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'amount'      => 'Amount',
        'autoPay'     => 'AutoPay',
        'packageSize' => 'PackageSize',
        'period'      => 'Period',
        'periodUnit'  => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'regionId'    => 'RegionId',
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
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->packageSize) {
            $res['PackageSize'] = $this->packageSize;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBandwidthResourcePackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['PackageSize'])) {
            $model->packageSize = $map['PackageSize'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
