<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\bootstrapAction;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\config;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\hostComponentInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\hostGroup;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\promotionInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\serviceInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\tag;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request\userInfo;
use AlibabaCloud\Tea\Model;

class CreateClusterV2Request extends Model
{
    /**
     * @var string
     */
    public $authorizeContent;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoPayOrder;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

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
     * @var string
     */
    public $clickHouseConf;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

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
     * @example 0
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
     * @example false
     *
     * @var bool
     */
    public $easEnable;

    /**
     * @example EMR-3.35.0
     *
     * @var string
     */
    public $emrVer;

    /**
     * @var string
     */
    public $extraAttributes;

    /**
     * @example true
     *
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var hostComponentInfo[]
     */
    public $hostComponentInfo;

    /**
     * @var hostGroup[]
     */
    public $hostGroup;

    /**
     * @example false
     *
     * @var bool
     */
    public $initCustomHiveMetaDB;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
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
     * @example test_pair
     *
     * @var string
     */
    public $keyPairName;

    /**
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
     * @example {"dbUrl":"jdbc:mysql://rm-xxxxxxxxxx.mysql.rds.aliyuncs.com/hmsdata?createDatabaseIfNotExist=true&amp;characterEncoding=UTF-8","dbUserName":"xxxxxxx","dbPassword":"xxxxxx"}
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
     * @example bi_hadoop
     *
     * @var string
     */
    public $name;

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
     * @example 2
     *
     * @var int
     */
    public $period;

    /**
     * @var promotionInfo[]
     */
    public $promotionInfo;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $relatedClusterId;

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
     * @example emr-sg
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;

