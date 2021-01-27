<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandwidthPackageResponseBody extends Model
{
    /**
     * @var string
     */
    public $cbnGeographicRegionIdB;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $accelerators;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $billingType;
    protected $_name = [
        'cbnGeographicRegionIdB' => 'CbnGeographicRegionIdB',
        'cbnGeographicRegionIdA' => 'CbnGeographicRegionIdA',
        'description'            => 'Description',
        'requestId'              => 'RequestId',
        'createTime'             => 'CreateTime',
        'name'                   => 'Name',
        'bandwidthType'          => 'BandwidthType',
        'type'                   => 'Type',
        'accelerators'           => 'Accelerators',
        'state'                  => 'State',
        'chargeType'             => 'ChargeType',
        'bandwidth'              => 'Bandwidth',
        'expiredTime'            => 'ExpiredTime',
        'bandwidthPackageId'     => 'BandwidthPackageId',
        'regionId'               => 'RegionId',
        'billingType'            => 'BillingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cbnGeographicRegionIdB) {
            $res['CbnGeographicRegionIdB'] = $this->cbnGeographicRegionIdB;
        }
        if (null !== $this->cbnGeographicRegionIdA) {
            $res['CbnGeographicRegionIdA'] = $this->cbnGeographicRegionIdA;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->accelerators) {
            $res['Accelerators'] = $this->accelerators;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CbnGeographicRegionIdB'])) {
            $model->cbnGeographicRegionIdB = $map['CbnGeographicRegionIdB'];
        }
        if (isset($map['CbnGeographicRegionIdA'])) {
            $model->cbnGeographicRegionIdA = $map['CbnGeographicRegionIdA'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = $map['Accelerators'];
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }

        return $model;
    }
}
