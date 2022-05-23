<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertK8sApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $applicationDescription;

    /**
     * @var string
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $commandArgs;

    /**
     * @var string
     */
    public $configMountDescs;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $customAffinity;

    /**
     * @var string
     */
    public $customTolerations;

    /**
     * @var string
     */
    public $deployAcrossNodes;

    /**
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $emptyDirs;

    /**
     * @var bool
     */
    public $enableAhas;

    /**
     * @var bool
     */
    public $enableAsm;

    /**
     * @description 是否开启推空保护
     *
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
     * @description 是否启用无损上线规则
     *
     * @var bool
     */
    public $enableLosslessRule;

    /**
     * @var string
     */
    public $envFroms;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $internetSlbId;

    /**
     * @var int
     */
    public $internetSlbPort;

    /**
     * @var string
     */
    public $internetSlbProtocol;

    /**
     * @var int
     */
    public $internetTargetPort;

    /**
     * @var string
     */
    public $intranetSlbId;

    /**
     * @var int
     */
    public $intranetSlbPort;

    /**
     * @var string
     */
    public $intranetSlbProtocol;

    /**
     * @var int
     */
    public $intranetTargetPort;

    /**
     * @var bool
     */
    public $isMultilingualApp;

    /**
     * @var string
     */
    public $JDK;

    /**
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var int
     */
    public $limitCpu;

    /**
     * @var int
     */
    public $limitMem;

    /**
     * @var int
     */
    public $limitmCpu;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var string
     */
    public $localVolume;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description 是否启用无损滚动发布模式配置通过就绪检查前完成服务注册
     *
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @description 无损上线延迟注册时长
     *
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @description 无损上线服务预热曲线
     *
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @description 是否启用无损滚动发布模式配置通过就绪检查前完成服务预热
     *
     * @var bool
     */
    public $losslessRuleRelated;

    /**
     * @description 无损上线服务预热时长
     *
     * @var int
     */
    public $losslessRuleWarmupTime;

    /**
     * @var string
     */
    public $mountDescs;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nasId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $pvcMountDescs;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var int
     */
    public $requestsCpu;

    /**
     * @var int
     */
    public $requestsMem;

    /**
     * @var int
     */
    public $requestsmCpu;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $runtimeClassName;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $uriEncoding;

    /**
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @var string
     */
    public $webContainer;

    /**
     * @var string
     */
    public $webContainerConfig;
    protected $_name = [
        'annotations'            => 'Annotations',
        'appName'                => 'AppName',
        'applicationDescription' => 'ApplicationDescription',
        'buildPackId'            => 'BuildPackId',
        'clusterId'              => 'ClusterId',
        'command'                => 'Command',
        'commandArgs'            => 'CommandArgs',
        'configMountDescs'       => 'ConfigMountDescs',
        'csClusterId'            => 'CsClusterId',
        'customAffinity'         => 'CustomAffinity',
        'customTolerations'      => 'CustomTolerations',
        'deployAcrossNodes'      => 'DeployAcrossNodes',
        'deployAcrossZones'      => 'DeployAcrossZones',
        'edasContainerVersion'   => 'EdasContainerVersion',
        'emptyDirs'              => 'EmptyDirs',
        'enableAhas'             => 'EnableAhas',
        'enableAsm'              => 'EnableAsm',
        'enableEmptyPushReject'  => 'EnableEmptyPushReject',
        'enableLosslessRule'     => 'EnableLosslessRule',
        'envFroms'               => 'EnvFroms',
        'envs'                   => 'Envs',
        'imageUrl'               => 'ImageUrl',
        'internetSlbId'          => 'InternetSlbId',
        'internetSlbPort'        => 'InternetSlbPort',
        'internetSlbProtocol'    => 'InternetSlbProtocol',
        'internetTargetPort'     => 'InternetTargetPort',
        'intranetSlbId'          => 'IntranetSlbId',
        'intranetSlbPort'        => 'IntranetSlbPort',
        'intranetSlbProtocol'    => 'IntranetSlbProtocol',
        'intranetTargetPort'     => 'IntranetTargetPort',
        'isMultilingualApp'      => 'IsMultilingualApp',
        'JDK'                    => 'JDK',
        'javaStartUpConfig'      => 'JavaStartUpConfig',
        'labels'                 => 'Labels',
        'limitCpu'               => 'LimitCpu',
        'limitMem'               => 'LimitMem',
        'limitmCpu'              => 'LimitmCpu',
        'liveness'               => 'Liveness',
        'localVolume'            => 'LocalVolume',
        'logicalRegionId'        => 'LogicalRegionId',
        'losslessRuleAligned'    => 'LosslessRuleAligned',
        'losslessRuleDelayTime'  => 'LosslessRuleDelayTime',
        'losslessRuleFuncType'   => 'LosslessRuleFuncType',
        'losslessRuleRelated'    => 'LosslessRuleRelated',
        'losslessRuleWarmupTime' => 'LosslessRuleWarmupTime',
        'mountDescs'             => 'MountDescs',
        'namespace'              => 'Namespace',
        'nasId'                  => 'NasId',
        'packageType'            => 'PackageType',
        'packageUrl'             => 'PackageUrl',
        'packageVersion'         => 'PackageVersion',
        'postStart'              => 'PostStart',
        'preStop'                => 'PreStop',
        'pvcMountDescs'          => 'PvcMountDescs',
        'readiness'              => 'Readiness',
        'replicas'               => 'Replicas',
        'repoId'                 => 'RepoId',
        'requestsCpu'            => 'RequestsCpu',
        'requestsMem'            => 'RequestsMem',
        'requestsmCpu'           => 'RequestsmCpu',
        'resourceGroupId'        => 'ResourceGroupId',
        'runtimeClassName'       => 'RuntimeClassName',
        'slsConfigs'             => 'SlsConfigs',
        'storageType'            => 'StorageType',
        'timeout'                => 'Timeout',
        'uriEncoding'            => 'UriEncoding',
        'useBodyEncoding'        => 'UseBodyEncoding',
        'webContainer'           => 'WebContainer',
        'webContainerConfig'     => 'WebContainerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->applicationDescription) {
            $res['ApplicationDescription'] = $this->applicationDescription;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->customAffinity) {
            $res['CustomAffinity'] = $this->customAffinity;
        }
        if (null !== $this->customTolerations) {
            $res['CustomTolerations'] = $this->customTolerations;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = $this->emptyDirs;
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->enableAsm) {
            $res['EnableAsm'] = $this->enableAsm;
        }
        if (null !== $this->enableEmptyPushReject) {
            $res['EnableEmptyPushReject'] = $this->enableEmptyPushReject;
        }
        if (null !== $this->enableLosslessRule) {
            $res['EnableLosslessRule'] = $this->enableLosslessRule;
        }
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }
        if (null !== $this->internetSlbPort) {
            $res['InternetSlbPort'] = $this->internetSlbPort;
        }
        if (null !== $this->internetSlbProtocol) {
            $res['InternetSlbProtocol'] = $this->internetSlbProtocol;
        }
        if (null !== $this->internetTargetPort) {
            $res['InternetTargetPort'] = $this->internetTargetPort;
        }
        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
        }
        if (null !== $this->intranetSlbPort) {
            $res['IntranetSlbPort'] = $this->intranetSlbPort;
        }
        if (null !== $this->intranetSlbProtocol) {
            $res['IntranetSlbProtocol'] = $this->intranetSlbProtocol;
        }
        if (null !== $this->intranetTargetPort) {
            $res['IntranetTargetPort'] = $this->intranetTargetPort;
        }
        if (null !== $this->isMultilingualApp) {
            $res['IsMultilingualApp'] = $this->isMultilingualApp;
        }
        if (null !== $this->JDK) {
            $res['JDK'] = $this->JDK;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->limitCpu) {
            $res['LimitCpu'] = $this->limitCpu;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->limitmCpu) {
            $res['LimitmCpu'] = $this->limitmCpu;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->losslessRuleAligned) {
            $res['LosslessRuleAligned'] = $this->losslessRuleAligned;
        }
        if (null !== $this->losslessRuleDelayTime) {
            $res['LosslessRuleDelayTime'] = $this->losslessRuleDelayTime;
        }
        if (null !== $this->losslessRuleFuncType) {
            $res['LosslessRuleFuncType'] = $this->losslessRuleFuncType;
        }
        if (null !== $this->losslessRuleRelated) {
            $res['LosslessRuleRelated'] = $this->losslessRuleRelated;
        }
        if (null !== $this->losslessRuleWarmupTime) {
            $res['LosslessRuleWarmupTime'] = $this->losslessRuleWarmupTime;
        }
        if (null !== $this->mountDescs) {
            $res['MountDescs'] = $this->mountDescs;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = $this->pvcMountDescs;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->requestsCpu) {
            $res['RequestsCpu'] = $this->requestsCpu;
        }
        if (null !== $this->requestsMem) {
            $res['RequestsMem'] = $this->requestsMem;
        }
        if (null !== $this->requestsmCpu) {
            $res['RequestsmCpu'] = $this->requestsmCpu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = $this->webContainerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ApplicationDescription'])) {
            $model->applicationDescription = $map['ApplicationDescription'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }
        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['CustomAffinity'])) {
            $model->customAffinity = $map['CustomAffinity'];
        }
        if (isset($map['CustomTolerations'])) {
            $model->customTolerations = $map['CustomTolerations'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EmptyDirs'])) {
            $model->emptyDirs = $map['EmptyDirs'];
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnableAsm'])) {
            $model->enableAsm = $map['EnableAsm'];
        }
        if (isset($map['EnableEmptyPushReject'])) {
            $model->enableEmptyPushReject = $map['EnableEmptyPushReject'];
        }
        if (isset($map['EnableLosslessRule'])) {
            $model->enableLosslessRule = $map['EnableLosslessRule'];
        }
        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }
        if (isset($map['InternetSlbPort'])) {
            $model->internetSlbPort = $map['InternetSlbPort'];
        }
        if (isset($map['InternetSlbProtocol'])) {
            $model->internetSlbProtocol = $map['InternetSlbProtocol'];
        }
        if (isset($map['InternetTargetPort'])) {
            $model->internetTargetPort = $map['InternetTargetPort'];
        }
        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }
        if (isset($map['IntranetSlbPort'])) {
            $model->intranetSlbPort = $map['IntranetSlbPort'];
        }
        if (isset($map['IntranetSlbProtocol'])) {
            $model->intranetSlbProtocol = $map['IntranetSlbProtocol'];
        }
        if (isset($map['IntranetTargetPort'])) {
            $model->intranetTargetPort = $map['IntranetTargetPort'];
        }
        if (isset($map['IsMultilingualApp'])) {
            $model->isMultilingualApp = $map['IsMultilingualApp'];
        }
        if (isset($map['JDK'])) {
            $model->JDK = $map['JDK'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LimitCpu'])) {
            $model->limitCpu = $map['LimitCpu'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['LimitmCpu'])) {
            $model->limitmCpu = $map['LimitmCpu'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['LosslessRuleAligned'])) {
            $model->losslessRuleAligned = $map['LosslessRuleAligned'];
        }
        if (isset($map['LosslessRuleDelayTime'])) {
            $model->losslessRuleDelayTime = $map['LosslessRuleDelayTime'];
        }
        if (isset($map['LosslessRuleFuncType'])) {
            $model->losslessRuleFuncType = $map['LosslessRuleFuncType'];
        }
        if (isset($map['LosslessRuleRelated'])) {
            $model->losslessRuleRelated = $map['LosslessRuleRelated'];
        }
        if (isset($map['LosslessRuleWarmupTime'])) {
            $model->losslessRuleWarmupTime = $map['LosslessRuleWarmupTime'];
        }
        if (isset($map['MountDescs'])) {
            $model->mountDescs = $map['MountDescs'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PvcMountDescs'])) {
            $model->pvcMountDescs = $map['PvcMountDescs'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RequestsCpu'])) {
            $model->requestsCpu = $map['RequestsCpu'];
        }
        if (isset($map['RequestsMem'])) {
            $model->requestsMem = $map['RequestsMem'];
        }
        if (isset($map['RequestsmCpu'])) {
            $model->requestsmCpu = $map['RequestsmCpu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = $map['WebContainerConfig'];
        }

        return $model;
    }
}
