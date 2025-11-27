<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceShrinkRequest\tag;

class CreateDBInstanceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoCreateProxy;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $babelfishConfig;

    /**
     * @var string
     */
    public $bpeEnabled;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $createStrategy;

    /**
     * @var string
     */
    public $customExtraInfo;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $DBIsIgnoreCase;

    /**
     * @var string
     */
    public $DBParamGroupId;

    /**
     * @var string
     */
    public $DBTimeZone;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $externalReplication;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @var string
     */
    public $optimizedWrites;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $serverlessConfigShrink;

    /**
     * @var string
     */
    public $storageAutoScale;

    /**
     * @var int
     */
    public $storageThreshold;

    /**
     * @var int
     */
    public $storageUpperBound;

    /**
     * @var string
     */
    public $systemDBCharset;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $targetDedicatedHostIdForLog;

    /**
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $userBackupId;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $whitelistTemplateList;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'amount' => 'Amount',
        'autoCreateProxy' => 'AutoCreateProxy',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'babelfishConfig' => 'BabelfishConfig',
        'bpeEnabled' => 'BpeEnabled',
        'burstingEnabled' => 'BurstingEnabled',
        'businessInfo' => 'BusinessInfo',
        'category' => 'Category',
        'clientToken' => 'ClientToken',
        'coldDataEnabled' => 'ColdDataEnabled',
        'connectionMode' => 'ConnectionMode',
        'connectionString' => 'ConnectionString',
        'createStrategy' => 'CreateStrategy',
        'customExtraInfo' => 'CustomExtraInfo',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBIsIgnoreCase' => 'DBIsIgnoreCase',
        'DBParamGroupId' => 'DBParamGroupId',
        'DBTimeZone' => 'DBTimeZone',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'deletionProtection' => 'DeletionProtection',
        'dryRun' => 'DryRun',
        'encryptionKey' => 'EncryptionKey',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'externalReplication' => 'ExternalReplication',
        'instanceNetworkType' => 'InstanceNetworkType',
        'ioAccelerationEnabled' => 'IoAccelerationEnabled',
        'optimizedWrites' => 'OptimizedWrites',
        'payType' => 'PayType',
        'period' => 'Period',
        'port' => 'Port',
        'privateIpAddress' => 'PrivateIpAddress',
        'promotionCode' => 'PromotionCode',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'roleARN' => 'RoleARN',
        'securityIPList' => 'SecurityIPList',
        'serverlessConfigShrink' => 'ServerlessConfig',
        'storageAutoScale' => 'StorageAutoScale',
        'storageThreshold' => 'StorageThreshold',
        'storageUpperBound' => 'StorageUpperBound',
        'systemDBCharset' => 'SystemDBCharset',
        'tag' => 'Tag',
        'targetDedicatedHostIdForLog' => 'TargetDedicatedHostIdForLog',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave' => 'TargetDedicatedHostIdForSlave',
        'targetMinorVersion' => 'TargetMinorVersion',
        'usedTime' => 'UsedTime',
        'userBackupId' => 'UserBackupId',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'whitelistTemplateList' => 'WhitelistTemplateList',
        'zoneId' => 'ZoneId',
        'zoneIdSlave1' => 'ZoneIdSlave1',
        'zoneIdSlave2' => 'ZoneIdSlave2',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->autoCreateProxy) {
            $res['AutoCreateProxy'] = $this->autoCreateProxy;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->babelfishConfig) {
            $res['BabelfishConfig'] = $this->babelfishConfig;
        }

        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }

        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->createStrategy) {
            $res['CreateStrategy'] = $this->createStrategy;
        }

        if (null !== $this->customExtraInfo) {
            $res['CustomExtraInfo'] = $this->customExtraInfo;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }

        if (null !== $this->DBIsIgnoreCase) {
            $res['DBIsIgnoreCase'] = $this->DBIsIgnoreCase;
        }

        if (null !== $this->DBParamGroupId) {
            $res['DBParamGroupId'] = $this->DBParamGroupId;
        }

        if (null !== $this->DBTimeZone) {
            $res['DBTimeZone'] = $this->DBTimeZone;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->externalReplication) {
            $res['ExternalReplication'] = $this->externalReplication;
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }

        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }

        if (null !== $this->optimizedWrites) {
            $res['OptimizedWrites'] = $this->optimizedWrites;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->serverlessConfigShrink) {
            $res['ServerlessConfig'] = $this->serverlessConfigShrink;
        }

        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }

        if (null !== $this->storageThreshold) {
            $res['StorageThreshold'] = $this->storageThreshold;
        }

        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        if (null !== $this->systemDBCharset) {
            $res['SystemDBCharset'] = $this->systemDBCharset;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetDedicatedHostIdForLog) {
            $res['TargetDedicatedHostIdForLog'] = $this->targetDedicatedHostIdForLog;
        }

        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }

        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }

        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->userBackupId) {
            $res['UserBackupId'] = $this->userBackupId;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->whitelistTemplateList) {
            $res['WhitelistTemplateList'] = $this->whitelistTemplateList;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }

        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AutoCreateProxy'])) {
            $model->autoCreateProxy = $map['AutoCreateProxy'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BabelfishConfig'])) {
            $model->babelfishConfig = $map['BabelfishConfig'];
        }

        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }

        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['CreateStrategy'])) {
            $model->createStrategy = $map['CreateStrategy'];
        }

        if (isset($map['CustomExtraInfo'])) {
            $model->customExtraInfo = $map['CustomExtraInfo'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }

        if (isset($map['DBIsIgnoreCase'])) {
            $model->DBIsIgnoreCase = $map['DBIsIgnoreCase'];
        }

        if (isset($map['DBParamGroupId'])) {
            $model->DBParamGroupId = $map['DBParamGroupId'];
        }

        if (isset($map['DBTimeZone'])) {
            $model->DBTimeZone = $map['DBTimeZone'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExternalReplication'])) {
            $model->externalReplication = $map['ExternalReplication'];
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }

        if (isset($map['OptimizedWrites'])) {
            $model->optimizedWrites = $map['OptimizedWrites'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfigShrink = $map['ServerlessConfig'];
        }

        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }

        if (isset($map['StorageThreshold'])) {
            $model->storageThreshold = $map['StorageThreshold'];
        }

        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        if (isset($map['SystemDBCharset'])) {
            $model->systemDBCharset = $map['SystemDBCharset'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetDedicatedHostIdForLog'])) {
            $model->targetDedicatedHostIdForLog = $map['TargetDedicatedHostIdForLog'];
        }

        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }

        if (isset($map['TargetDedicatedHostIdForSlave'])) {
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }

        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['UserBackupId'])) {
            $model->userBackupId = $map['UserBackupId'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['WhitelistTemplateList'])) {
            $model->whitelistTemplateList = $map['WhitelistTemplateList'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }

        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
