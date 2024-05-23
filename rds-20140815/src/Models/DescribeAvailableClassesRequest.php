<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableClassesRequest extends Model
{
    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   Regular instance
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **cluster**: RDS Cluster Edition for ApsaraDB RDS for MySQL
     *   **AlwaysOn**: RDS Cluster Edition for ApsaraDB RDS for SQL Server
     *   **Finance**: RDS Enterprise Edition
     *
     *   Serverless instance
     *
     *   **serverless_basic**: RDS Basic Edition. This edition is available only for serverless instances that run MySQL and PostgreSQL.
     *   **serverless_standard**: RDS High-availability Edition for ApsaraDB RDS for MySQL.
     *   **serverless_ha**: RDS High-availability Edition for ApsaraDB RDS for SQL Server.
     *
     * This parameter is required.
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The commodity code of the instance. Valid values:
     *
     *   **bards**: The instance is a pay-as-you-go primary instance. This value is available at the China site (aliyun.com).
     *   **rds**: The instance is a subscription primary instance. This value is available at the China site (aliyun.com).
     *   **rords**: The instance is a pay-as-you-go read-only instance. This value is available at the China site (aliyun.com).
     *   **rds_rordspre_public_cn**: The instance is a subscription read-only instance. This value is available at the China site (aliyun.com).
     *   **bards_intl**: The instance is a pay-as-you-go primary instance. This value is available at the International site (alibabacloud.com).
     *   **rds_intl**: The instance is a subscription primary instance. This value is available at the International site (alibabacloud.com).
     *   **rords_intl**: The instance is a pay-as-you-go read-only instance. This value is available at the International site (alibabacloud.com).
     *   **rds_rordspre_public_intl**: The instance is a subscription read-only instance. This value is available at the International site (alibabacloud.com).
     *   **rds_serverless_public_cn**: The instance is a serverless instance. This value is available at the China site (aliyun.com).
     *   **rds_serverless_public_intl**: The instance is a serverless instance. This value is available at the International site (alibabacloud.com).
     *
     * > If you want to query the price of a read-only instance, you must specify this parameter.
     * @example bards
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-uf6wjk5xxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD. This is the recommended storage type.
     *   **cloud_ssd**: standard SSD.
     *   **cloud_essd**: enhanced SSDs (ESSDs) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSDs of PL2
     *   **cloud_essd3**: ESSD of PL3
     *
     * > Serverless instances support only ESSDs of PL 1. For a serverless instance, you must set this parameter to **cloud_essd**.
     *
     * This parameter is required.
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The database engine that is run by the instance. Valid values:
     *
     * **MySQL**
     * **SQLServer**
     * **PostgreSQL**
     * **MariaDB**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   Regular instance
     *
     *   Valid values if you set Engine to MySQL: **5.5, 5.6, 5.7, and 8.0**
     *   Valid values if you set Engine to SQLServer: **2008r2, 08r2_ent_ha, 2012, 2012_ent_ha, 2012_std_ha, 2012_web, 2014_std_ha, 2016_ent_ha, 2016_std_ha, 2016_web, 2017_std_ha, 2017_ent, 2019_std_ha, and 2019_ent**
     *   Valid values if you set Engine to PostgreSQL: **10.0, 11.0, 12.0, 13.0, 14.0, and 15.0**
     *   Valid value when you set Engine to MariaDB: **10.3**
     *
     *   Serverless instance
     *
     *   Valid values if you set Engine to MySQL: **5.7** and **8.0**
     *   Valid values if you set Engine to SQLServer: **2016_std_sl**, **2017_std_sl**, and **2019_std_sl**
     *   Valid value if you set Engine to PostgreSQL: **14.0**
     *
     * This parameter is required.
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Prepaid**: subscription
     *   **Postpaid**: pay-as-you-go
     *   **Serverless**: serverless
     *
     * > ApsaraDB RDS for MariaDB does not support serverless instances.
     * @example Prepaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The type of the order. Set the value to **BUY**
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The region ID of the instance. You can call the DescribeDBInstanceAttribute operation to query the region ID of the instance.
     *
     * This parameter is required.
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
     * @description The zone ID of the instance. You can call the DescribeDBInstanceAttribute operation to query the zone ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'              => 'Category',
        'commodityCode'         => 'CommodityCode',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceChargeType'    => 'InstanceChargeType',
        'orderType'             => 'OrderType',
        'regionId'              => 'RegionId',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableClassesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