    /**
     * @var bool
     */
    public $sshEnable;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCustomHiveMetaDB;

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
     * @var userInfo[]
     */
    public $userInfo;

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
     * @example IP
     *
     * @var string
     */
    public $whiteListType;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'authorizeContent'       => 'AuthorizeContent',
        'autoPayOrder'           => 'AutoPayOrder',
        'autoRenew'              => 'AutoRenew',
        'bootstrapAction'        => 'BootstrapAction',
        'chargeType'             => 'ChargeType',
        'clickHouseConf'         => 'ClickHouseConf',
        'clientToken'            => 'ClientToken',
        'clusterType'            => 'ClusterType',
        'config'                 => 'Config',
        'configurations'         => 'Configurations',
        'dataDiskEncrypted'      => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'       => 'DataDiskKMSKeyId',
        'depositType'            => 'DepositType',
        'easEnable'              => 'EasEnable',
        'emrVer'                 => 'EmrVer',
        'extraAttributes'        => 'ExtraAttributes',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'hostComponentInfo'      => 'HostComponentInfo',
        'hostGroup'              => 'HostGroup',
        'initCustomHiveMetaDB'   => 'InitCustomHiveMetaDB',
        'instanceGeneration'     => 'InstanceGeneration',
        'ioOptimized'            => 'IoOptimized',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'keyPairName'            => 'KeyPairName',
        'logPath'                => 'LogPath',
        'machineType'            => 'MachineType',
        'masterPwd'              => 'MasterPwd',
        'metaStoreConf'          => 'MetaStoreConf',
        'metaStoreType'          => 'MetaStoreType',
        'name'                   => 'Name',
        'netType'                => 'NetType',
        'optionSoftWareList'     => 'OptionSoftWareList',
        'period'                 => 'Period',
        'promotionInfo'          => 'PromotionInfo',
        'regionId'               => 'RegionId',
        'relatedClusterId'       => 'RelatedClusterId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'securityGroupId'        => 'SecurityGroupId',
        'securityGroupName'      => 'SecurityGroupName',
        'serviceInfo'            => 'ServiceInfo',
        'sshEnable'              => 'SshEnable',
        'tag'                    => 'Tag',
        'useCustomHiveMetaDB'    => 'UseCustomHiveMetaDB',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'userInfo'               => 'UserInfo',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'whiteListType'          => 'WhiteListType',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeContent) {
            $res['AuthorizeContent'] = $this->authorizeContent;
        }
        if (null !== $this->autoPayOrder) {
            $res['AutoPayOrder'] = $this->autoPayOrder;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
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
        if (null !== $this->clickHouseConf) {
            $res['ClickHouseConf'] = $this->clickHouseConf;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->extraAttributes) {
            $res['ExtraAttributes'] = $this->extraAttributes;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->hostComponentInfo) {
            $res['HostComponentInfo'] = [];
            if (null !== $this->hostComponentInfo && \is_array($this->hostComponentInfo)) {
                $n = 0;
                foreach ($this->hostComponentInfo as $item) {
                    $res['HostComponentInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->initCustomHiveMetaDB) {
            $res['InitCustomHiveMetaDB'] = $this->initCustomHiveMetaDB;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->promotionInfo) {
            $res['PromotionInfo'] = [];
            if (null !== $this->promotionInfo && \is_array($this->promotionInfo)) {
                $n = 0;
                foreach ($this->promotionInfo as $item) {
                    $res['PromotionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relatedClusterId) {
            $res['RelatedClusterId'] = $this->relatedClusterId;
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
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = [];
            if (null !== $this->serviceInfo && \is_array($this->serviceInfo)) {
                $n = 0;
                foreach ($this->serviceInfo as $item) {
                    $res['ServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->useCustomHiveMetaDB) {
            $res['UseCustomHiveMetaDB'] = $this->useCustomHiveMetaDB;
        }
        if (null !== $this->useLocalMetaDb) {
            $res['UseLocalMetaDb'] = $this->useLocalMetaDb;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = [];
            if (null !== $this->userInfo && \is_array($this->userInfo)) {
                $n = 0;
                foreach ($this->userInfo as $item) {
                    $res['UserInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeContent'])) {
            $model->authorizeContent = $map['AuthorizeContent'];
        }
        if (isset($map['AutoPayOrder'])) {
            $model->autoPayOrder = $map['AutoPayOrder'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
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
        if (isset($map['ClickHouseConf'])) {
            $model->clickHouseConf = $map['ClickHouseConf'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['ExtraAttributes'])) {
            $model->extraAttributes = $map['ExtraAttributes'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['HostComponentInfo'])) {
            if (!empty($map['HostComponentInfo'])) {
                $model->hostComponentInfo = [];
                $n                        = 0;
                foreach ($map['HostComponentInfo'] as $item) {
                    $model->hostComponentInfo[$n++] = null !== $item ? hostComponentInfo::fromMap($item) : $item;
                }
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
        if (isset($map['InitCustomHiveMetaDB'])) {
            $model->initCustomHiveMetaDB = $map['InitCustomHiveMetaDB'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['PromotionInfo'])) {
            if (!empty($map['PromotionInfo'])) {
                $model->promotionInfo = [];
                $n                    = 0;
                foreach ($map['PromotionInfo'] as $item) {
                    $model->promotionInfo[$n++] = null !== $item ? promotionInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelatedClusterId'])) {
            $model->relatedClusterId = $map['RelatedClusterId'];
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
        if (isset($map['ServiceInfo'])) {
            if (!empty($map['ServiceInfo'])) {
                $model->serviceInfo = [];
                $n                  = 0;
                foreach ($map['ServiceInfo'] as $item) {
                    $model->serviceInfo[$n++] = null !== $item ? serviceInfo::fromMap($item) : $item;
                }
            }
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
        if (isset($map['UseCustomHiveMetaDB'])) {
            $model->useCustomHiveMetaDB = $map['UseCustomHiveMetaDB'];
        }
        if (isset($map['UseLocalMetaDb'])) {
            $model->useLocalMetaDb = $map['UseLocalMetaDb'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['UserInfo'])) {
            if (!empty($map['UserInfo'])) {
                $model->userInfo = [];
                $n               = 0;
                foreach ($map['UserInfo'] as $item) {
                    $model->userInfo[$n++] = null !== $item ? userInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
