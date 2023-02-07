<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances\instance\applicableProducts;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var applicableProducts
     */
    public $applicableProducts;

    /**
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example Absolute
     *
     * @var string
     */
    public $deductType;

    /**
     * @example 2018-09-12T09:51:56Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example 2019-03-12T16:00:00Z
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @example OSSBAG-cn-v0h1s4hma01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example FPT_ossbag_absolute_Storage_sh
     *
     * @var string
     */
    public $packageType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 40.000
     *
     * @var string
     */
    public $remainingAmount;

    /**
     * @example GB
     *
     * @var string
     */
    public $remainingAmountUnit;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example 40.000
     *
     * @var string
     */
    public $totalAmount;

    /**
     * @example GB
     *
     * @var string
     */
    public $totalAmountUnit;
    protected $_name = [
        'applicableProducts'  => 'ApplicableProducts',
        'commodityCode'       => 'CommodityCode',
        'deductType'          => 'DeductType',
        'effectiveTime'       => 'EffectiveTime',
        'expiryTime'          => 'ExpiryTime',
        'instanceId'          => 'InstanceId',
        'packageType'         => 'PackageType',
        'region'              => 'Region',
        'remainingAmount'     => 'RemainingAmount',
        'remainingAmountUnit' => 'RemainingAmountUnit',
        'remark'              => 'Remark',
        'status'              => 'Status',
        'totalAmount'         => 'TotalAmount',
        'totalAmountUnit'     => 'TotalAmountUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = null !== $this->applicableProducts ? $this->applicableProducts->toMap() : null;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deductType) {
            $res['DeductType'] = $this->deductType;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remainingAmount) {
            $res['RemainingAmount'] = $this->remainingAmount;
        }
        if (null !== $this->remainingAmountUnit) {
            $res['RemainingAmountUnit'] = $this->remainingAmountUnit;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->totalAmountUnit) {
            $res['TotalAmountUnit'] = $this->totalAmountUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = applicableProducts::fromMap($map['ApplicableProducts']);
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeductType'])) {
            $model->deductType = $map['DeductType'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RemainingAmount'])) {
            $model->remainingAmount = $map['RemainingAmount'];
        }
        if (isset($map['RemainingAmountUnit'])) {
            $model->remainingAmountUnit = $map['RemainingAmountUnit'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['TotalAmountUnit'])) {
            $model->totalAmountUnit = $map['TotalAmountUnit'];
        }

        return $model;
    }
}
