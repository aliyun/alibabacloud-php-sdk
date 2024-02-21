<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest\bootstrapAction;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest\config;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest\hostGroup;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyClusterTemplateRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example CT-4A6799A79D73****
     *
     * @var string
     */
    public $bizId;

    /**
     * @var bootstrapAction[]
     */
    public $bootstrapAction;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @example [{"classification": "core-site","properties": {"fs.trash.interval": "61"}},{"classification": "hadoop-log4j","properties": {"hadoop.log.file": "hadoop1.log","hadoop.root.logger": "INFO","a.b.c": "ABC"}}]
     *
     * @var string
     */
    public $configurations;

    /**
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @example HALF_MANAGED
     *
     * @var string
     */
    public $depositType;

    /**
     * @example true
     *
     * @var bool
     */
    public $easEnable;

    /**
     * @example EMR-3.15.0
     *
     * @var string
     */
    public $emrVer;

    /**
     * @example true
     *
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var hostGroup[]
     */
    public $hostGroup;

    /**
     * @example false
     *
     * @var bool
     */
    public $initCustomHiveMetaDb;

    /**
     * @example ecs-3
     *
     * @var string
     */
    public $instanceGeneration;

    /**
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOpenPublicIp;

    /**
     * @example test_kp
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example oss//bucketname/path
     *
     * @var string
     */
    public $logPath;

    /**
     * @example ECS
     *
     * @var string
     */
    public $machineType;

    /**
     * @example pwd
     *
     * @var string
     */
    public $masterPwd;

    /**
     * @example rdsxxx.com
     *
     * @var string
     */
    public $metaStoreConf;

    /**
     * @example local
     *
     * @var string
     */
    public $metaStoreType;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example ["ZOOKEEPER","LIVY"]
     *
     * @var string[]
     */
    public $optionSoftWareList;

    /**
     * @example 36
     *
     * @var int
     */
    public $period;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example sg-bp1id7ajv83kmqwq****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example emr_sg
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @example true
     *
     * @var bool
     */
    public $sshEnable;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example new_template_name
     *
     * @var string
     */
    public $templateName;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCustomHiveMetaDb;

    /**
     * @example true
     *
     * @var bool
     */
    public $useLocalMetaDb;

    /**
     * @example AliyunEmrEcsDefaultRole
     *
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @example vsw-bp10tvjyc77psy0z5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp1l4urd87xlh7i4b****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'              => 'AutoRenew',
        'bizId'                  => 'BizId',
        'bootstrapAction'        => 'BootstrapAction',
        'chargeType'             => 'ChargeType',
        'clusterType'            => 'ClusterType',
        'config'                 => 'Config',
        'configurations'         => 'Configurations',
        'dataDiskEncrypted'      => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'       => 'DataDiskKMSKeyId',
        'depositType'            => 'DepositType',
        'easEnable'              => 'EasEnable',
        'emrVer'                 => 'EmrVer',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'hostGroup'              => 'HostGroup',
        'initCustomHiveMetaDb'   => 'InitCustomHiveMetaDb',
        'instanceGeneration'     => 'InstanceGeneration',
        'ioOptimized'            => 'IoOptimized',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'keyPairName'            => 'KeyPairName',
        'logPath'                => 'LogPath',
        'machineType'            => 'MachineType',
        'masterPwd'              => 'MasterPwd',
        'metaStoreConf'          => 'MetaStoreConf',
        'metaStoreType'          => 'MetaStoreType',
        'netType'                => 'NetType',
        'optionSoftWareList'     => 'OptionSoftWareList',
        'period'                 => 'Period',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'securityGroupId'        => 'SecurityGroupId',
        'securityGroupName'      => 'SecurityGroupName',
        'sshEnable'              => 'SshEnable',
        'tag'                    => 'Tag',
        'templateName'           => 'TemplateName',
        'useCustomHiveMetaDb'    => 'UseCustomHiveMetaDb',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
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
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->dataDiskEncrypted) {
            $res['DataDiskEncrypted'] = $this->dataDiskEncrypted;
        }
        if (null !== $this->dataDiskKMSKeyId) {
            $res['DataDiskKMSKeyId'] = $this->dataDiskKMSKeyId;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->emrVer) {
            $res['EmrVer'] = $this->emrVer;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
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
        if (null !== $this->initCustomHiveMetaDb) {
            $res['InitCustomHiveMetaDb'] = $this->initCustomHiveMetaDb;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->isOpenPublicIp) {
            $res['IsOpenPublicIp'] = $this->isOpenPublicIp;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->masterPwd) {
            $res['MasterPwd'] = $this->masterPwd;
        }
        if (null !== $this->metaStoreConf) {
            $res['MetaStoreConf'] = $this->metaStoreConf;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->optionSoftWareList) {
            $res['OptionSoftWareList'] = $this->optionSoftWareList;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->sshEnable) {
            $res['SshEnable'] = $this->sshEnable;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->useCustomHiveMetaDb) {
            $res['UseCustomHiveMetaDb'] = $this->useCustomHiveMetaDb;
        }
        if (null !== $this->useLocalMetaDb) {
            $res['UseLocalMetaDb'] = $this->useLocalMetaDb;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
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
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['DataDiskEncrypted'])) {
            $model->dataDiskEncrypted = $map['DataDiskEncrypted'];
        }
        if (isset($map['DataDiskKMSKeyId'])) {
            $model->dataDiskKMSKeyId = $map['DataDiskKMSKeyId'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['EmrVer'])) {
            $model->emrVer = $map['EmrVer'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
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
        if (isset($map['InitCustomHiveMetaDb'])) {
            $model->initCustomHiveMetaDb = $map['InitCustomHiveMetaDb'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['IsOpenPublicIp'])) {
            $model->isOpenPublicIp = $map['IsOpenPublicIp'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MasterPwd'])) {
            $model->masterPwd = $map['MasterPwd'];
        }
        if (isset($map['MetaStoreConf'])) {
            $model->metaStoreConf = $map['MetaStoreConf'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OptionSoftWareList'])) {
            if (!empty($map['OptionSoftWareList'])) {
                $model->optionSoftWareList = $map['OptionSoftWareList'];
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SshEnable'])) {
            $model->sshEnable = $map['SshEnable'];
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UseCustomHiveMetaDb'])) {
            $model->useCustomHiveMetaDb = $map['UseCustomHiveMetaDb'];
        }
        if (isset($map['UseLocalMetaDb'])) {
            $model->useLocalMetaDb = $map['UseLocalMetaDb'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
