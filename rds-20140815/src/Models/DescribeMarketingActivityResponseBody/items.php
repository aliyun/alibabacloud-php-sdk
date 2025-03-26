<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMarketingActivityResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $classGroup;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxIombps;

    /**
     * @var int
     */
    public $maxIops;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $upgradeCategory;

    /**
     * @var string
     */
    public $upgradeClassCode;

    /**
     * @var string
     */
    public $upgradeClassGroup;

    /**
     * @var string
     */
    public $upgradeCpu;

    /**
     * @var string
     */
    public $upgradeDescContent;

    /**
     * @var int
     */
    public $upgradeDiskSize;

    /**
     * @var int
     */
    public $upgradeMaxConnections;

    /**
     * @var int
     */
    public $upgradeMaxIombps;

    /**
     * @var int
     */
    public $upgradeMaxIops;

    /**
     * @var int
     */
    public $upgradeMemory;

    /**
     * @var string
     */
    public $upgradeReferencePrice;

    /**
     * @var string
     */
    public $upgradeStorageType;
    protected $_name = [
        'category' => 'Category',
        'chargeType' => 'ChargeType',
        'classCode' => 'ClassCode',
        'classGroup' => 'ClassGroup',
        'cpu' => 'Cpu',
        'diskSize' => 'DiskSize',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'maxConnections' => 'MaxConnections',
        'maxIombps' => 'MaxIombps',
        'maxIops' => 'MaxIops',
        'memory' => 'Memory',
        'storageType' => 'StorageType',
        'upgradeCategory' => 'UpgradeCategory',
        'upgradeClassCode' => 'UpgradeClassCode',
        'upgradeClassGroup' => 'UpgradeClassGroup',
        'upgradeCpu' => 'UpgradeCpu',
        'upgradeDescContent' => 'UpgradeDescContent',
        'upgradeDiskSize' => 'UpgradeDiskSize',
        'upgradeMaxConnections' => 'UpgradeMaxConnections',
        'upgradeMaxIombps' => 'UpgradeMaxIombps',
        'upgradeMaxIops' => 'UpgradeMaxIops',
        'upgradeMemory' => 'UpgradeMemory',
        'upgradeReferencePrice' => 'UpgradeReferencePrice',
        'upgradeStorageType' => 'UpgradeStorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
