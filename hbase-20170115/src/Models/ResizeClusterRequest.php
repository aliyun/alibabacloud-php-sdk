<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Tea\Model;

class ResizeClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloudType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $coreDiskQuantity;

    /**
     * @var string
     */
    public $coreDiskSize;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var string
     */
    public $coreInstanceQuantity;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $isColdStorage;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $upgradeType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'cloudType'            => 'CloudType',
        'clusterId'            => 'ClusterId',
        'coldStorageSize'      => 'ColdStorageSize',
        'coreDiskQuantity'     => 'CoreDiskQuantity',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreDiskType'         => 'CoreDiskType',
        'coreInstanceQuantity' => 'CoreInstanceQuantity',
        'coreInstanceType'     => 'CoreInstanceType',
        'engine'               => 'Engine',
        'isColdStorage'        => 'IsColdStorage',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'upgradeType'          => 'UpgradeType',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cloudType) {
            $res['CloudType'] = $this->cloudType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->coreDiskQuantity) {
            $res['CoreDiskQuantity'] = $this->coreDiskQuantity;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->coreInstanceQuantity) {
            $res['CoreInstanceQuantity'] = $this->coreInstanceQuantity;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isColdStorage) {
            $res['IsColdStorage'] = $this->isColdStorage;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CloudType'])) {
            $model->cloudType = $map['CloudType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['CoreDiskQuantity'])) {
            $model->coreDiskQuantity = $map['CoreDiskQuantity'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['CoreInstanceQuantity'])) {
            $model->coreInstanceQuantity = $map['CoreInstanceQuantity'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsColdStorage'])) {
            $model->isColdStorage = $map['IsColdStorage'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
