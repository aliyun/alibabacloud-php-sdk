<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest\DBNode;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest\serverlessConfig;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity code of the instance. Valid values:
     *
     *   **bards**: The instance is a pay-as-you-go primary instance. This value is available at the China site (aliyun.com).
     *   **rds**: The instance is a subscription primary instance. This is the default value. This value is available at the China site (aliyun.com).
     *   **rords**: The instance is a pay-as-you-go read-only instance. This value is available at the China site (aliyun.com).
     *   **rds_rordspre_public_cn**: The instance is a subscription read-only instance. This value is available at the China site (aliyun.com).
     *   **bards_intl**: The instance is a pay-as-you-go primary instance. This value is available at the International site (alibabacloud.com).
     *   **rds_intl**: The instance is a subscription primary instance. This value is available at the International site (alibabacloud.com).
     *   **rords_intl**: The instance is a pay-as-you-go read-only instance. This value is available at the International site (alibabacloud.com).
     *   **rds_rordspre_public_intl**: The instance is a subscription read-only instance. This value is available on the International site (alibabacloud.com).
     *
     * > If you want to query the price of a read-only instance, you must specify this parameter.
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The instance type of the instance. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example rds.mysql.s1.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance for which you want to change the specifications or the instance that you want to renew.
     *
     * > *   If you want to query the price of a specification change order or a renewal order, you must specify this parameter.
     * > *   If the instance is a read-only instance, you must set this parameter to the ID of its primary instance.
     * @example rm-*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the instance. Unit: GB. You can increase the storage capacity at a step size of 5 GB. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: PL1 ESSD
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The information about the node.
     *
     * >  This parameter is supported for ApsaraDB RDS for MySQL instances that run RDS Cluster Edition.
     * @var DBNode[]
     */
    public $DBNode;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *   **MariaDB**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     *   Valid values if you set Engine to **MySQL**: **5.5**, **5.6**, **5.7**, and **8.0**
     *   Valid values if you set Engine to **SQLServer**: **08r2_ent_ha** (cloud disks, discontinued), **2008r2**(local disks, discontinued), **2012** (SQL Server EE Basic), **2012_ent_ha**, **2012_std_ha**, **2012_web**, **2016_ent_ha**, **2016_std_ha**, **2016_web**, **2017_ent**, **2017_std_ha**, **2017_web**, **2019_ent**, **2019_std_ha**, **2019_web**, **2022_ent**, **2022_std_ha**, and **2022_web**
     *   Valid values if you set Engine to **PostgreSQL**: **10.0**, **11.0**, **12.0**, **13.0**, **14.0**, and **15.0**
     *   Valid value if you set Engine to **MariaDB**: **10.3**
     *
     * This parameter is required.
     * @example 5.5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **0**: primary instance
     *   **3**: read-only instance
     *
     * @example 0
     *
     * @var int
     */
    public $instanceUsedType;

    /**
     * @description The order type. Valid values:
     *
     *   **BUY**: purchase order
     *   **UPGRADE**: specification change order
     *   **RENEW**: renewal order
     *
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Prepaid**: subscription
     *   **Postpaid**: pay-as-you-go
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The number of instances that you want to purchase. Valid values: **0 to 30**.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The settings of the serverless instance.
     *
     * > ApsaraDB RDS for MariaDB does not support serverless instances.
     * @var serverlessConfig
     */
    public $serverlessConfig;

    /**
     * @description The billing cycle of the subscription instance. This parameter is required when **CommodityCode** is set to **rds**, **rds_rordspre_public_cn**, **rds_intl**, or **rds_rordspre_public_intl**. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * @example Year
     *
     * @var string
     */
    public $timeType;

    /**
     * @description The subscription duration of the instance.
     *
     *   If you set the **TimeType** parameter to **Year**, the value of the UsedTime parameter ranges from **1 to 100**.
     *   If you set the **TimeType** parameter to **Month**, the value of the UsedTime parameter ranges from **1 to 999**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The zone ID of the primary instance. You can call the DescribeRegions operation to query the most recent zone list.
     *
     * >  If you specify a virtual private cloud (VPC) and a vSwitch, this parameter is required to identify the zone for the vSwitch.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'commodityCode'         => 'CommodityCode',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBNode'                => 'DBNode',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceUsedType'      => 'InstanceUsedType',
        'orderType'             => 'OrderType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'quantity'              => 'Quantity',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'serverlessConfig'      => 'ServerlessConfig',
        'timeType'              => 'TimeType',
        'usedTime'              => 'UsedTime',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBNode) {
            $res['DBNode'] = [];
            if (null !== $this->DBNode && \is_array($this->DBNode)) {
                $n = 0;
                foreach ($this->DBNode as $item) {
                    $res['DBNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceUsedType) {
            $res['InstanceUsedType'] = $this->instanceUsedType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serverlessConfig) {
            $res['ServerlessConfig'] = null !== $this->serverlessConfig ? $this->serverlessConfig->toMap() : null;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBNode'])) {
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n             = 0;
                foreach ($map['DBNode'] as $item) {
                    $model->DBNode[$n++] = null !== $item ? DBNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceUsedType'])) {
            $model->instanceUsedType = $map['InstanceUsedType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfig = serverlessConfig::fromMap($map['ServerlessConfig']);
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
