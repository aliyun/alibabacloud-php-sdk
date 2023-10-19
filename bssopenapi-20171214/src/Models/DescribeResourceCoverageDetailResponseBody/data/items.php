<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The unit that is used to measure the resources deducted from deduction plans.
     *
     * @var string
     */
    public $capacityUnit;

    /**
     * @description The code of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The name and billing method of the service.
     *
     * @var string
     */
    public $commodityName;

    /**
     * @description The coverage rate of a deduction plan.
     *
     * @example 1
     *
     * @var float
     */
    public $coveragePercentage;

    /**
     * @description The currency in which deduction plans were priced.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount of the resources deducted from a deduction plan.
     *
     * @example 1
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @description The end of the time range in which the coverage details were queried.
     *
     * @example 2021-04-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of a pay-as-you-go instance.
     *
     * @example i-bp1d9x623987rlj0dx4xx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The specifications of a deduction plan.
     *
     * @example ecs.t5-lc2m1.nano
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The amount of the bill.
     *
     * @example 0
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description The code of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The name of the service.
     *
     * @var string
     */
    public $productName;

    /**
     * @description The region.
     *
     * @var string
     */
    public $region;

    /**
     * @description The code of the region.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The beginning of the time range in which the coverage details were queried.
     *
     * @example 2021-04-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The total amount of resources consumed.
     *
     * @example 1
     *
     * @var float
     */
    public $totalQuantity;

    /**
     * @description The ID of the account.
     *
     * @example 123745698925000
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username of the account.
     *
     * @example test13@test.aliyun.com
     *
     * @var string
     */
    public $userName;

    /**
     * @description The code of the zone.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zone;

    /**
     * @description The zone.
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'capacityUnit'       => 'CapacityUnit',
        'commodityCode'      => 'CommodityCode',
        'commodityName'      => 'CommodityName',
        'coveragePercentage' => 'CoveragePercentage',
        'currency'           => 'Currency',
        'deductQuantity'     => 'DeductQuantity',
        'endTime'            => 'EndTime',
        'instanceId'         => 'InstanceId',
        'instanceSpec'       => 'InstanceSpec',
        'paymentAmount'      => 'PaymentAmount',
        'productCode'        => 'ProductCode',
        'productName'        => 'ProductName',
        'region'             => 'Region',
        'regionNo'           => 'RegionNo',
        'startTime'          => 'StartTime',
        'totalQuantity'      => 'TotalQuantity',
        'userId'             => 'UserId',
        'userName'           => 'UserName',
        'zone'               => 'Zone',
        'zoneName'           => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->coveragePercentage) {
            $res['CoveragePercentage'] = $this->coveragePercentage;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalQuantity) {
            $res['TotalQuantity'] = $this->totalQuantity;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalQuantity'])) {
            $model->totalQuantity = $map['TotalQuantity'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
