<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $appDescription;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSource;

    /**
     * @var bool
     */
    public $associateEip;

    /**
     * @var bool
     */
    public $autoConfig;

    /**
     * @var string
     */
    public $baseAppId;

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
    public $configMapMountDesc;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $customHostAlias;

    /**
     * @var string
     */
    public $customImageNetworkType;

    /**
     * @var bool
     */
    public $deploy;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $dotnet;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $emptyDirDesc;

    /**
     * @var bool
     */
    public $enableCpuBurst;

    /**
     * @var string
     */
    public $enableEbpf;

    /**
     * @var bool
     */
    public $enableNewArms;

    /**
     * @var bool
     */
    public $enablePrometheus;

    /**
     * @var bool
     */
    public $enableSidecarResourceIsolated;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $gpuConfig;

    /**
     * @var string
     */
    public $headlessPvtzDiscoverySvc;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var InitContainerConfig[]
     */
    public $initContainersConfig;

    /**
     * @var bool
     */
    public $isStateful;

    /**
     * @var string
     */
    public $jarStartArgs;

    /**
     * @var string
     */
    public $jarStartOptions;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $kafkaConfigs;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $microRegistration;

    /**
     * @var string
     */
    public $microRegistrationConfig;

    /**
     * @var string
     */
    public $microserviceEngineConfig;

    /**
     * @var string
     */
    public $mountDesc;

    /**
     * @var string
     */
    public $mountHost;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $nasConfigs;

    /**
     * @var string
     */
    public $nasId;

    /**
     * @var string
     */
    public $newSaeVersion;

    /**
     * @var string
     */
    public $oidcRoleName;

    /**
     * @var string
     */
    public $ossAkId;

    /**
     * @var string
     */
    public $ossAkSecret;

    /**
     * @var string
     */
    public $ossMountDescs;

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
    public $php;

    /**
     * @var string
     */
    public $phpArmsConfigLocation;

    /**
     * @var string
     */
    public $phpConfig;

    /**
     * @var string
     */
    public $phpConfigLocation;

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
    public $programmingLanguage;

    /**
     * @var string
     */
    public $pvtzDiscoverySvc;

    /**
     * @var string
     */
    public $python;

    /**
     * @var string
     */
    public $pythonModules;

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
    public $resourceType;

    /**
     * @var string
     */
    public $saeVersion;

    /**
     * @var string
     */
    public $secretMountDesc;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $serviceTags;

    /**
     * @var SidecarContainerConfig[]
     */
    public $sidecarContainersConfig;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var string
     */
    public $startupProbe;

    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $tomcatConfig;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $warStartOptions;

    /**
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn' => 'AcrAssumeRoleArn',
        'acrInstanceId' => 'AcrInstanceId',
        'appDescription' => 'AppDescription',
        'appName' => 'AppName',
        'appSource' => 'AppSource',
        'associateEip' => 'AssociateEip',
        'autoConfig' => 'AutoConfig',
        'baseAppId' => 'BaseAppId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'customHostAlias' => 'CustomHostAlias',
        'customImageNetworkType' => 'CustomImageNetworkType',
        'deploy' => 'Deploy',
        'diskSize' => 'DiskSize',
        'dotnet' => 'Dotnet',
        'edasContainerVersion' => 'EdasContainerVersion',
        'emptyDirDesc' => 'EmptyDirDesc',
        'enableCpuBurst' => 'EnableCpuBurst',
        'enableEbpf' => 'EnableEbpf',
        'enableNewArms' => 'EnableNewArms',
        'enablePrometheus' => 'EnablePrometheus',
        'enableSidecarResourceIsolated' => 'EnableSidecarResourceIsolated',
        'envs' => 'Envs',
        'gpuConfig' => 'GpuConfig',
        'headlessPvtzDiscoverySvc' => 'HeadlessPvtzDiscoverySvc',
        'html' => 'Html',
        'imagePullSecrets' => 'ImagePullSecrets',
        'imageUrl' => 'ImageUrl',
        'initContainersConfig' => 'InitContainersConfig',
        'isStateful' => 'IsStateful',
        'jarStartArgs' => 'JarStartArgs',
        'jarStartOptions' => 'JarStartOptions',
        'jdk' => 'Jdk',
        'kafkaConfigs' => 'KafkaConfigs',
        'liveness' => 'Liveness',
        'memory' => 'Memory',
        'microRegistration' => 'MicroRegistration',
        'microRegistrationConfig' => 'MicroRegistrationConfig',
        'microserviceEngineConfig' => 'MicroserviceEngineConfig',
        'mountDesc' => 'MountDesc',
        'mountHost' => 'MountHost',
        'namespaceId' => 'NamespaceId',
        'nasConfigs' => 'NasConfigs',
        'nasId' => 'NasId',
        'newSaeVersion' => 'NewSaeVersion',
        'oidcRoleName' => 'OidcRoleName',
        'ossAkId' => 'OssAkId',
        'ossAkSecret' => 'OssAkSecret',
        'ossMountDescs' => 'OssMountDescs',
        'packageType' => 'PackageType',
        'packageUrl' => 'PackageUrl',
        'packageVersion' => 'PackageVersion',
        'php' => 'Php',
        'phpArmsConfigLocation' => 'PhpArmsConfigLocation',
        'phpConfig' => 'PhpConfig',
        'phpConfigLocation' => 'PhpConfigLocation',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'programmingLanguage' => 'ProgrammingLanguage',
        'pvtzDiscoverySvc' => 'PvtzDiscoverySvc',
        'python' => 'Python',
        'pythonModules' => 'PythonModules',
        'readiness' => 'Readiness',
        'replicas' => 'Replicas',
        'resourceType' => 'ResourceType',
        'saeVersion' => 'SaeVersion',
        'secretMountDesc' => 'SecretMountDesc',
        'securityGroupId' => 'SecurityGroupId',
        'serviceTags' => 'ServiceTags',
        'sidecarContainersConfig' => 'SidecarContainersConfig',
        'slsConfigs' => 'SlsConfigs',
        'startupProbe' => 'StartupProbe',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timezone' => 'Timezone',
        'tomcatConfig' => 'TomcatConfig',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'warStartOptions' => 'WarStartOptions',
        'webContainer' => 'WebContainer',
    ];

    public function validate()
    {
        if (\is_array($this->initContainersConfig)) {
            Model::validateArray($this->initContainersConfig);
        }
        if (\is_array($this->sidecarContainersConfig)) {
            Model::validateArray($this->sidecarContainersConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrAssumeRoleArn) {
            $res['AcrAssumeRoleArn'] = $this->acrAssumeRoleArn;
        }

        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
        }

        if (null !== $this->associateEip) {
            $res['AssociateEip'] = $this->associateEip;
        }

        if (null !== $this->autoConfig) {
            $res['AutoConfig'] = $this->autoConfig;
        }

        if (null !== $this->baseAppId) {
            $res['BaseAppId'] = $this->baseAppId;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->configMapMountDesc) {
            $res['ConfigMapMountDesc'] = $this->configMapMountDesc;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->customHostAlias) {
            $res['CustomHostAlias'] = $this->customHostAlias;
        }

        if (null !== $this->customImageNetworkType) {
            $res['CustomImageNetworkType'] = $this->customImageNetworkType;
        }

        if (null !== $this->deploy) {
            $res['Deploy'] = $this->deploy;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->dotnet) {
            $res['Dotnet'] = $this->dotnet;
        }

        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }

        if (null !== $this->emptyDirDesc) {
            $res['EmptyDirDesc'] = $this->emptyDirDesc;
        }

        if (null !== $this->enableCpuBurst) {
            $res['EnableCpuBurst'] = $this->enableCpuBurst;
        }

        if (null !== $this->enableEbpf) {
            $res['EnableEbpf'] = $this->enableEbpf;
        }

        if (null !== $this->enableNewArms) {
            $res['EnableNewArms'] = $this->enableNewArms;
        }

        if (null !== $this->enablePrometheus) {
            $res['EnablePrometheus'] = $this->enablePrometheus;
        }

        if (null !== $this->enableSidecarResourceIsolated) {
            $res['EnableSidecarResourceIsolated'] = $this->enableSidecarResourceIsolated;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->gpuConfig) {
            $res['GpuConfig'] = $this->gpuConfig;
        }

        if (null !== $this->headlessPvtzDiscoverySvc) {
            $res['HeadlessPvtzDiscoverySvc'] = $this->headlessPvtzDiscoverySvc;
        }

        if (null !== $this->html) {
            $res['Html'] = $this->html;
        }

        if (null !== $this->imagePullSecrets) {
            $res['ImagePullSecrets'] = $this->imagePullSecrets;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->initContainersConfig) {
            if (\is_array($this->initContainersConfig)) {
                $res['InitContainersConfig'] = [];
                $n1 = 0;
                foreach ($this->initContainersConfig as $item1) {
                    $res['InitContainersConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isStateful) {
            $res['IsStateful'] = $this->isStateful;
        }

        if (null !== $this->jarStartArgs) {
            $res['JarStartArgs'] = $this->jarStartArgs;
        }

        if (null !== $this->jarStartOptions) {
            $res['JarStartOptions'] = $this->jarStartOptions;
        }

        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }

        if (null !== $this->kafkaConfigs) {
            $res['KafkaConfigs'] = $this->kafkaConfigs;
        }

        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->microRegistration) {
            $res['MicroRegistration'] = $this->microRegistration;
        }

        if (null !== $this->microRegistrationConfig) {
            $res['MicroRegistrationConfig'] = $this->microRegistrationConfig;
        }

        if (null !== $this->microserviceEngineConfig) {
            $res['MicroserviceEngineConfig'] = $this->microserviceEngineConfig;
        }

        if (null !== $this->mountDesc) {
            $res['MountDesc'] = $this->mountDesc;
        }

        if (null !== $this->mountHost) {
            $res['MountHost'] = $this->mountHost;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->nasConfigs) {
            $res['NasConfigs'] = $this->nasConfigs;
        }

        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }

        if (null !== $this->newSaeVersion) {
            $res['NewSaeVersion'] = $this->newSaeVersion;
        }

        if (null !== $this->oidcRoleName) {
            $res['OidcRoleName'] = $this->oidcRoleName;
        }

        if (null !== $this->ossAkId) {
            $res['OssAkId'] = $this->ossAkId;
        }

        if (null !== $this->ossAkSecret) {
            $res['OssAkSecret'] = $this->ossAkSecret;
        }

        if (null !== $this->ossMountDescs) {
            $res['OssMountDescs'] = $this->ossMountDescs;
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

        if (null !== $this->php) {
            $res['Php'] = $this->php;
        }

        if (null !== $this->phpArmsConfigLocation) {
            $res['PhpArmsConfigLocation'] = $this->phpArmsConfigLocation;
        }

        if (null !== $this->phpConfig) {
            $res['PhpConfig'] = $this->phpConfig;
        }

        if (null !== $this->phpConfigLocation) {
            $res['PhpConfigLocation'] = $this->phpConfigLocation;
        }

        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }

        if (null !== $this->programmingLanguage) {
            $res['ProgrammingLanguage'] = $this->programmingLanguage;
        }

        if (null !== $this->pvtzDiscoverySvc) {
            $res['PvtzDiscoverySvc'] = $this->pvtzDiscoverySvc;
        }

        if (null !== $this->python) {
            $res['Python'] = $this->python;
        }

        if (null !== $this->pythonModules) {
            $res['PythonModules'] = $this->pythonModules;
        }

        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->saeVersion) {
            $res['SaeVersion'] = $this->saeVersion;
        }

        if (null !== $this->secretMountDesc) {
            $res['SecretMountDesc'] = $this->secretMountDesc;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->serviceTags) {
            $res['ServiceTags'] = $this->serviceTags;
        }

        if (null !== $this->sidecarContainersConfig) {
            if (\is_array($this->sidecarContainersConfig)) {
                $res['SidecarContainersConfig'] = [];
                $n1 = 0;
                foreach ($this->sidecarContainersConfig as $item1) {
                    $res['SidecarContainersConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }

        if (null !== $this->startupProbe) {
            $res['StartupProbe'] = $this->startupProbe;
        }

        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->tomcatConfig) {
            $res['TomcatConfig'] = $this->tomcatConfig;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->warStartOptions) {
            $res['WarStartOptions'] = $this->warStartOptions;
        }

        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
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
        if (isset($map['AcrAssumeRoleArn'])) {
            $model->acrAssumeRoleArn = $map['AcrAssumeRoleArn'];
        }

        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
        }

        if (isset($map['AssociateEip'])) {
            $model->associateEip = $map['AssociateEip'];
        }

        if (isset($map['AutoConfig'])) {
            $model->autoConfig = $map['AutoConfig'];
        }

        if (isset($map['BaseAppId'])) {
            $model->baseAppId = $map['BaseAppId'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['ConfigMapMountDesc'])) {
            $model->configMapMountDesc = $map['ConfigMapMountDesc'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CustomHostAlias'])) {
            $model->customHostAlias = $map['CustomHostAlias'];
        }

        if (isset($map['CustomImageNetworkType'])) {
            $model->customImageNetworkType = $map['CustomImageNetworkType'];
        }

        if (isset($map['Deploy'])) {
            $model->deploy = $map['Deploy'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['Dotnet'])) {
            $model->dotnet = $map['Dotnet'];
        }

        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }

        if (isset($map['EmptyDirDesc'])) {
            $model->emptyDirDesc = $map['EmptyDirDesc'];
        }

        if (isset($map['EnableCpuBurst'])) {
            $model->enableCpuBurst = $map['EnableCpuBurst'];
        }

        if (isset($map['EnableEbpf'])) {
            $model->enableEbpf = $map['EnableEbpf'];
        }

        if (isset($map['EnableNewArms'])) {
            $model->enableNewArms = $map['EnableNewArms'];
        }

        if (isset($map['EnablePrometheus'])) {
            $model->enablePrometheus = $map['EnablePrometheus'];
        }

        if (isset($map['EnableSidecarResourceIsolated'])) {
            $model->enableSidecarResourceIsolated = $map['EnableSidecarResourceIsolated'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['GpuConfig'])) {
            $model->gpuConfig = $map['GpuConfig'];
        }

        if (isset($map['HeadlessPvtzDiscoverySvc'])) {
            $model->headlessPvtzDiscoverySvc = $map['HeadlessPvtzDiscoverySvc'];
        }

        if (isset($map['Html'])) {
            $model->html = $map['Html'];
        }

        if (isset($map['ImagePullSecrets'])) {
            $model->imagePullSecrets = $map['ImagePullSecrets'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['InitContainersConfig'])) {
            if (!empty($map['InitContainersConfig'])) {
                $model->initContainersConfig = [];
                $n1 = 0;
                foreach ($map['InitContainersConfig'] as $item1) {
                    $model->initContainersConfig[$n1] = InitContainerConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IsStateful'])) {
            $model->isStateful = $map['IsStateful'];
        }

        if (isset($map['JarStartArgs'])) {
            $model->jarStartArgs = $map['JarStartArgs'];
        }

        if (isset($map['JarStartOptions'])) {
            $model->jarStartOptions = $map['JarStartOptions'];
        }

        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }

        if (isset($map['KafkaConfigs'])) {
            $model->kafkaConfigs = $map['KafkaConfigs'];
        }

        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MicroRegistration'])) {
            $model->microRegistration = $map['MicroRegistration'];
        }

        if (isset($map['MicroRegistrationConfig'])) {
            $model->microRegistrationConfig = $map['MicroRegistrationConfig'];
        }

        if (isset($map['MicroserviceEngineConfig'])) {
            $model->microserviceEngineConfig = $map['MicroserviceEngineConfig'];
        }

        if (isset($map['MountDesc'])) {
            $model->mountDesc = $map['MountDesc'];
        }

        if (isset($map['MountHost'])) {
            $model->mountHost = $map['MountHost'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['NasConfigs'])) {
            $model->nasConfigs = $map['NasConfigs'];
        }

        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }

        if (isset($map['NewSaeVersion'])) {
            $model->newSaeVersion = $map['NewSaeVersion'];
        }

        if (isset($map['OidcRoleName'])) {
            $model->oidcRoleName = $map['OidcRoleName'];
        }

        if (isset($map['OssAkId'])) {
            $model->ossAkId = $map['OssAkId'];
        }

        if (isset($map['OssAkSecret'])) {
            $model->ossAkSecret = $map['OssAkSecret'];
        }

        if (isset($map['OssMountDescs'])) {
            $model->ossMountDescs = $map['OssMountDescs'];
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

        if (isset($map['Php'])) {
            $model->php = $map['Php'];
        }

        if (isset($map['PhpArmsConfigLocation'])) {
            $model->phpArmsConfigLocation = $map['PhpArmsConfigLocation'];
        }

        if (isset($map['PhpConfig'])) {
            $model->phpConfig = $map['PhpConfig'];
        }

        if (isset($map['PhpConfigLocation'])) {
            $model->phpConfigLocation = $map['PhpConfigLocation'];
        }

        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }

        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }

        if (isset($map['ProgrammingLanguage'])) {
            $model->programmingLanguage = $map['ProgrammingLanguage'];
        }

        if (isset($map['PvtzDiscoverySvc'])) {
            $model->pvtzDiscoverySvc = $map['PvtzDiscoverySvc'];
        }

        if (isset($map['Python'])) {
            $model->python = $map['Python'];
        }

        if (isset($map['PythonModules'])) {
            $model->pythonModules = $map['PythonModules'];
        }

        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SaeVersion'])) {
            $model->saeVersion = $map['SaeVersion'];
        }

        if (isset($map['SecretMountDesc'])) {
            $model->secretMountDesc = $map['SecretMountDesc'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ServiceTags'])) {
            $model->serviceTags = $map['ServiceTags'];
        }

        if (isset($map['SidecarContainersConfig'])) {
            if (!empty($map['SidecarContainersConfig'])) {
                $model->sidecarContainersConfig = [];
                $n1 = 0;
                foreach ($map['SidecarContainersConfig'] as $item1) {
                    $model->sidecarContainersConfig[$n1] = SidecarContainerConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }

        if (isset($map['StartupProbe'])) {
            $model->startupProbe = $map['StartupProbe'];
        }

        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['TomcatConfig'])) {
            $model->tomcatConfig = $map['TomcatConfig'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WarStartOptions'])) {
            $model->warStartOptions = $map['WarStartOptions'];
        }

        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
