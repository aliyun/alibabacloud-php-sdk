<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\initContainersConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\mountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\ossMountDescs;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\secretMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\tags;

class data extends Model
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
    public $appId;

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
     * @var string
     */
    public $baseAppId;

    /**
     * @var int
     */
    public $batchWaitTime;

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
     * @var configMapMountDesc[]
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
    public $enableAhas;

    /**
     * @var string
     */
    public $enableCpuBurst;

    /**
     * @var bool
     */
    public $enableGreyTagRoute;

    /**
     * @var bool
     */
    public $enableIdle;

    /**
     * @var bool
     */
    public $enableNewArms;

    /**
     * @var bool
     */
    public $enablePrometheus;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var initContainersConfig[]
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
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;

    /**
     * @var mountDesc[]
     */
    public $mountDesc;

    /**
     * @var string
     */
    public $mountHost;

    /**
     * @var string
     */
    public $mseApplicationId;

    /**
     * @var string
     */
    public $mseApplicationName;

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
     * @var ossMountDescs[]
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
    public $pvtzDiscovery;

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
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var secretMountDesc[]
     */
    public $secretMountDesc;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $serviceTags;

    /**
     * @var sidecarContainersConfig[]
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
     * @var string
     */
    public $swimlanePvtzDiscovery;

    /**
     * @var tags[]
     */
    public $tags;

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
    public $updateStrategy;

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
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appSource' => 'AppSource',
        'associateEip' => 'AssociateEip',
        'baseAppId' => 'BaseAppId',
        'batchWaitTime' => 'BatchWaitTime',
        'clusterId' => 'ClusterId',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'customHostAlias' => 'CustomHostAlias',
        'customImageNetworkType' => 'CustomImageNetworkType',
        'diskSize' => 'DiskSize',
        'dotnet' => 'Dotnet',
        'edasContainerVersion' => 'EdasContainerVersion',
        'enableAhas' => 'EnableAhas',
        'enableCpuBurst' => 'EnableCpuBurst',
        'enableGreyTagRoute' => 'EnableGreyTagRoute',
        'enableIdle' => 'EnableIdle',
        'enableNewArms' => 'EnableNewArms',
        'enablePrometheus' => 'EnablePrometheus',
        'envs' => 'Envs',
        'gpuCount' => 'GpuCount',
        'gpuType' => 'GpuType',
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
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances' => 'MinReadyInstances',
        'mountDesc' => 'MountDesc',
        'mountHost' => 'MountHost',
        'mseApplicationId' => 'MseApplicationId',
        'mseApplicationName' => 'MseApplicationName',
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
        'pvtzDiscovery' => 'PvtzDiscovery',
        'python' => 'Python',
        'pythonModules' => 'PythonModules',
        'readiness' => 'Readiness',
        'regionId' => 'RegionId',
        'replicas' => 'Replicas',
        'resourceType' => 'ResourceType',
        'secretMountDesc' => 'SecretMountDesc',
        'securityGroupId' => 'SecurityGroupId',
        'serviceTags' => 'ServiceTags',
        'sidecarContainersConfig' => 'SidecarContainersConfig',
        'slsConfigs' => 'SlsConfigs',
        'startupProbe' => 'StartupProbe',
        'swimlanePvtzDiscovery' => 'SwimlanePvtzDiscovery',
        'tags' => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timezone' => 'Timezone',
        'tomcatConfig' => 'TomcatConfig',
        'updateStrategy' => 'UpdateStrategy',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'warStartOptions' => 'WarStartOptions',
        'webContainer' => 'WebContainer',
    ];

    public function validate()
    {
        if (\is_array($this->configMapMountDesc)) {
            Model::validateArray($this->configMapMountDesc);
        }
        if (\is_array($this->initContainersConfig)) {
            Model::validateArray($this->initContainersConfig);
        }
        if (\is_array($this->mountDesc)) {
            Model::validateArray($this->mountDesc);
        }
        if (\is_array($this->ossMountDescs)) {
            Model::validateArray($this->ossMountDescs);
        }
        if (\is_array($this->secretMountDesc)) {
            Model::validateArray($this->secretMountDesc);
        }
        if (\is_array($this->serviceTags)) {
            Model::validateArray($this->serviceTags);
        }
        if (\is_array($this->sidecarContainersConfig)) {
            Model::validateArray($this->sidecarContainersConfig);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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

        if (null !== $this->baseAppId) {
            $res['BaseAppId'] = $this->baseAppId;
        }

        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
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

        if (null !== $this->configMapMountDesc) {
            if (\is_array($this->configMapMountDesc)) {
                $res['ConfigMapMountDesc'] = [];
                $n1 = 0;
                foreach ($this->configMapMountDesc as $item1) {
                    $res['ConfigMapMountDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->dotnet) {
            $res['Dotnet'] = $this->dotnet;
        }

        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }

        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }

        if (null !== $this->enableCpuBurst) {
            $res['EnableCpuBurst'] = $this->enableCpuBurst;
        }

        if (null !== $this->enableGreyTagRoute) {
            $res['EnableGreyTagRoute'] = $this->enableGreyTagRoute;
        }

        if (null !== $this->enableIdle) {
            $res['EnableIdle'] = $this->enableIdle;
        }

        if (null !== $this->enableNewArms) {
            $res['EnableNewArms'] = $this->enableNewArms;
        }

        if (null !== $this->enablePrometheus) {
            $res['EnablePrometheus'] = $this->enablePrometheus;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }

        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
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

        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }

        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }

        if (null !== $this->mountDesc) {
            if (\is_array($this->mountDesc)) {
                $res['MountDesc'] = [];
                $n1 = 0;
                foreach ($this->mountDesc as $item1) {
                    $res['MountDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mountHost) {
            $res['MountHost'] = $this->mountHost;
        }

        if (null !== $this->mseApplicationId) {
            $res['MseApplicationId'] = $this->mseApplicationId;
        }

        if (null !== $this->mseApplicationName) {
            $res['MseApplicationName'] = $this->mseApplicationName;
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
            if (\is_array($this->ossMountDescs)) {
                $res['OssMountDescs'] = [];
                $n1 = 0;
                foreach ($this->ossMountDescs as $item1) {
                    $res['OssMountDescs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->pvtzDiscovery) {
            $res['PvtzDiscovery'] = $this->pvtzDiscovery;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->secretMountDesc) {
            if (\is_array($this->secretMountDesc)) {
                $res['SecretMountDesc'] = [];
                $n1 = 0;
                foreach ($this->secretMountDesc as $item1) {
                    $res['SecretMountDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->serviceTags) {
            if (\is_array($this->serviceTags)) {
                $res['ServiceTags'] = [];
                foreach ($this->serviceTags as $key1 => $value1) {
                    $res['ServiceTags'][$key1] = $value1;
                }
            }
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

        if (null !== $this->swimlanePvtzDiscovery) {
            $res['SwimlanePvtzDiscovery'] = $this->swimlanePvtzDiscovery;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
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

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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

        if (isset($map['BaseAppId'])) {
            $model->baseAppId = $map['BaseAppId'];
        }

        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
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

        if (isset($map['ConfigMapMountDesc'])) {
            if (!empty($map['ConfigMapMountDesc'])) {
                $model->configMapMountDesc = [];
                $n1 = 0;
                foreach ($map['ConfigMapMountDesc'] as $item1) {
                    $model->configMapMountDesc[$n1] = configMapMountDesc::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['Dotnet'])) {
            $model->dotnet = $map['Dotnet'];
        }

        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }

        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }

        if (isset($map['EnableCpuBurst'])) {
            $model->enableCpuBurst = $map['EnableCpuBurst'];
        }

        if (isset($map['EnableGreyTagRoute'])) {
            $model->enableGreyTagRoute = $map['EnableGreyTagRoute'];
        }

        if (isset($map['EnableIdle'])) {
            $model->enableIdle = $map['EnableIdle'];
        }

        if (isset($map['EnableNewArms'])) {
            $model->enableNewArms = $map['EnableNewArms'];
        }

        if (isset($map['EnablePrometheus'])) {
            $model->enablePrometheus = $map['EnablePrometheus'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }

        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
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
                    $model->initContainersConfig[$n1] = initContainersConfig::fromMap($item1);
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

        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }

        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }

        if (isset($map['MountDesc'])) {
            if (!empty($map['MountDesc'])) {
                $model->mountDesc = [];
                $n1 = 0;
                foreach ($map['MountDesc'] as $item1) {
                    $model->mountDesc[$n1] = mountDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MountHost'])) {
            $model->mountHost = $map['MountHost'];
        }

        if (isset($map['MseApplicationId'])) {
            $model->mseApplicationId = $map['MseApplicationId'];
        }

        if (isset($map['MseApplicationName'])) {
            $model->mseApplicationName = $map['MseApplicationName'];
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
            if (!empty($map['OssMountDescs'])) {
                $model->ossMountDescs = [];
                $n1 = 0;
                foreach ($map['OssMountDescs'] as $item1) {
                    $model->ossMountDescs[$n1] = ossMountDescs::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['PvtzDiscovery'])) {
            $model->pvtzDiscovery = $map['PvtzDiscovery'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SecretMountDesc'])) {
            if (!empty($map['SecretMountDesc'])) {
                $model->secretMountDesc = [];
                $n1 = 0;
                foreach ($map['SecretMountDesc'] as $item1) {
                    $model->secretMountDesc[$n1] = secretMountDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ServiceTags'])) {
            if (!empty($map['ServiceTags'])) {
                $model->serviceTags = [];
                foreach ($map['ServiceTags'] as $key1 => $value1) {
                    $model->serviceTags[$key1] = $value1;
                }
            }
        }

        if (isset($map['SidecarContainersConfig'])) {
            if (!empty($map['SidecarContainersConfig'])) {
                $model->sidecarContainersConfig = [];
                $n1 = 0;
                foreach ($map['SidecarContainersConfig'] as $item1) {
                    $model->sidecarContainersConfig[$n1] = sidecarContainersConfig::fromMap($item1);
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

        if (isset($map['SwimlanePvtzDiscovery'])) {
            $model->swimlanePvtzDiscovery = $map['SwimlanePvtzDiscovery'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
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
