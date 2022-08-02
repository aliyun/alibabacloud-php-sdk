<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationRequest extends Model
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
    public $appId;

    /**
     * @var bool
     */
    public $associateEip;

    /**
     * @var bool
     */
    public $autoEnableApplicationScalingRule;

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
    public $commandArgs;

    /**
     * @var string
     */
    public $configMapMountDesc;

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
    public $enableAhas;

    /**
     * @var bool
     */
    public $enableGreyTagRoute;

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
    public $kafkaConfigs;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;

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
     * @var string
     */
    public $ossMountDescs;

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
    public $updateStrategy;

    /**
     * @var string
     */
    public $warStartOptions;

    /**
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn'                 => 'AcrAssumeRoleArn',
        'acrInstanceId'                    => 'AcrInstanceId',
        'appId'                            => 'AppId',
        'associateEip'                     => 'AssociateEip',
        'autoEnableApplicationScalingRule' => 'AutoEnableApplicationScalingRule',
        'batchWaitTime'                    => 'BatchWaitTime',
        'changeOrderDesc'                  => 'ChangeOrderDesc',
        'command'                          => 'Command',
        'commandArgs'                      => 'CommandArgs',
        'configMapMountDesc'               => 'ConfigMapMountDesc',
        'customHostAlias'                  => 'CustomHostAlias',
        'edasContainerVersion'             => 'EdasContainerVersion',
        'enableAhas'                       => 'EnableAhas',
        'enableGreyTagRoute'               => 'EnableGreyTagRoute',
        'envs'                             => 'Envs',
        'imageUrl'                         => 'ImageUrl',
        'jarStartArgs'                     => 'JarStartArgs',
        'jarStartOptions'                  => 'JarStartOptions',
        'jdk'                              => 'Jdk',
        'kafkaConfigs'                     => 'KafkaConfigs',
        'liveness'                         => 'Liveness',
        'minReadyInstanceRatio'            => 'MinReadyInstanceRatio',
        'minReadyInstances'                => 'MinReadyInstances',
        'mountDesc'                        => 'MountDesc',
        'mountHost'                        => 'MountHost',
        'nasId'                            => 'NasId',
        'ossAkId'                          => 'OssAkId',
        'ossAkSecret'                      => 'OssAkSecret',
        'ossMountDescs'                    => 'OssMountDescs',
        'packageUrl'                       => 'PackageUrl',
        'packageVersion'                   => 'PackageVersion',
        'phpArmsConfigLocation'            => 'PhpArmsConfigLocation',
        'phpConfig'                        => 'PhpConfig',
        'phpConfigLocation'                => 'PhpConfigLocation',
        'postStart'                        => 'PostStart',
        'preStop'                          => 'PreStop',
        'readiness'                        => 'Readiness',
        'slsConfigs'                       => 'SlsConfigs',
        'terminationGracePeriodSeconds'    => 'TerminationGracePeriodSeconds',
        'timezone'                         => 'Timezone',
        'tomcatConfig'                     => 'TomcatConfig',
        'updateStrategy'                   => 'UpdateStrategy',
        'warStartOptions'                  => 'WarStartOptions',
        'webContainer'                     => 'WebContainer',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->associateEip) {
            $res['AssociateEip'] = $this->associateEip;
        }
        if (null !== $this->autoEnableApplicationScalingRule) {
            $res['AutoEnableApplicationScalingRule'] = $this->autoEnableApplicationScalingRule;
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
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }
        if (null !== $this->configMapMountDesc) {
            $res['ConfigMapMountDesc'] = $this->configMapMountDesc;
        }
        if (null !== $this->customHostAlias) {
            $res['CustomHostAlias'] = $this->customHostAlias;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->enableGreyTagRoute) {
            $res['EnableGreyTagRoute'] = $this->enableGreyTagRoute;
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
        if (null !== $this->kafkaConfigs) {
            $res['KafkaConfigs'] = $this->kafkaConfigs;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }
        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }
        if (null !== $this->mountDesc) {
            $res['MountDesc'] = $this->mountDesc;
        }
        if (null !== $this->mountHost) {
            $res['MountHost'] = $this->mountHost;
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
            $res['OssMountDescs'] = $this->ossMountDescs;
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
        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
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
     * @return DeployApplicationRequest
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AssociateEip'])) {
            $model->associateEip = $map['AssociateEip'];
        }
        if (isset($map['AutoEnableApplicationScalingRule'])) {
            $model->autoEnableApplicationScalingRule = $map['AutoEnableApplicationScalingRule'];
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
        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }
        if (isset($map['ConfigMapMountDesc'])) {
            $model->configMapMountDesc = $map['ConfigMapMountDesc'];
        }
        if (isset($map['CustomHostAlias'])) {
            $model->customHostAlias = $map['CustomHostAlias'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnableGreyTagRoute'])) {
            $model->enableGreyTagRoute = $map['EnableGreyTagRoute'];
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
        if (isset($map['KafkaConfigs'])) {
            $model->kafkaConfigs = $map['KafkaConfigs'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }
        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }
        if (isset($map['MountDesc'])) {
            $model->mountDesc = $map['MountDesc'];
        }
        if (isset($map['MountHost'])) {
            $model->mountHost = $map['MountHost'];
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
            $model->ossMountDescs = $map['OssMountDescs'];
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
        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
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
