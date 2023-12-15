<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMarketingActivityResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **AlwaysOn**: RDS Cluster Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @description The payment type. Valid values:
     *
     *   POSTPAY: pay-as-you-go
     *   PREPAY: subscription
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The instance type. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~) and [Read-only ApsaraDB RDS instance types](~~145759~~).
     *
     * @example rds.mysql.s3.large
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The instance family. For more information, see [Overview of instance families](~~57184~~).
     *
     * @example x
     *
     * @var string
     */
    public $classGroup;

    /**
     * @description The number of CPU cores that are supported by the instance type. Unit: cores.
     *
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The disk capacity per node. Unit: GB.
     *
     * @example 900
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   MySQL
     *   SQLServer
     *   PostgreSQL
     *   PPAS
     *   MariaDB
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance ID.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 60
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum I/O throughput. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $maxIombps;

    /**
     * @description The maximum IOPS.
     *
     * @example 30
     *
     * @var int
     */
    public $maxIops;

    /**
     * @description The memory size.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: performance level 1 (PL1) enhanced SSD (ESSD)
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The RDS edition after the upgrade.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $upgradeCategory;

    /**
     * @description The instance type after the upgrade.
     *
     * @example rds.mysql.s3.large
     *
     * @var string
     */
    public $upgradeClassCode;

    /**
     * @description The instance family after the upgrade.
     *
     * @example d
     *
     * @var string
     */
    public $upgradeClassGroup;

    /**
     * @description The number of CPU cores after the upgrade.
     *
     * @example 8
     *
     * @var string
     */
    public $upgradeCpu;

    /**
     * @description The description of the upgrade.
     *
     * @example test
     *
     * @var string
     */
    public $upgradeDescContent;

    /**
     * @description The disk capacity after the upgrade.
     *
     * @example 1024
     *
     * @var int
     */
    public $upgradeDiskSize;

    /**
     * @description The maximum number of concurrent connections after the upgrade.
     *
     * @example 70
     *
     * @var int
     */
    public $upgradeMaxConnections;

    /**
     * @description The maximum I/O throughput after the upgrade. Unit: Mbit/s.
     *
     * @example 200
     *
     * @var int
     */
    public $upgradeMaxIombps;

    /**
     * @description The maximum IOPS after the upgrade.
     *
     * @example 70
     *
     * @var int
     */
    public $upgradeMaxIops;

    /**
     * @description The memory size after the upgrade.
     *
     * @example 1024
     *
     * @var int
     */
    public $upgradeMemory;

    /**
     * @description The reference price of the upgrade.
     *
     * @example 23333.1
     *
     * @var string
     */
    public $upgradeReferencePrice;

    /**
     * @description The storage type after the upgrade.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $upgradeStorageType;
    protected $_name = [
        'category'              => 'Category',
        'chargeType'            => 'ChargeType',
        'classCode'             => 'ClassCode',
        'classGroup'            => 'ClassGroup',
        'cpu'                   => 'Cpu',
        'diskSize'              => 'DiskSize',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'maxConnections'        => 'MaxConnections',
        'maxIombps'             => 'MaxIombps',
        'maxIops'               => 'MaxIops',
        'memory'                => 'Memory',
        'storageType'           => 'StorageType',
        'upgradeCategory'       => 'UpgradeCategory',
        'upgradeClassCode'      => 'UpgradeClassCode',
        'upgradeClassGroup'     => 'UpgradeClassGroup',
        'upgradeCpu'            => 'UpgradeCpu',
        'upgradeDescContent'    => 'UpgradeDescContent',
        'upgradeDiskSize'       => 'UpgradeDiskSize',
        'upgradeMaxConnections' => 'UpgradeMaxConnections',
        'upgradeMaxIombps'      => 'UpgradeMaxIombps',
        'upgradeMaxIops'        => 'UpgradeMaxIops',
        'upgradeMemory'         => 'UpgradeMemory',
        'upgradeReferencePrice' => 'UpgradeReferencePrice',
        'upgradeStorageType'    => 'UpgradeStorageType',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->classGroup) {
            $res['ClassGroup'] = $this->classGroup;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIombps) {
            $res['MaxIombps'] = $this->maxIombps;
        }
        if (null !== $this->maxIops) {
            $res['MaxIops'] = $this->maxIops;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->upgradeCategory) {
            $res['UpgradeCategory'] = $this->upgradeCategory;
        }
        if (null !== $this->upgradeClassCode) {
            $res['UpgradeClassCode'] = $this->upgradeClassCode;
        }
        if (null !== $this->upgradeClassGroup) {
            $res['UpgradeClassGroup'] = $this->upgradeClassGroup;
        }
        if (null !== $this->upgradeCpu) {
            $res['UpgradeCpu'] = $this->upgradeCpu;
        }
        if (null !== $this->upgradeDescContent) {
            $res['UpgradeDescContent'] = $this->upgradeDescContent;
        }
        if (null !== $this->upgradeDiskSize) {
            $res['UpgradeDiskSize'] = $this->upgradeDiskSize;
        }
        if (null !== $this->upgradeMaxConnections) {
            $res['UpgradeMaxConnections'] = $this->upgradeMaxConnections;
        }
        if (null !== $this->upgradeMaxIombps) {
            $res['UpgradeMaxIombps'] = $this->upgradeMaxIombps;
        }
        if (null !== $this->upgradeMaxIops) {
            $res['UpgradeMaxIops'] = $this->upgradeMaxIops;
        }
        if (null !== $this->upgradeMemory) {
            $res['UpgradeMemory'] = $this->upgradeMemory;
        }
        if (null !== $this->upgradeReferencePrice) {
            $res['UpgradeReferencePrice'] = $this->upgradeReferencePrice;
        }
        if (null !== $this->upgradeStorageType) {
            $res['UpgradeStorageType'] = $this->upgradeStorageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassGroup'])) {
            $model->classGroup = $map['ClassGroup'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIombps'])) {
            $model->maxIombps = $map['MaxIombps'];
        }
        if (isset($map['MaxIops'])) {
            $model->maxIops = $map['MaxIops'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UpgradeCategory'])) {
            $model->upgradeCategory = $map['UpgradeCategory'];
        }
        if (isset($map['UpgradeClassCode'])) {
            $model->upgradeClassCode = $map['UpgradeClassCode'];
        }
        if (isset($map['UpgradeClassGroup'])) {
            $model->upgradeClassGroup = $map['UpgradeClassGroup'];
        }
        if (isset($map['UpgradeCpu'])) {
            $model->upgradeCpu = $map['UpgradeCpu'];
        }
        if (isset($map['UpgradeDescContent'])) {
            $model->upgradeDescContent = $map['UpgradeDescContent'];
        }
        if (isset($map['UpgradeDiskSize'])) {
            $model->upgradeDiskSize = $map['UpgradeDiskSize'];
        }
        if (isset($map['UpgradeMaxConnections'])) {
            $model->upgradeMaxConnections = $map['UpgradeMaxConnections'];
        }
        if (isset($map['UpgradeMaxIombps'])) {
            $model->upgradeMaxIombps = $map['UpgradeMaxIombps'];
        }
        if (isset($map['UpgradeMaxIops'])) {
            $model->upgradeMaxIops = $map['UpgradeMaxIops'];
        }
        if (isset($map['UpgradeMemory'])) {
            $model->upgradeMemory = $map['UpgradeMemory'];
        }
        if (isset($map['UpgradeReferencePrice'])) {
            $model->upgradeReferencePrice = $map['UpgradeReferencePrice'];
        }
        if (isset($map['UpgradeStorageType'])) {
            $model->upgradeStorageType = $map['UpgradeStorageType'];
        }

        return $model;
    }
}
