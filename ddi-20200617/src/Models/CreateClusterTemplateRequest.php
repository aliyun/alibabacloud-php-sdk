<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateRequest\bootstrapAction;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateRequest\config;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateRequest\hostGroup;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $isOpenPublicIp;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var bool
     */
    public $renewAuto;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @var string
     */
    public $emrVer;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $enableHighAvailability;

    /**
     * @var bool
     */
    public $useLocalMetaDb;

    /**
     * @var bool
     */
    public $ioOptimizedOption;

    /**
     * @var bool
     */
    public $enableSsh;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var string
     */
    public $masterPwd;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $metaStoreType;

    /**
     * @var string
     */
    public $metaStoreConf;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var bool
     */
    public $enableEas;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var bool
     */
    public $useCustomHiveMetaDb;

    /**
     * @var bool
     */
    public $initCustomHiveMetaDb;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $optionSoftWareList;

    /**
     * @var hostGroup[]
     */
    public $hostGroup;

    /**
     * @var bootstrapAction[]
     */
    public $bootstrapAction;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceOwnerId'        => 'ResourceOwnerId',
        'templateName'           => 'TemplateName',
        'regionId'               => 'RegionId',
        'zoneId'                 => 'ZoneId',
        'logPath'                => 'LogPath',
        'securityGroupId'        => 'SecurityGroupId',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'securityGroupName'      => 'SecurityGroupName',
        'period'                 => 'Period',
        'renewAuto'              => 'RenewAuto',
        'vpcId'                  => 'VpcId',
        'vSwitchId'              => 'VSwitchId',
        'netType'                => 'NetType',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'emrVer'                 => 'EmrVer',
        'clusterType'            => 'ClusterType',
        'enableHighAvailability' => 'EnableHighAvailability',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'ioOptimizedOption'      => 'IoOptimizedOption',
        'enableSsh'              => 'EnableSsh',
        'instanceGeneration'     => 'InstanceGeneration',
        'masterPwd'              => 'MasterPwd',
        'keyPairName'            => 'KeyPairName',
        'metaStoreType'          => 'MetaStoreType',
        'metaStoreConf'          => 'MetaStoreConf',
        'configurations'         => 'Configurations',
        'enableEas'              => 'EnableEas',
        'depositType'            => 'DepositType',
        'machineType'            => 'MachineType',
        'useCustomHiveMetaDb'    => 'UseCustomHiveMetaDb',
        'initCustomHiveMetaDb'   => 'InitCustomHiveMetaDb',
        'resourceGroupId'        => 'ResourceGroupId',
        'clientToken'            => 'ClientToken',
        'optionSoftWareList'     => 'OptionSoftWareList',
        'hostGroup'              => 'HostGroup',
        'bootstrapAction'        => 'BootstrapAction',
        'config'                 => 'Config',
        'tag'                    => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->isOpenPublicIp) {
            $res['IsOpenPublicIp'] = $this->isOpenPublicIp;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->renewAuto) {
            $res['RenewAuto'] = $this->renewAuto;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->emrVer) {
            $res['EmrVer'] = $this->emrVer;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->enableHighAvailability) {
            $res['EnableHighAvailability'] = $this->enableHighAvailability;
        }
        if (null !== $this->useLocalMetaDb) {
            $res['UseLocalMetaDb'] = $this->useLocalMetaDb;
        }
        if (null !== $this->ioOptimizedOption) {
            $res['IoOptimizedOption'] = $this->ioOptimizedOption;
        }
        if (null !== $this->enableSsh) {
            $res['EnableSsh'] = $this->enableSsh;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->masterPwd) {
            $res['MasterPwd'] = $this->masterPwd;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->metaStoreConf) {
            $res['MetaStoreConf'] = $this->metaStoreConf;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->enableEas) {
            $res['EnableEas'] = $this->enableEas;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->useCustomHiveMetaDb) {
            $res['UseCustomHiveMetaDb'] = $this->useCustomHiveMetaDb;
        }
        if (null !== $this->initCustomHiveMetaDb) {
            $res['InitCustomHiveMetaDb'] = $this->initCustomHiveMetaDb;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->optionSoftWareList) {
            $res['OptionSoftWareList'] = $this->optionSoftWareList;
        }
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = [];
            if (null !== $this->hostGroup && \is_array($this->hostGroup)) {
                $n = 0;
                foreach ($this->hostGroup as $item) {
                    $res['HostGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bootstrapAction) {
            $res['BootstrapAction'] = [];
            if (null !== $this->bootstrapAction && \is_array($this->bootstrapAction)) {
                $n = 0;
                foreach ($this->bootstrapAction as $item) {
                    $res['BootstrapAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['IsOpenPublicIp'])) {
            $model->isOpenPublicIp = $map['IsOpenPublicIp'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RenewAuto'])) {
            $model->renewAuto = $map['RenewAuto'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['EmrVer'])) {
            $model->emrVer = $map['EmrVer'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['EnableHighAvailability'])) {
            $model->enableHighAvailability = $map['EnableHighAvailability'];
        }
        if (isset($map['UseLocalMetaDb'])) {
            $model->useLocalMetaDb = $map['UseLocalMetaDb'];
        }
        if (isset($map['IoOptimizedOption'])) {
            $model->ioOptimizedOption = $map['IoOptimizedOption'];
        }
        if (isset($map['EnableSsh'])) {
            $model->enableSsh = $map['EnableSsh'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['MasterPwd'])) {
            $model->masterPwd = $map['MasterPwd'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['MetaStoreConf'])) {
            $model->metaStoreConf = $map['MetaStoreConf'];
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['EnableEas'])) {
            $model->enableEas = $map['EnableEas'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['UseCustomHiveMetaDb'])) {
            $model->useCustomHiveMetaDb = $map['UseCustomHiveMetaDb'];
        }
        if (isset($map['InitCustomHiveMetaDb'])) {
            $model->initCustomHiveMetaDb = $map['InitCustomHiveMetaDb'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OptionSoftWareList'])) {
            if (!empty($map['OptionSoftWareList'])) {
                $model->optionSoftWareList = $map['OptionSoftWareList'];
            }
        }
        if (isset($map['HostGroup'])) {
            if (!empty($map['HostGroup'])) {
                $model->hostGroup = [];
                $n                = 0;
                foreach ($map['HostGroup'] as $item) {
                    $model->hostGroup[$n++] = null !== $item ? hostGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BootstrapAction'])) {
            if (!empty($map['BootstrapAction'])) {
                $model->bootstrapAction = [];
                $n                      = 0;
                foreach ($map['BootstrapAction'] as $item) {
                    $model->bootstrapAction[$n++] = null !== $item ? bootstrapAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
