<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\bootstrapActionList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\configList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\hostGroupList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo\softwareInfoList;
use AlibabaCloud\Tea\Model;

class templateInfo extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var bool
     */
    public $logEnable;

    /**
     * @var bool
     */
    public $sshEnable;

    /**
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var bool
     */
    public $isOpenPublicIp;

    /**
     * @var bool
     */
    public $allowNotebook;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $createSource;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var bool
     */
    public $useCustomHiveMetaDb;

    /**
     * @var bool
     */
    public $easEnable;

    /**
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @var string
     */
    public $metaStoreType;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var bool
     */
    public $useLocalMetaDb;

    /**
     * @var int
     */
    public $masterNodeTotal;

    /**
     * @var bool
     */
    public $initCustomHiveMetaDb;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $metaStoreConf;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @var hostGroupList
     */
    public $hostGroupList;

    /**
     * @var configList
     */
    public $configList;

    /**
     * @var softwareInfoList
     */
    public $softwareInfoList;
    protected $_name = [
        'vpcId'                  => 'VpcId',
        'keyPairName'            => 'KeyPairName',
        'logEnable'              => 'LogEnable',
        'sshEnable'              => 'SshEnable',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'securityGroupId'        => 'SecurityGroupId',
        'userId'                 => 'UserId',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'allowNotebook'          => 'AllowNotebook',
        'gmtModified'            => 'GmtModified',
        'templateName'           => 'TemplateName',
        'depositType'            => 'DepositType',
        'securityGroupName'      => 'SecurityGroupName',
        'createSource'           => 'CreateSource',
        'instanceGeneration'     => 'InstanceGeneration',
        'useCustomHiveMetaDb'    => 'UseCustomHiveMetaDb',
        'easEnable'              => 'EasEnable',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'metaStoreType'          => 'MetaStoreType',
        'machineType'            => 'MachineType',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'masterNodeTotal'        => 'MasterNodeTotal',
        'initCustomHiveMetaDb'   => 'InitCustomHiveMetaDb',
        'ioOptimized'            => 'IoOptimized',
        'metaStoreConf'          => 'MetaStoreConf',
        'vSwitchId'              => 'VSwitchId',
        'configurations'         => 'Configurations',
        'logPath'                => 'LogPath',
        'clusterType'            => 'ClusterType',
        'netType'                => 'NetType',
        'zoneId'                 => 'ZoneId',
        'gmtCreate'              => 'GmtCreate',
        'id'                     => 'Id',
        'bootstrapActionList'    => 'BootstrapActionList',
        'hostGroupList'          => 'HostGroupList',
        'configList'             => 'ConfigList',
        'softwareInfoList'       => 'SoftwareInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->sshEnable) {
            $res['SshEnable'] = $this->sshEnable;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->isOpenPublicIp) {
            $res['IsOpenPublicIp'] = $this->isOpenPublicIp;
        }
        if (null !== $this->allowNotebook) {
            $res['AllowNotebook'] = $this->allowNotebook;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->useCustomHiveMetaDb) {
            $res['UseCustomHiveMetaDb'] = $this->useCustomHiveMetaDb;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->useLocalMetaDb) {
            $res['UseLocalMetaDb'] = $this->useLocalMetaDb;
        }
        if (null !== $this->masterNodeTotal) {
            $res['MasterNodeTotal'] = $this->masterNodeTotal;
        }
        if (null !== $this->initCustomHiveMetaDb) {
            $res['InitCustomHiveMetaDb'] = $this->initCustomHiveMetaDb;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->metaStoreConf) {
            $res['MetaStoreConf'] = $this->metaStoreConf;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->bootstrapActionList) {
            $res['BootstrapActionList'] = null !== $this->bootstrapActionList ? $this->bootstrapActionList->toMap() : null;
        }
        if (null !== $this->hostGroupList) {
            $res['HostGroupList'] = null !== $this->hostGroupList ? $this->hostGroupList->toMap() : null;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }
        if (null !== $this->softwareInfoList) {
            $res['SoftwareInfoList'] = null !== $this->softwareInfoList ? $this->softwareInfoList->toMap() : null;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['SshEnable'])) {
            $model->sshEnable = $map['SshEnable'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['IsOpenPublicIp'])) {
            $model->isOpenPublicIp = $map['IsOpenPublicIp'];
        }
        if (isset($map['AllowNotebook'])) {
            $model->allowNotebook = $map['AllowNotebook'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['UseCustomHiveMetaDb'])) {
            $model->useCustomHiveMetaDb = $map['UseCustomHiveMetaDb'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['UseLocalMetaDb'])) {
            $model->useLocalMetaDb = $map['UseLocalMetaDb'];
        }
        if (isset($map['MasterNodeTotal'])) {
            $model->masterNodeTotal = $map['MasterNodeTotal'];
        }
        if (isset($map['InitCustomHiveMetaDb'])) {
            $model->initCustomHiveMetaDb = $map['InitCustomHiveMetaDb'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['MetaStoreConf'])) {
            $model->metaStoreConf = $map['MetaStoreConf'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['BootstrapActionList'])) {
            $model->bootstrapActionList = bootstrapActionList::fromMap($map['BootstrapActionList']);
        }
        if (isset($map['HostGroupList'])) {
            $model->hostGroupList = hostGroupList::fromMap($map['HostGroupList']);
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }
        if (isset($map['SoftwareInfoList'])) {
            $model->softwareInfoList = softwareInfoList::fromMap($map['SoftwareInfoList']);
        }

        return $model;
    }
}
