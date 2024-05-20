<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description acs:ram::123456789012\\*\\*\\*\\*:role/adminrole
     *
     * @example acs:ram::123456789012****:role/adminrole
     *
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @description cri-xxxxxx
     *
     * @example cri-xxxxxx
     *
     * @var string
     */
    public $acrInstanceId;

    /**
     * @description This is a test description.
     *
     * @example This is a test description.
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description test
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSource;

    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $associateEip;

    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $autoConfig;

    /**
     * @description sleep
     *
     * @example echo
     *
     * @var string
     */
    public $command;

    /**
     * @description 1d
     *
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description [{"configMapId":16,"key":"test","mountPath":"/tmp"}]
     *
     * @example [{"configMapId":16,"key":"test","mountPath":"/tmp"}]
     *
     * @var string
     */
    public $configMapMountDesc;

    /**
     * @description 1000
     *
     * @example 1000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description [{"hostName":"samplehost","ip":"127.0.0.1"}]
     *
     * @example [{"hostName":"samplehost","ip":"127.0.0.1"}]
     *
     * @var string
     */
    public $customHostAlias;

    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $deploy;

    /**
     * @description 3.5.3
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $enableEbpf;

    /**
     * @description [{"name":"envtmp","value":"0"}]
     *
     * @example [{"name":"envtmp","value":"0"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @example 10
     *
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @description registry.cn-hangzhou.aliyuncs.com/sae_test/ali_sae_test:0.0.1
     *
     * @example registry.cn-hangzhou.aliyuncs.com/sae_test/ali_sae_test:0.0.1
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description custom-args
     *
     * @example custom-args
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @description \\-Xms4G -Xmx4G
     *
     * @example -Xms4G -Xmx4G
     *
     * @var string
     */
    public $jarStartOptions;

    /**
     * @description Open JDK 8
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $jdk;

    /**
     * @example {"kafkaEndpoint":"10.0.X.XXX:XXXX,10.0.X.XXX:XXXX,10.0.X.XXX:XXXX\\","kafkaInstanceId":"alikafka_pre-cn-7pp2l8kr****","kafkaConfigs":[{"logType":"file_log","logDir":"/tmp/a.log","kafkaTopic":"test2"},{"logType":"stdout","logDir":"","kafkaTopic":"test"}]}
     *
     * @var string
     */
    public $kafkaConfigs;

    /**
     * @description {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @example {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description 1024
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @example "0"
     *
     * @var string
     */
    public $microRegistration;

    /**
     * @description [{mountPath: "/tmp", nasPath: "/"}]
     *
     * @example [{mountPath: "/tmp", nasPath: "/"}]
     *
     * @var string
     */
    public $mountDesc;

    /**
     * @description example.com
     *
     * @example example.com
     *
     * @var string
     */
    public $mountHost;

    /**
     * @description cn-beijing:test
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example [{"mountPath":"/test1","readOnly":false,"nasId":"nasId1","mountDomain":"nasId1.cn-shenzhen.nas.aliyuncs.com","nasPath":"/test1"},{"nasId":"nasId2","mountDomain":"nasId2.cn-shenzhen.nas.aliyuncs.com","readOnly":false,"nasPath":"/test2","mountPath":"/test2"}]
     *
     * @var string
     */
    public $nasConfigs;

    /**
     * @description KSAK\\*\\*\\*\\*
     *
     * @example KSAK****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description xxxxxx
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkId;

    /**
     * @description xxxxxx
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkSecret;

    /**
     * @description [{"bucketName": "oss-bucket", "bucketPath": "data/user.data", "mountPath": "/usr/data/user.data", "readOnly": true}]
     *
     * @example [{"bucketName": "oss-bucket", "bucketPath": "data/user.data", "mountPath": "/usr/data/user.data", "readOnly": true}]
     *
     * @var string
     */
    public $ossMountDescs;

    /**
     * @description FatJar
     *
     * This parameter is required.
     * @example FatJar
     *
     * @var string
     */
    public $packageType;

    /**
     * @description http://myoss.oss-cn-\\*\\*\\*\\*.aliyuncs.com/my-buc/2019-06-30/\\*\\*\\*\\*.jar
     *
     * @example http://myoss.oss-cn-****.aliyuncs.com/my-buc/2019-06-30/****.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description 1.0.0
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @example PHP-FPM 7.0
     *
     * @var string
     */
    public $php;

    /**
     * @description /usr/local/etc/php/conf.d/arms.ini
     *
     * @example /usr/local/etc/php/conf.d/arms.ini
     *
     * @var string
     */
    public $phpArmsConfigLocation;

    /**
     * @description k1=v1
     *
     * @example k1=v1
     *
     * @var string
     */
    public $phpConfig;

    /**
     * @description /usr/local/etc/php/php.ini
     *
     * @example /usr/local/etc/php/php.ini
     *
     * @var string
     */
    public $phpConfigLocation;

    /**
     * @description {"exec":{"command":["cat","/etc/group"]}}
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description {"exec":{"command":["cat","/etc/group"]}}
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @example {"serviceName":"bwm-poc-sc-gateway-cn-beijing-front","namespaceId":"cn-beijing:front","portAndProtocol":{"18012":"TCP"},"enable":true}
     *
     * @var string
     */
    public $pvtzDiscoverySvc;

    /**
     * @example PYTHON 3.9.15
     *
     * @var string
     */
    public $python;

    /**
     * @example Flask==2.0
     *
     * @var string
     */
    public $pythonModules;

    /**
     * @description {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @example {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description 1
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $saeVersion;

    /**
     * @description sg-wz969ngg2e49q5i4\\*\\*\\*\\*
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @example [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @description 30
     *
     * @example 30
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description Asia/Shanghai
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description {"port":8080,"contextPath":"/","maxThreads":400,"uriEncoding":"ISO-8859-1","useBodyEncodingForUri":true}
     *
     * @example {"port":8080,"contextPath":"/","maxThreads":400,"uriEncoding":"ISO-8859-1","useBodyEncodingForUri":true}
     *
     * @var string
     */
    public $tomcatConfig;

    /**
     * @description vsw-bp12mw1f8k3jgygk9\\*\\*\\*\\*
     *
     * @example vsw-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description vpc-bp1aevy8sofi8mh1q\\*\\*\\*\\*
     *
     * @example vpc-bp1aevy8sofi8mh1q****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description CATALINA_OPTS=\\\\"$CATALINA_OPTS $Options\\\\" catalina.sh run
     *
     * @example CATALINA_OPTS=\\"$CATALINA_OPTS $Options\\" catalina.sh run
     *
     * @var string
     */
    public $warStartOptions;

    /**
     * @description apache-tomcat-7.0.91
     *
     * @example apache-tomcat-7.0.91
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn'              => 'AcrAssumeRoleArn',
        'acrInstanceId'                 => 'AcrInstanceId',
        'appDescription'                => 'AppDescription',
        'appName'                       => 'AppName',
        'appSource'                     => 'AppSource',
        'associateEip'                  => 'AssociateEip',
        'autoConfig'                    => 'AutoConfig',
        'command'                       => 'Command',
        'commandArgs'                   => 'CommandArgs',
        'configMapMountDesc'            => 'ConfigMapMountDesc',
        'cpu'                           => 'Cpu',
        'customHostAlias'               => 'CustomHostAlias',
        'deploy'                        => 'Deploy',
        'edasContainerVersion'          => 'EdasContainerVersion',
        'enableEbpf'                    => 'EnableEbpf',
        'envs'                          => 'Envs',
        'imagePullSecrets'              => 'ImagePullSecrets',
        'imageUrl'                      => 'ImageUrl',
        'jarStartArgs'                  => 'JarStartArgs',
        'jarStartOptions'               => 'JarStartOptions',
        'jdk'                           => 'Jdk',
        'kafkaConfigs'                  => 'KafkaConfigs',
        'liveness'                      => 'Liveness',
        'memory'                        => 'Memory',
        'microRegistration'             => 'MicroRegistration',
        'mountDesc'                     => 'MountDesc',
        'mountHost'                     => 'MountHost',
        'namespaceId'                   => 'NamespaceId',
        'nasConfigs'                    => 'NasConfigs',
        'nasId'                         => 'NasId',
        'ossAkId'                       => 'OssAkId',
        'ossAkSecret'                   => 'OssAkSecret',
        'ossMountDescs'                 => 'OssMountDescs',
        'packageType'                   => 'PackageType',
        'packageUrl'                    => 'PackageUrl',
        'packageVersion'                => 'PackageVersion',
        'php'                           => 'Php',
        'phpArmsConfigLocation'         => 'PhpArmsConfigLocation',
        'phpConfig'                     => 'PhpConfig',
        'phpConfigLocation'             => 'PhpConfigLocation',
        'postStart'                     => 'PostStart',
        'preStop'                       => 'PreStop',
        'programmingLanguage'           => 'ProgrammingLanguage',
        'pvtzDiscoverySvc'              => 'PvtzDiscoverySvc',
        'python'                        => 'Python',
        'pythonModules'                 => 'PythonModules',
        'readiness'                     => 'Readiness',
        'replicas'                      => 'Replicas',
        'saeVersion'                    => 'SaeVersion',
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
        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
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
        if (null !== $this->enableEbpf) {
            $res['EnableEbpf'] = $this->enableEbpf;
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
        if (null !== $this->saeVersion) {
            $res['SaeVersion'] = $this->saeVersion;
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
        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
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
        if (isset($map['EnableEbpf'])) {
            $model->enableEbpf = $map['EnableEbpf'];
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
        if (isset($map['SaeVersion'])) {
            $model->saeVersion = $map['SaeVersion'];
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
