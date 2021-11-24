<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class bandwidthPackages extends Model
{
    /**
     * @var string[]
     */
    public $accelerators;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdB;

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
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ratio;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;

    /**
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
        'state'                  => 'State',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
