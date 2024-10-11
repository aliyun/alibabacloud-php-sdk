<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualWareHouseRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var int
     */
    public $virtualWareHouseCacheStorage;

    /**
     * @description This parameter is required.
     *
     * @example n1.xlarge
     *
     * @var string
     */
    public $virtualWareHouseClass;

    /**
     * @example test
     *
     * @var string
     */
    public $virtualWareHouseDescription;

    /**
     * @example vsw-uf632qye9oqt4x4sr****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBClusterId'                  => 'DBClusterId',
        'regionId'                     => 'RegionId',
        'virtualWareHouseCacheStorage' => 'VirtualWareHouseCacheStorage',
        'virtualWareHouseClass'        => 'VirtualWareHouseClass',
        'virtualWareHouseDescription'  => 'VirtualWareHouseDescription',
        'vswitchId'                    => 'VswitchId',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualWareHouseCacheStorage) {
            $res['VirtualWareHouseCacheStorage'] = $this->virtualWareHouseCacheStorage;
        }
        if (null !== $this->virtualWareHouseClass) {
            $res['VirtualWareHouseClass'] = $this->virtualWareHouseClass;
        }
        if (null !== $this->virtualWareHouseDescription) {
            $res['VirtualWareHouseDescription'] = $this->virtualWareHouseDescription;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualWareHouseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualWareHouseCacheStorage'])) {
            $model->virtualWareHouseCacheStorage = $map['VirtualWareHouseCacheStorage'];
        }
        if (isset($map['VirtualWareHouseClass'])) {
            $model->virtualWareHouseClass = $map['VirtualWareHouseClass'];
        }
        if (isset($map['VirtualWareHouseDescription'])) {
            $model->virtualWareHouseDescription = $map['VirtualWareHouseDescription'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
