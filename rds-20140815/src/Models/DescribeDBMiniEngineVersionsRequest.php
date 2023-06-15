<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBMiniEngineVersionsRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5*******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the dedicated cluster. You can call the [DescribeDedicatedHostGroups](~~141946~~) operation to query the ID of the dedicated cluster.
     *
     * @example dhg-4n*****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The database engine of the instance. Valid values: **MySQL** and **PostgreSQL**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     *   Valid values when you set the Engine parameter to MySQL: **8.0**, **5.7**, **5.6**, and **5.5**
     *   Valid values when you set the Engine parameter to PostgreSQL: **14.0**, **13.0**, **12.0**, **11.0**, and **10.0**
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The minor engine version of the instance. You can specify this parameter to query the minor engine version of the instance.
     *
     * @example rds_20220731
     *
     * @var string
     */
    public $minorVersionTag;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: enhanced SSD (ESSD) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSD of PL2
     *   **cloud_essd3**: ESSD of PL3
     *
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'minorVersionTag'      => 'MinorVersionTag',
        'nodeType'             => 'NodeType',
        'regionId'             => 'RegionId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'storageType'          => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->minorVersionTag) {
            $res['MinorVersionTag'] = $this->minorVersionTag;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBMiniEngineVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['MinorVersionTag'])) {
            $model->minorVersionTag = $map['MinorVersionTag'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
