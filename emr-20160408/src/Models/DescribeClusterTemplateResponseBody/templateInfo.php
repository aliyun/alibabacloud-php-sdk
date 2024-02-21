<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\bootstrapActionList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\configList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\hostGroupList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\softwareInfoList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\tags;
use AlibabaCloud\Tea\Model;

class templateInfo extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allowNotebook;

    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var configList
     */
    public $configList;

    /**
     * @example [{"classification": "core-site","properties": {"fs.trash.interval": "61"}},{"classification": "hadoop-log4j","properties": {"hadoop.log.file": "hadoop1.log","hadoop.root.logger": "INFO","a.b.c": "ABC"}}]
     *
     * @var string
     */
    public $configurations;

    /**
     * @example 2
     *
     * @var string
     */
    public $createSource;

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
     * @example EMR-3.16.0
     *
     * @var string
     */
    public $emrVer;

    /**
     * @example 1543765033000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1543765033000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example true
     *
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var hostGroupList
     */
    public $hostGroupList;

    /**
     * @example CT-4A6799A79D73****
     *
     * @var string
     */
    public $id;

    /**
     * @example true
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
     * @example true
     *
     * @var bool
     */
    public $logEnable;

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
     * @example 1
     *
     * @var int
     */
    public $masterNodeTotal;

    /**
     * @example testpd
     *
     * @var string
     */
    public $masterPwd;

    /**
     * @example rds-xxx.com
     *
     * @var string
     */
    public $metaStoreConf;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $metaStoreType;

    /**
     * @example vpc
     *
     * @var string
     */
    public $netType;

    /**
     * @example sg-bp1id7ajv83kmqwq2isx
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
     * @var softwareInfoList
     */
    public $softwareInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $sshEnable;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example template_name_2
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
     * @example 125046002175****
     *
     * @var string
     */
    public $userId;

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
        'allowNotebook'          => 'AllowNotebook',
        'bootstrapActionList'    => 'BootstrapActionList',
        'clusterType'            => 'ClusterType',
        'configList'             => 'ConfigList',
        'configurations'         => 'Configurations',
        'createSource'           => 'CreateSource',
        'dataDiskEncrypted'      => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'       => 'DataDiskKMSKeyId',
        'depositType'            => 'DepositType',
        'easEnable'              => 'EasEnable',
        'emrVer'                 => 'EmrVer',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'hostGroupList'          => 'HostGroupList',
        'id'                     => 'Id',
        'initCustomHiveMetaDb'   => 'InitCustomHiveMetaDb',
        'instanceGeneration'     => 'InstanceGeneration',
        'ioOptimized'            => 'IoOptimized',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'keyPairName'            => 'KeyPairName',
        'logEnable'              => 'LogEnable',
        'logPath'                => 'LogPath',
        'machineType'            => 'MachineType',
        'masterNodeTotal'        => 'MasterNodeTotal',
        'masterPwd'              => 'MasterPwd',
        'metaStoreConf'          => 'MetaStoreConf',
        'metaStoreType'          => 'MetaStoreType',
        'netType'                => 'NetType',
        'securityGroupId'        => 'SecurityGroupId',
        'securityGroupName'      => 'SecurityGroupName',
        'softwareInfoList'       => 'SoftwareInfoList',
        'sshEnable'              => 'SshEnable',
        'tags'                   => 'Tags',
        'templateName'           => 'TemplateName',
        'useCustomHiveMetaDb'    => 'UseCustomHiveMetaDb',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'userId'                 => 'UserId',
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
        if (null !== $this->allowNotebook) {
            $res['AllowNotebook'] = $this->allowNotebook;
        }
        if (null !== $this->bootstrapActionList) {
            $res['BootstrapActionList'] = null !== $this->bootstrapActionList ? $this->bootstrapActionList->toMap() : null;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->hostGroupList) {
            $res['HostGroupList'] = null !== $this->hostGroupList ? $this->hostGroupList->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->masterNodeTotal) {
            $res['MasterNodeTotal'] = $this->masterNodeTotal;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->softwareInfoList) {
            $res['SoftwareInfoList'] = null !== $this->softwareInfoList ? $this->softwareInfoList->toMap() : null;
        }
        if (null !== $this->sshEnable) {
            $res['SshEnable'] = $this->sshEnable;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return templateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowNotebook'])) {
            $model->allowNotebook = $map['AllowNotebook'];
        }
        if (isset($map['BootstrapActionList'])) {
            $model->bootstrapActionList = bootstrapActionList::fromMap($map['BootstrapActionList']);
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['HostGroupList'])) {
            $model->hostGroupList = hostGroupList::fromMap($map['HostGroupList']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MasterNodeTotal'])) {
            $model->masterNodeTotal = $map['MasterNodeTotal'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SoftwareInfoList'])) {
            $model->softwareInfoList = softwareInfoList::fromMap($map['SoftwareInfoList']);
        }
        if (isset($map['SshEnable'])) {
            $model->sshEnable = $map['SshEnable'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
