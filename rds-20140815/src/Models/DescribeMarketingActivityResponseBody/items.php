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
     *   **HighAvailability**: High-availability Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * > This parameter is returned only when **InstanceLevel** is set to **1**.
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PostPaid** (default): pay-as-you-go
     *   **PrePaid**: subscription
     *
     * > **Period** is required if you set the value of this parameter to **PrePaid**.
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The code of the instance type. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~) and [Read-only ApsaraDB RDS instance types](~~145759~~).
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
     * @description The number of vCPU cores. Unit: cores.
     *
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The disk size. Unit: GB.
     *
     *   The disk size that you specify must be greater than or equal to the current disk size of the instance.
     *   For more information about the valid values, see [Billing](~~84737~~).
     *
     * @example 900
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **SQLServer**
     *   **MariaDB**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version.
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
     * @description MaxIombps
     *
     * @example 100
     *
     * @var int
     */
    public $maxIombps;

    /**
     * @description MaxIops
     *
     * @example 30
     *
     * @var int
     */
    public $maxIops;

    /**
     * @description The memory size that you applied for each instance. Unit: MB.
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
     *   **cloud_essd**: enhanced SSD (ESSD) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSD of PL2
     *   **cloud_essd3**: ESSD of PL3
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description UpgradeCategory
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $upgradeCategory;

    /**
     * @description UpgradeClassCode
     *
     * @example rds.mysql.s3.large
     *
     * @var string
     */
    public $upgradeClassCode;

    /**
     * @description UpgradeClassGroup
     *
     * @example d
     *
     * @var string
     */
    public $upgradeClassGroup;

    /**
     * @description UpgradeCpu
     *
     * @example 8
     *
     * @var string
     */
    public $upgradeCpu;

    /**
     * @description UpgradeDescContent
     *
     * @example test
     *
     * @var string
     */
    public $upgradeDescContent;

    /**
     * @description UpgradeDiskSize
     *
     * @example 1024
     *
     * @var int
     */
    public $upgradeDiskSize;

    /**
     * @description UpgradeMaxConnections
     *
     * @example 70
     *
     * @var int
     */
    public $upgradeMaxConnections;

    /**
     * @description UpgradeMaxIombps
     *
     * @example 200
     *
     * @var int
     */
    public $upgradeMaxIombps;

    /**
     * @description UpgradeMaxIops
     *
     * @example 70
     *
     * @var int
     */
    public $upgradeMaxIops;

    /**
     * @description UpgradeMemory
     *
     * @example 1024
     *
     * @var int
     */
    public $upgradeMemory;

    /**
     * @description UpgradeReferencePrice
     *
     * @example 23333.1
     *
     * @var string
     */
    public $upgradeReferencePrice;

    /**
     * @description UpgradeStorageType
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
