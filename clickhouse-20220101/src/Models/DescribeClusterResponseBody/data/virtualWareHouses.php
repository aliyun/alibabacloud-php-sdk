<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterResponseBody\data;

use AlibabaCloud\Tea\Model;

class virtualWareHouses extends Model
{
    /**
     * @example tcp:9000,http:8123,mysql:9004
     *
     * @var string
     */
    public $ports;

    /**
     * @example 200
     *
     * @var int
     */
    public $virtualWareHouseCacheStorage;

    /**
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
     * @example vw-bp1w2728d535t****
     *
     * @var string
     */
    public $virtualWareHouseId;

    /**
     * @example Running
     *
     * @var string
     */
    public $virtualWareHouseStatus;

    /**
     * @example vsw-2vcmrf8c878scsv43****
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
        'ports'                        => 'Ports',
        'virtualWareHouseCacheStorage' => 'VirtualWareHouseCacheStorage',
        'virtualWareHouseClass'        => 'VirtualWareHouseClass',
        'virtualWareHouseDescription'  => 'VirtualWareHouseDescription',
        'virtualWareHouseId'           => 'VirtualWareHouseId',
        'virtualWareHouseStatus'       => 'VirtualWareHouseStatus',
        'vswitchId'                    => 'VswitchId',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
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
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
        }
        if (null !== $this->virtualWareHouseStatus) {
            $res['VirtualWareHouseStatus'] = $this->virtualWareHouseStatus;
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
     * @return virtualWareHouses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
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
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }
        if (isset($map['VirtualWareHouseStatus'])) {
            $model->virtualWareHouseStatus = $map['VirtualWareHouseStatus'];
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
