<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\mountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\ossMountDescs;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\tags;

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
     * @var int
     */
    public $backoffLimit;

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
    public $concurrencyPolicy;

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
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @var string
     */
    public $imageUrl;

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
     * @var int
     */
    public $memory;

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
     * @var string[]
     */
    public $publicWebHookUrls;

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
    public $refAppId;

    /**
     * @var string[]
     */
    public $refedAppIds;

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
    public $securityGroupId;

    /**
     * @var bool
     */
    public $slice;

    /**
     * @var string
     */
    public $sliceEnvs;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var bool
     */
    public $suspend;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var int
     */
    public $timeout;

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
    public $triggerConfig;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vpcWebHookUrls;

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
        'backoffLimit' => 'BackoffLimit',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'concurrencyPolicy' => 'ConcurrencyPolicy',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'cpu' => 'Cpu',
        'customHostAlias' => 'CustomHostAlias',
        'edasContainerVersion' => 'EdasContainerVersion',
        'envs' => 'Envs',
        'imagePullSecrets' => 'ImagePullSecrets',
        'imageUrl' => 'ImageUrl',
        'jarStartArgs' => 'JarStartArgs',
        'jarStartOptions' => 'JarStartOptions',
        'jdk' => 'Jdk',
        'memory' => 'Memory',
        'mountDesc' => 'MountDesc',
        'mountHost' => 'MountHost',
        'namespaceId' => 'NamespaceId',
        'nasConfigs' => 'NasConfigs',
        'nasId' => 'NasId',
        'ossAkId' => 'OssAkId',
        'ossAkSecret' => 'OssAkSecret',
        'ossMountDescs' => 'OssMountDescs',
        'packageType' => 'PackageType',
        'packageUrl' => 'PackageUrl',
        'packageVersion' => 'PackageVersion',
        'phpConfig' => 'PhpConfig',
        'phpConfigLocation' => 'PhpConfigLocation',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'programmingLanguage' => 'ProgrammingLanguage',
        'publicWebHookUrls' => 'PublicWebHookUrls',
        'python' => 'Python',
        'pythonModules' => 'PythonModules',
        'refAppId' => 'RefAppId',
        'refedAppIds' => 'RefedAppIds',
        'regionId' => 'RegionId',
        'replicas' => 'Replicas',
        'securityGroupId' => 'SecurityGroupId',
        'slice' => 'Slice',
        'sliceEnvs' => 'SliceEnvs',
        'slsConfigs' => 'SlsConfigs',
        'suspend' => 'Suspend',
        'tags' => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timeout' => 'Timeout',
        'timezone' => 'Timezone',
        'tomcatConfig' => 'TomcatConfig',
        'triggerConfig' => 'TriggerConfig',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'vpcWebHookUrls' => 'VpcWebHookUrls',
        'warStartOptions' => 'WarStartOptions',
        'webContainer' => 'WebContainer',
    ];

    public function validate()
    {
        if (\is_array($this->configMapMountDesc)) {
            Model::validateArray($this->configMapMountDesc);
        }
        if (\is_array($this->mountDesc)) {
            Model::validateArray($this->mountDesc);
        }
        if (\is_array($this->ossMountDescs)) {
            Model::validateArray($this->ossMountDescs);
        }
        if (\is_array($this->publicWebHookUrls)) {
            Model::validateArray($this->publicWebHookUrls);
        }
        if (\is_array($this->refedAppIds)) {
            Model::validateArray($this->refedAppIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vpcWebHookUrls)) {
            Model::validateArray($this->vpcWebHookUrls);
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

        if (null !== $this->backoffLimit) {
            $res['BackoffLimit'] = $this->backoffLimit;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->concurrencyPolicy) {
            $res['ConcurrencyPolicy'] = $this->concurrencyPolicy;
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

        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->imagePullSecrets) {
            $res['ImagePullSecrets'] = $this->imagePullSecrets;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->nasConfigs) {
            $res['NasConfigs'] = $this->nasConfigs;
        }

        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
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

        if (null !== $this->publicWebHookUrls) {
            if (\is_array($this->publicWebHookUrls)) {
                $res['PublicWebHookUrls'] = [];
                $n1 = 0;
                foreach ($this->publicWebHookUrls as $item1) {
                    $res['PublicWebHookUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->python) {
            $res['Python'] = $this->python;
        }

        if (null !== $this->pythonModules) {
            $res['PythonModules'] = $this->pythonModules;
        }

        if (null !== $this->refAppId) {
            $res['RefAppId'] = $this->refAppId;
        }

        if (null !== $this->refedAppIds) {
            if (\is_array($this->refedAppIds)) {
                $res['RefedAppIds'] = [];
                $n1 = 0;
                foreach ($this->refedAppIds as $item1) {
                    $res['RefedAppIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->slice) {
            $res['Slice'] = $this->slice;
        }

        if (null !== $this->sliceEnvs) {
            $res['SliceEnvs'] = $this->sliceEnvs;
        }

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }

        if (null !== $this->suspend) {
            $res['Suspend'] = $this->suspend;
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

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->tomcatConfig) {
            $res['TomcatConfig'] = $this->tomcatConfig;
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = $this->triggerConfig;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcWebHookUrls) {
            if (\is_array($this->vpcWebHookUrls)) {
                $res['VpcWebHookUrls'] = [];
                $n1 = 0;
                foreach ($this->vpcWebHookUrls as $item1) {
                    $res['VpcWebHookUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['BackoffLimit'])) {
            $model->backoffLimit = $map['BackoffLimit'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['ConcurrencyPolicy'])) {
            $model->concurrencyPolicy = $map['ConcurrencyPolicy'];
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

        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['ImagePullSecrets'])) {
            $model->imagePullSecrets = $map['ImagePullSecrets'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['NasConfigs'])) {
            $model->nasConfigs = $map['NasConfigs'];
        }

        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
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

        if (isset($map['PublicWebHookUrls'])) {
            if (!empty($map['PublicWebHookUrls'])) {
                $model->publicWebHookUrls = [];
                $n1 = 0;
                foreach ($map['PublicWebHookUrls'] as $item1) {
                    $model->publicWebHookUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Python'])) {
            $model->python = $map['Python'];
        }

        if (isset($map['PythonModules'])) {
            $model->pythonModules = $map['PythonModules'];
        }

        if (isset($map['RefAppId'])) {
            $model->refAppId = $map['RefAppId'];
        }

        if (isset($map['RefedAppIds'])) {
            if (!empty($map['RefedAppIds'])) {
                $model->refedAppIds = [];
                $n1 = 0;
                foreach ($map['RefedAppIds'] as $item1) {
                    $model->refedAppIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Slice'])) {
            $model->slice = $map['Slice'];
        }

        if (isset($map['SliceEnvs'])) {
            $model->sliceEnvs = $map['SliceEnvs'];
        }

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }

        if (isset($map['Suspend'])) {
            $model->suspend = $map['Suspend'];
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

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['TomcatConfig'])) {
            $model->tomcatConfig = $map['TomcatConfig'];
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = $map['TriggerConfig'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcWebHookUrls'])) {
            if (!empty($map['VpcWebHookUrls'])) {
                $model->vpcWebHookUrls = [];
                $n1 = 0;
                foreach ($map['VpcWebHookUrls'] as $item1) {
                    $model->vpcWebHookUrls[$n1] = $item1;
                    ++$n1;
                }
            }
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
