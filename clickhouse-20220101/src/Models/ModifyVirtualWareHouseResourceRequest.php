<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyVirtualWareHouseResourceRequest extends Model
{
    /**
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
     * @description This parameter is required.
     *
     * @example vw-uf62965t8lt50****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'DBClusterId'                  => 'DBClusterId',
        'regionId'                     => 'RegionId',
        'virtualWareHouseCacheStorage' => 'VirtualWareHouseCacheStorage',
        'virtualWareHouseClass'        => 'VirtualWareHouseClass',
        'virtualWareHouseId'           => 'VirtualWareHouseId',
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
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVirtualWareHouseResourceRequest
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
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
