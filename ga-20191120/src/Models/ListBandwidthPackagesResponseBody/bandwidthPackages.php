<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponseBody\bandwidthPackages\tags;
use AlibabaCloud\Tea\Model;

class bandwidthPackages extends Model
{
    /**
     * @description The IDs of the GA instances that are associated with the bandwidth plans.
     *
     * @var string[]
     */
    public $accelerators;

    /**
     * @description The bandwidth value of the bandwidth plan. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The type of the bandwidth. Valid values:
     *
     *   **Basic**
     *   **Enhanced**
     *   **Advanced**
     *
     * @example Basic
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The metering method that is used when you use the pay-as-you-go billing method.
     *
     *   **PayByTraffic**: pay-by-data-transfer.
     *   **PayBY95**: pay-by-95th-percentile.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $billingType;

    /**
     * @description Area A of the cross-region acceleration bandwidth plan. **China-mainland** is returned.
     *
     * This parameter is returned only if you call the operation on the international site (alibabacloud.com).
     * @example China-mainland
     *
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @description Area B of the cross-region acceleration bandwidth plan. **Global** is returned.
     *
     * This parameter is returned only if you call the operation on the international site (alibabacloud.com).
     * @example Global
     *
     * @var string
     */
    public $cbnGeographicRegionIdB;

    /**
     * @description The billing method of the bandwidth plan.
     *
     *   **PREPAY**: subscription. This is the default value.
     *   **POSTPAY**: pay-as-you-go.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the bandwidth plan was created.
     *
     * @example 1578966918000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the bandwidth plan.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The expiration time of the bandwidth plan.
     *
     * @example 1578966918000
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the bandwidth plan.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The percentage of the guaranteed minimum bandwidth if the pay-by-95th-percentile metering method is used.
     *
     * @example 30
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The ID of the region where the GA instance is deployed. **cn-hangzhou** is returned.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2ry6mp2c****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the bandwidth plan. Valid values:
     *
     *   **init:** The bandwidth plan is being initialized.
     *   **active:** The bandwidth plan is available.
     *   **binded:** The bandwidth plan is associated with a GA instance.
     *   **binding:** The bandwidth plan is being associated with a GA instance.
     *   **unbinding:** The bandwidth plan is being disassociated from a GA instance.
     *   **updating:** The bandwidth plan is being updated.
     *   **finacialLocked:** The bandwidth plan is locked due to overdue payments.
     *   **locked**: The bandwidth plan is locked.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The tag of the bandwidth plan.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the bandwidth plan. Valid values:
     *
     *   **Basic:** a basic bandwidth plan.
     *   **CrossDomain:** a cross-region acceleration bandwidth plan.
     *
     * If you call the operation on the China site (aliyun.com), **Basic** is returned.
     * @example Basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accelerators'           => 'Accelerators',
        'bandwidth'              => 'Bandwidth',
        'bandwidthPackageId'     => 'BandwidthPackageId',
        'bandwidthType'          => 'BandwidthType',
        'billingType'            => 'BillingType',
        'cbnGeographicRegionIdA' => 'CbnGeographicRegionIdA',
        'cbnGeographicRegionIdB' => 'CbnGeographicRegionIdB',
        'chargeType'             => 'ChargeType',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'expiredTime'            => 'ExpiredTime',
        'name'                   => 'Name',
        'ratio'                  => 'Ratio',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'state'                  => 'State',
        'tags'                   => 'Tags',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerators) {
            $res['Accelerators'] = $this->accelerators;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->cbnGeographicRegionIdA) {
            $res['CbnGeographicRegionIdA'] = $this->cbnGeographicRegionIdA;
        }
        if (null !== $this->cbnGeographicRegionIdB) {
            $res['CbnGeographicRegionIdB'] = $this->cbnGeographicRegionIdB;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = $map['Accelerators'];
            }
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['CbnGeographicRegionIdA'])) {
            $model->cbnGeographicRegionIdA = $map['CbnGeographicRegionIdA'];
        }
        if (isset($map['CbnGeographicRegionIdB'])) {
            $model->cbnGeographicRegionIdB = $map['CbnGeographicRegionIdB'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
