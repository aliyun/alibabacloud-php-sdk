<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployK8sApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $args;

    /**
     * @var int
     */
    public $batchTimeout;

    /**
     * @var int
     */
    public $batchWaitTime;

    /**
     * @var string
     */
    public $changeOrderDesc;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $configMountDescs;

    /**
     * @var int
     */
    public $cpuLimit;

    /**
     * @var int
     */
    public $cpuRequest;

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
    public $image;

    /**
     * @var string
     */
    public $imageTag;

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
    public $liveness;

    /**
     * @var string
     */
    public $localVolume;

    /**
     * @var int
     */
    public $mcpuLimit;

    /**
     * @var int
     */
    public $mcpuRequest;

    /**
     * @var int
     */
    public $memoryLimit;

    /**
     * @var int
     */
    public $memoryRequest;

    /**
     * @var string
     */
    public $mountDescs;

    /**
     * @var string
     */
    public $nasId;

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
    public $packageVersionId;

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
     * @var string
     */
    public $trafficControlStrategy;

    /**
     * @var string
     */
    public $updateStrategy;

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
    public $volumesStr;

    /**
     * @var string
     */
    public $webContainer;

    /**
     * @var string
     */
    public $webContainerConfig;
    protected $_name = [
        'appId'                  => 'AppId',
        'args'                   => 'Args',
        'batchTimeout'           => 'BatchTimeout',
        'batchWaitTime'          => 'BatchWaitTime',
        'changeOrderDesc'        => 'ChangeOrderDesc',
        'command'                => 'Command',
        'configMountDescs'       => 'ConfigMountDescs',
        'cpuLimit'               => 'CpuLimit',
        'cpuRequest'             => 'CpuRequest',
        'customAffinity'         => 'CustomAffinity',
        'customTolerations'      => 'CustomTolerations',
        'deployAcrossNodes'      => 'DeployAcrossNodes',
        'deployAcrossZones'      => 'DeployAcrossZones',
        'edasContainerVersion'   => 'EdasContainerVersion',
        'emptyDirs'              => 'EmptyDirs',
        'enableAhas'             => 'EnableAhas',
        'envFroms'               => 'EnvFroms',
        'envs'                   => 'Envs',
        'image'                  => 'Image',
        'imageTag'               => 'ImageTag',
        'JDK'                    => 'JDK',
        'javaStartUpConfig'      => 'JavaStartUpConfig',
        'liveness'               => 'Liveness',
        'localVolume'            => 'LocalVolume',
        'mcpuLimit'              => 'McpuLimit',
        'mcpuRequest'            => 'McpuRequest',
        'memoryLimit'            => 'MemoryLimit',
        'memoryRequest'          => 'MemoryRequest',
        'mountDescs'             => 'MountDescs',
        'nasId'                  => 'NasId',
        'packageUrl'             => 'PackageUrl',
        'packageVersion'         => 'PackageVersion',
        'packageVersionId'       => 'PackageVersionId',
        'postStart'              => 'PostStart',
        'preStop'                => 'PreStop',
        'pvcMountDescs'          => 'PvcMountDescs',
        'readiness'              => 'Readiness',
        'replicas'               => 'Replicas',
        'runtimeClassName'       => 'RuntimeClassName',
        'slsConfigs'             => 'SlsConfigs',
        'storageType'            => 'StorageType',
        'trafficControlStrategy' => 'TrafficControlStrategy',
        'updateStrategy'         => 'UpdateStrategy',
        'uriEncoding'            => 'UriEncoding',
        'useBodyEncoding'        => 'UseBodyEncoding',
        'volumesStr'             => 'VolumesStr',
        'webContainer'           => 'WebContainer',
        'webContainerConfig'     => 'WebContainerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->batchTimeout) {
            $res['BatchTimeout'] = $this->batchTimeout;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->changeOrderDesc) {
            $res['ChangeOrderDesc'] = $this->changeOrderDesc;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
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
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->JDK) {
            $res['JDK'] = $this->JDK;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->mcpuLimit) {
            $res['McpuLimit'] = $this->mcpuLimit;
        }
        if (null !== $this->mcpuRequest) {
            $res['McpuRequest'] = $this->mcpuRequest;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->mountDescs) {
            $res['MountDescs'] = $this->mountDescs;
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
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
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->trafficControlStrategy) {
            $res['TrafficControlStrategy'] = $this->trafficControlStrategy;
        }
        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->volumesStr) {
            $res['VolumesStr'] = $this->volumesStr;
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
     * @return DeployK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['ChangeOrderDesc'])) {
            $model->changeOrderDesc = $map['ChangeOrderDesc'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
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
        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['JDK'])) {
            $model->JDK = $map['JDK'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['McpuLimit'])) {
            $model->mcpuLimit = $map['McpuLimit'];
        }
        if (isset($map['McpuRequest'])) {
            $model->mcpuRequest = $map['McpuRequest'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }
        if (isset($map['MountDescs'])) {
            $model->mountDescs = $map['MountDescs'];
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
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
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TrafficControlStrategy'])) {
            $model->trafficControlStrategy = $map['TrafficControlStrategy'];
        }
        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['VolumesStr'])) {
            $model->volumesStr = $map['VolumesStr'];
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
