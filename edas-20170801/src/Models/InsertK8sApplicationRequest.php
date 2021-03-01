<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertK8sApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $intranetTargetPort;

    /**
     * @var int
     */
    public $intranetSlbPort;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $applicationDescription;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var int
     */
    public $replicas;

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
    public $requestsCpu;

    /**
     * @var int
     */
    public $requestsMem;

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
    public $appName;

    /**
     * @var string
     */
    public $intranetSlbProtocol;

    /**
     * @var string
     */
    public $intranetSlbId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $internetSlbId;

    /**
     * @var string
     */
    public $internetSlbProtocol;

    /**
     * @var int
     */
    public $internetSlbPort;

    /**
     * @var int
     */
    public $internetTargetPort;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var string
     */
    public $readiness;

    /**
     * @var string
     */
    public $nasId;

    /**
     * @var string
     */
    public $mountDescs;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $localVolume;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $logicalRegionId;

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
    public $JDK;

    /**
     * @var string
     */
    public $webContainer;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $uriEncoding;

    /**
     * @var bool
     */
    public $useBodyEncoding;

    /**
     * @var int
     */
    public $requestsmCpu;

    /**
     * @var int
     */
    public $limitmCpu;

    /**
     * @var string
     */
    public $runtimeClassName;

    /**
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var bool
     */
    public $enableAhas;

    /**
     * @var string
     */
    public $webContainerConfig;

    /**
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var bool
     */
    public $isMultilingualApp;

    /**
     * @var string
     */
    public $deployAcrossNodes;
    protected $_name = [
        'intranetTargetPort'     => 'IntranetTargetPort',
        'intranetSlbPort'        => 'IntranetSlbPort',
        'imageUrl'               => 'ImageUrl',
        'applicationDescription' => 'ApplicationDescription',
        'repoId'                 => 'RepoId',
        'replicas'               => 'Replicas',
        'limitCpu'               => 'LimitCpu',
        'limitMem'               => 'LimitMem',
        'requestsCpu'            => 'RequestsCpu',
        'requestsMem'            => 'RequestsMem',
        'command'                => 'Command',
        'commandArgs'            => 'CommandArgs',
        'appName'                => 'AppName',
        'intranetSlbProtocol'    => 'IntranetSlbProtocol',
        'intranetSlbId'          => 'IntranetSlbId',
        'clusterId'              => 'ClusterId',
        'internetSlbId'          => 'InternetSlbId',
        'internetSlbProtocol'    => 'InternetSlbProtocol',
        'internetSlbPort'        => 'InternetSlbPort',
        'internetTargetPort'     => 'InternetTargetPort',
        'envs'                   => 'Envs',
        'preStop'                => 'PreStop',
        'postStart'              => 'PostStart',
        'liveness'               => 'Liveness',
        'readiness'              => 'Readiness',
        'nasId'                  => 'NasId',
        'mountDescs'             => 'MountDescs',
        'storageType'            => 'StorageType',
        'localVolume'            => 'LocalVolume',
        'namespace'              => 'Namespace',
        'logicalRegionId'        => 'LogicalRegionId',
        'packageType'            => 'PackageType',
        'packageUrl'             => 'PackageUrl',
        'packageVersion'         => 'PackageVersion',
        'JDK'                    => 'JDK',
        'webContainer'           => 'WebContainer',
        'edasContainerVersion'   => 'EdasContainerVersion',
        'uriEncoding'            => 'UriEncoding',
        'useBodyEncoding'        => 'UseBodyEncoding',
        'requestsmCpu'           => 'RequestsmCpu',
        'limitmCpu'              => 'LimitmCpu',
        'runtimeClassName'       => 'RuntimeClassName',
        'deployAcrossZones'      => 'DeployAcrossZones',
        'timeout'                => 'Timeout',
        'enableAhas'             => 'EnableAhas',
        'webContainerConfig'     => 'WebContainerConfig',
        'javaStartUpConfig'      => 'JavaStartUpConfig',
        'slsConfigs'             => 'SlsConfigs',
        'isMultilingualApp'      => 'IsMultilingualApp',
        'deployAcrossNodes'      => 'DeployAcrossNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetTargetPort) {
            $res['IntranetTargetPort'] = $this->intranetTargetPort;
        }
        if (null !== $this->intranetSlbPort) {
            $res['IntranetSlbPort'] = $this->intranetSlbPort;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->applicationDescription) {
            $res['ApplicationDescription'] = $this->applicationDescription;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->limitCpu) {
            $res['LimitCpu'] = $this->limitCpu;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->requestsCpu) {
            $res['RequestsCpu'] = $this->requestsCpu;
        }
        if (null !== $this->requestsMem) {
            $res['RequestsMem'] = $this->requestsMem;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->intranetSlbProtocol) {
            $res['IntranetSlbProtocol'] = $this->intranetSlbProtocol;
        }
        if (null !== $this->intranetSlbId) {
            $res['IntranetSlbId'] = $this->intranetSlbId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->internetSlbId) {
            $res['InternetSlbId'] = $this->internetSlbId;
        }
        if (null !== $this->internetSlbProtocol) {
            $res['InternetSlbProtocol'] = $this->internetSlbProtocol;
        }
        if (null !== $this->internetSlbPort) {
            $res['InternetSlbPort'] = $this->internetSlbPort;
        }
        if (null !== $this->internetTargetPort) {
            $res['InternetTargetPort'] = $this->internetTargetPort;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->mountDescs) {
            $res['MountDescs'] = $this->mountDescs;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
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
        if (null !== $this->JDK) {
            $res['JDK'] = $this->JDK;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->uriEncoding) {
            $res['UriEncoding'] = $this->uriEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }
        if (null !== $this->requestsmCpu) {
            $res['RequestsmCpu'] = $this->requestsmCpu;
        }
        if (null !== $this->limitmCpu) {
            $res['LimitmCpu'] = $this->limitmCpu;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->webContainerConfig) {
            $res['WebContainerConfig'] = $this->webContainerConfig;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }
        if (null !== $this->isMultilingualApp) {
            $res['IsMultilingualApp'] = $this->isMultilingualApp;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
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
        if (isset($map['IntranetTargetPort'])) {
            $model->intranetTargetPort = $map['IntranetTargetPort'];
        }
        if (isset($map['IntranetSlbPort'])) {
            $model->intranetSlbPort = $map['IntranetSlbPort'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ApplicationDescription'])) {
            $model->applicationDescription = $map['ApplicationDescription'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['LimitCpu'])) {
            $model->limitCpu = $map['LimitCpu'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['RequestsCpu'])) {
            $model->requestsCpu = $map['RequestsCpu'];
        }
        if (isset($map['RequestsMem'])) {
            $model->requestsMem = $map['RequestsMem'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['IntranetSlbProtocol'])) {
            $model->intranetSlbProtocol = $map['IntranetSlbProtocol'];
        }
        if (isset($map['IntranetSlbId'])) {
            $model->intranetSlbId = $map['IntranetSlbId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InternetSlbId'])) {
            $model->internetSlbId = $map['InternetSlbId'];
        }
        if (isset($map['InternetSlbProtocol'])) {
            $model->internetSlbProtocol = $map['InternetSlbProtocol'];
        }
        if (isset($map['InternetSlbPort'])) {
            $model->internetSlbPort = $map['InternetSlbPort'];
        }
        if (isset($map['InternetTargetPort'])) {
            $model->internetTargetPort = $map['InternetTargetPort'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['MountDescs'])) {
            $model->mountDescs = $map['MountDescs'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
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
        if (isset($map['JDK'])) {
            $model->JDK = $map['JDK'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['UriEncoding'])) {
            $model->uriEncoding = $map['UriEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }
        if (isset($map['RequestsmCpu'])) {
            $model->requestsmCpu = $map['RequestsmCpu'];
        }
        if (isset($map['LimitmCpu'])) {
            $model->limitmCpu = $map['LimitmCpu'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['WebContainerConfig'])) {
            $model->webContainerConfig = $map['WebContainerConfig'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }
        if (isset($map['IsMultilingualApp'])) {
            $model->isMultilingualApp = $map['IsMultilingualApp'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }

        return $model;
    }
}
