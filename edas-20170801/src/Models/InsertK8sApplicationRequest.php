<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertK8sApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $appConfig;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appTemplateName;

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
    public $containerRegistryId;

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
    public $customAgentVersion;

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
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
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
    public $featureConfig;

    /**
     * @var string
     */
    public $imagePlatforms;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $initContainers;

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
    public $limitEphemeralStorage;

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
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @var bool
     */
    public $losslessRuleRelated;

    /**
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
    public $requestsEphemeralStorage;

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
    public $secretName;

    /**
     * @var string
     */
    public $serviceConfigs;

    /**
     * @var string
     */
    public $sidecars;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var string
     */
    public $startup;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $terminateGracePeriod;

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
    public $userBaseImageUrl;

    /**
     * @var string
     */
    public $webContainer;

    /**
     * @var string
     */
    public $webContainerConfig;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'annotations' => 'Annotations',
        'appConfig' => 'AppConfig',
        'appName' => 'AppName',
        'appTemplateName' => 'AppTemplateName',
        'applicationDescription' => 'ApplicationDescription',
        'buildPackId' => 'BuildPackId',
        'clusterId' => 'ClusterId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMountDescs' => 'ConfigMountDescs',
        'containerRegistryId' => 'ContainerRegistryId',
        'csClusterId' => 'CsClusterId',
        'customAffinity' => 'CustomAffinity',
        'customAgentVersion' => 'CustomAgentVersion',
        'customTolerations' => 'CustomTolerations',
        'deployAcrossNodes' => 'DeployAcrossNodes',
        'deployAcrossZones' => 'DeployAcrossZones',
        'edasContainerVersion' => 'EdasContainerVersion',
        'emptyDirs' => 'EmptyDirs',
        'enableAhas' => 'EnableAhas',
        'enableAsm' => 'EnableAsm',
        'enableEmptyPushReject' => 'EnableEmptyPushReject',
        'enableLosslessRule' => 'EnableLosslessRule',
        'envFroms' => 'EnvFroms',
        'envs' => 'Envs',
        'featureConfig' => 'FeatureConfig',
        'imagePlatforms' => 'ImagePlatforms',
        'imageUrl' => 'ImageUrl',
        'initContainers' => 'InitContainers',
        'internetSlbId' => 'InternetSlbId',
        'internetSlbPort' => 'InternetSlbPort',
        'internetSlbProtocol' => 'InternetSlbProtocol',
        'internetTargetPort' => 'InternetTargetPort',
        'intranetSlbId' => 'IntranetSlbId',
        'intranetSlbPort' => 'IntranetSlbPort',
        'intranetSlbProtocol' => 'IntranetSlbProtocol',
        'intranetTargetPort' => 'IntranetTargetPort',
        'isMultilingualApp' => 'IsMultilingualApp',
        'JDK' => 'JDK',
        'javaStartUpConfig' => 'JavaStartUpConfig',
        'labels' => 'Labels',
        'limitCpu' => 'LimitCpu',
        'limitEphemeralStorage' => 'LimitEphemeralStorage',
        'limitMem' => 'LimitMem',
        'limitmCpu' => 'LimitmCpu',
        'liveness' => 'Liveness',
        'localVolume' => 'LocalVolume',
        'logicalRegionId' => 'LogicalRegionId',
        'losslessRuleAligned' => 'LosslessRuleAligned',
        'losslessRuleDelayTime' => 'LosslessRuleDelayTime',
        'losslessRuleFuncType' => 'LosslessRuleFuncType',
        'losslessRuleRelated' => 'LosslessRuleRelated',
        'losslessRuleWarmupTime' => 'LosslessRuleWarmupTime',
        'mountDescs' => 'MountDescs',
        'namespace' => 'Namespace',
        'nasId' => 'NasId',
        'packageType' => 'PackageType',
        'packageUrl' => 'PackageUrl',
        'packageVersion' => 'PackageVersion',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'pvcMountDescs' => 'PvcMountDescs',
        'readiness' => 'Readiness',
        'replicas' => 'Replicas',
        'repoId' => 'RepoId',
        'requestsCpu' => 'RequestsCpu',
        'requestsEphemeralStorage' => 'RequestsEphemeralStorage',
        'requestsMem' => 'RequestsMem',
        'requestsmCpu' => 'RequestsmCpu',
        'resourceGroupId' => 'ResourceGroupId',
        'runtimeClassName' => 'RuntimeClassName',
        'secretName' => 'SecretName',
        'serviceConfigs' => 'ServiceConfigs',
        'sidecars' => 'Sidecars',
        'slsConfigs' => 'SlsConfigs',
        'startup' => 'Startup',
        'storageType' => 'StorageType',
        'terminateGracePeriod' => 'TerminateGracePeriod',
        'timeout' => 'Timeout',
        'uriEncoding' => 'UriEncoding',
        'useBodyEncoding' => 'UseBodyEncoding',
        'userBaseImageUrl' => 'UserBaseImageUrl',
        'webContainer' => 'WebContainer',
        'webContainerConfig' => 'WebContainerConfig',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
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

        if (null !== $this->containerRegistryId) {
            $res['ContainerRegistryId'] = $this->containerRegistryId;
        }

        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }

        if (null !== $this->customAffinity) {
            $res['CustomAffinity'] = $this->customAffinity;
        }

        if (null !== $this->customAgentVersion) {
            $res['CustomAgentVersion'] = $this->customAgentVersion;
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

        if (null !== $this->featureConfig) {
            $res['FeatureConfig'] = $this->featureConfig;
        }

        if (null !== $this->imagePlatforms) {
            $res['ImagePlatforms'] = $this->imagePlatforms;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->initContainers) {
            $res['InitContainers'] = $this->initContainers;
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

        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
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

        if (null !== $this->requestsEphemeralStorage) {
            $res['RequestsEphemeralStorage'] = $this->requestsEphemeralStorage;
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

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->serviceConfigs) {
            $res['ServiceConfigs'] = $this->serviceConfigs;
        }

        if (null !== $this->sidecars) {
            $res['Sidecars'] = $this->sidecars;
        }

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }

        if (null !== $this->startup) {
            $res['Startup'] = $this->startup;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->terminateGracePeriod) {
            $res['TerminateGracePeriod'] = $this->terminateGracePeriod;
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

        if (null !== $this->userBaseImageUrl) {
            $res['UserBaseImageUrl'] = $this->userBaseImageUrl;
        }

        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }

        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = $this->webContainerConfig;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
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

        if (isset($map['ContainerRegistryId'])) {
            $model->containerRegistryId = $map['ContainerRegistryId'];
        }

        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }

        if (isset($map['CustomAffinity'])) {
            $model->customAffinity = $map['CustomAffinity'];
        }

        if (isset($map['CustomAgentVersion'])) {
            $model->customAgentVersion = $map['CustomAgentVersion'];
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

        if (isset($map['FeatureConfig'])) {
            $model->featureConfig = $map['FeatureConfig'];
        }

        if (isset($map['ImagePlatforms'])) {
            $model->imagePlatforms = $map['ImagePlatforms'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['InitContainers'])) {
            $model->initContainers = $map['InitContainers'];
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

        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
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

        if (isset($map['RequestsEphemeralStorage'])) {
            $model->requestsEphemeralStorage = $map['RequestsEphemeralStorage'];
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

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['ServiceConfigs'])) {
            $model->serviceConfigs = $map['ServiceConfigs'];
        }

        if (isset($map['Sidecars'])) {
            $model->sidecars = $map['Sidecars'];
        }

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }

        if (isset($map['Startup'])) {
            $model->startup = $map['Startup'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TerminateGracePeriod'])) {
            $model->terminateGracePeriod = $map['TerminateGracePeriod'];
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

        if (isset($map['UserBaseImageUrl'])) {
            $model->userBaseImageUrl = $map['UserBaseImageUrl'];
        }

        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = $map['WebContainerConfig'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
