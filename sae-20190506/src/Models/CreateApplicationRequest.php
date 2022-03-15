<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @description ACR 企业版实例 ID
     *
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
     * @description 是否绑定EIP
     *
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
     * @var bool
     */
    public $deploy;

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
     * @var string
     */
    public $kafkaEndpoint;

    /**
     * @var string
     */
    public $kafkaInstanceId;

    /**
     * @var string
     */
    public $kafkaLogfileConfig;

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
    public $nasId;

    /**
     * @var bool
     */
    public $openCollectToKafka;

    /**
     * @description OSS使用的AKID
     *
     * @var string
     */
    public $ossAkId;

    /**
     * @description OSS AKID对应的secret
     *
     * @var string
     */
    public $ossAkSecret;

    /**
     * @description OSS挂载描述信息
     *
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
    public $readiness;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $slsConfigs;

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
        'acrAssumeRoleArn'              => 'AcrAssumeRoleArn',
        'acrInstanceId'                 => 'AcrInstanceId',
        'appDescription'                => 'AppDescription',
        'appName'                       => 'AppName',
        'associateEip'                  => 'AssociateEip',
        'autoConfig'                    => 'AutoConfig',
        'command'                       => 'Command',
        'commandArgs'                   => 'CommandArgs',
        'configMapMountDesc'            => 'ConfigMapMountDesc',
        'cpu'                           => 'Cpu',
        'customHostAlias'               => 'CustomHostAlias',
        'deploy'                        => 'Deploy',
        'edasContainerVersion'          => 'EdasContainerVersion',
        'envs'                          => 'Envs',
        'imageUrl'                      => 'ImageUrl',
        'jarStartArgs'                  => 'JarStartArgs',
        'jarStartOptions'               => 'JarStartOptions',
        'jdk'                           => 'Jdk',
        'kafkaEndpoint'                 => 'KafkaEndpoint',
        'kafkaInstanceId'               => 'KafkaInstanceId',
        'kafkaLogfileConfig'            => 'KafkaLogfileConfig',
        'liveness'                      => 'Liveness',
        'memory'                        => 'Memory',
        'mountDesc'                     => 'MountDesc',
        'mountHost'                     => 'MountHost',
        'namespaceId'                   => 'NamespaceId',
        'nasId'                         => 'NasId',
        'openCollectToKafka'            => 'OpenCollectToKafka',
        'ossAkId'                       => 'OssAkId',
        'ossAkSecret'                   => 'OssAkSecret',
        'ossMountDescs'                 => 'OssMountDescs',
        'packageType'                   => 'PackageType',
        'packageUrl'                    => 'PackageUrl',
        'packageVersion'                => 'PackageVersion',
        'phpArmsConfigLocation'         => 'PhpArmsConfigLocation',
        'phpConfig'                     => 'PhpConfig',
        'phpConfigLocation'             => 'PhpConfigLocation',
        'postStart'                     => 'PostStart',
        'preStop'                       => 'PreStop',
        'readiness'                     => 'Readiness',
        'replicas'                      => 'Replicas',
        'securityGroupId'               => 'SecurityGroupId',
        'slsConfigs'                    => 'SlsConfigs',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timezone'                      => 'Timezone',
        'tomcatConfig'                  => 'TomcatConfig',
        'vSwitchId'                     => 'VSwitchId',
        'vpcId'                         => 'VpcId',
        'warStartOptions'               => 'WarStartOptions',
        'webContainer'                  => 'WebContainer',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->associateEip) {
            $res['AssociateEip'] = $this->associateEip;
        }
        if (null !== $this->autoConfig) {
            $res['AutoConfig'] = $this->autoConfig;
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
        if (null !== $this->deploy) {
            $res['Deploy'] = $this->deploy;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
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
        if (null !== $this->kafkaEndpoint) {
            $res['KafkaEndpoint'] = $this->kafkaEndpoint;
        }
        if (null !== $this->kafkaInstanceId) {
            $res['KafkaInstanceId'] = $this->kafkaInstanceId;
        }
        if (null !== $this->kafkaLogfileConfig) {
            $res['KafkaLogfileConfig'] = $this->kafkaLogfileConfig;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }
        if (null !== $this->openCollectToKafka) {
            $res['OpenCollectToKafka'] = $this->openCollectToKafka;
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
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
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

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
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
        if (isset($map['AssociateEip'])) {
            $model->associateEip = $map['AssociateEip'];
        }
        if (isset($map['AutoConfig'])) {
            $model->autoConfig = $map['AutoConfig'];
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
        if (isset($map['Deploy'])) {
            $model->deploy = $map['Deploy'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
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
        if (isset($map['KafkaEndpoint'])) {
            $model->kafkaEndpoint = $map['KafkaEndpoint'];
        }
        if (isset($map['KafkaInstanceId'])) {
            $model->kafkaInstanceId = $map['KafkaInstanceId'];
        }
        if (isset($map['KafkaLogfileConfig'])) {
            $model->kafkaLogfileConfig = $map['KafkaLogfileConfig'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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
        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }
        if (isset($map['OpenCollectToKafka'])) {
            $model->openCollectToKafka = $map['OpenCollectToKafka'];
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
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
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
