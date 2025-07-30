<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request;

use AlibabaCloud\Tea\Model;

class frontendNodeGroups extends Model
{
    /**
     * @example 8
     *
     * @var int
     */
    public $cu;

    /**
     * @example 1
     *
     * @var int
     */
    public $diskNumber;

    /**
     * @example null
     *
     * @var string
     */
    public $localStorageInstanceType;

    /**
     * @example 3
     *
     * @var int
     */
    public $residentNodeNumber;

    /**
     * @example standard
     *
     * @var string
     */
    public $specType;

    /**
     * @example pl1
     *
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @example 100
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cu' => 'cu',
        'diskNumber' => 'diskNumber',
        'localStorageInstanceType' => 'localStorageInstanceType',
        'residentNodeNumber' => 'residentNodeNumber',
        'specType' => 'specType',
        'storagePerformanceLevel' => 'storagePerformanceLevel',
        'storageSize' => 'storageSize',
        'zoneId' => 'zoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->diskNumber) {
            $res['diskNumber'] = $this->diskNumber;
        }
        if (null !== $this->localStorageInstanceType) {
            $res['localStorageInstanceType'] = $this->localStorageInstanceType;
        }
        if (null !== $this->residentNodeNumber) {
            $res['residentNodeNumber'] = $this->residentNodeNumber;
        }
        if (null !== $this->specType) {
            $res['specType'] = $this->specType;
        }
        if (null !== $this->storagePerformanceLevel) {
            $res['storagePerformanceLevel'] = $this->storagePerformanceLevel;
        }
        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontendNodeGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }
        if (isset($map['diskNumber'])) {
            $model->diskNumber = $map['diskNumber'];
        }
        if (isset($map['localStorageInstanceType'])) {
            $model->localStorageInstanceType = $map['localStorageInstanceType'];
        }
        if (isset($map['residentNodeNumber'])) {
            $model->residentNodeNumber = $map['residentNodeNumber'];
        }
        if (isset($map['specType'])) {
            $model->specType = $map['specType'];
        }
        if (isset($map['storagePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['storagePerformanceLevel'];
        }
        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
