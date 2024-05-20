<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is used to pull images across accounts. For more information, see [Grant permissions across Alibaba Cloud accounts by using a RAM role](https://help.aliyun.com/document_detail/223585.html).
     *
     * @example acs:ram::123456789012****:role/adminrole
     *
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @description The ID of Container Registry Enterprise Edition instance N. This parameter is required when the **ImageUrl** parameter is set to the URL of an image in an ACR Enterprise Edition instance.
     *
     * @example cri-xxxxxx
     *
     * @var string
     */
    public $acrInstanceId;

    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of times the job is retried.
     *
     * @example 3
     *
     * @var int
     */
    public $backoffLimit;

    /**
     * @description The command that is used to start the image. The command must be an existing executable object in the container. Example:
     *
     * In this example, the Command parameter is set to `Command="echo", CommandArgs=["abc", ">", "file0"]`.
     * @example echo
     *
     * @var string
     */
    public $command;

    /**
     * @description The parameters of the image startup command. The CommandArgs parameter specifies the parameters that are required for the **Command** parameter. The name must meet the following format requirements:
     *
     * In the preceding example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. This parameter is optional.
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The concurrency policy of the job. Valid values:
     *
     *   **Forbid**: Prohibits concurrent running. If the previous job is not completed, no new job is created.
     *   **Allow**: Allows concurrent running.
     *   **Replace**: If the previous job is not completed when the time to create a new job is reached, the new job replaces the previous job.
     *
     * @example Allow
     *
     * @var string
     */
    public $concurrencyPolicy;

    /**
     * @description The description of the **ConfigMap** instance mounted to the application. Use configurations created on the Configuration Items page to configure containers. The following parameters are involved:
     *
     *   **congfigMapId**: the ID of the ConfigMap instance. You can call the [ListNamespacedConfigMaps](https://help.aliyun.com/document_detail/176917.html) operation to obtain the ID.
     *   **key**: the key.
     *
     * > You can use the `sae-sys-configmap-all` key to mount all keys.
     *
     *   **mountPath**: the mount path.
     *
     * @example [{"configMapId":16,"key":"test","mountPath":"/tmp"}]
     *
     * @var string
     */
    public $configMapMountDesc;

    /**
     * @description The custom mappings between hostnames and IP addresses in the container. Valid values:
     *
     *   **hostName**: the domain name or hostname.
     *   **ip**: the IP address.
     *
     * @example [{"hostName":"samplehost","ip":"127.0.0.1"}]
     *
     * @var string
     */
    public $customHostAlias;

    /**
     * @description The version of the container, such as Ali-Tomcat, in which an application developed based on High-speed Service Framework (HSF) is deployed.
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var bool
     */
    public $enableImageAccl;

    /**
     * @description The environment variables. You can configure custom environment variables or reference a ConfigMap. If you want to reference a ConfigMap, you must first create a ConfigMap. For more information, see [CreateConfigMap](https://help.aliyun.com/document_detail/176914.html). Valid values:
     *
     *   Configure custom environment variables
     *
     *   **name**: the name of the environment variable.
     *   **value**: the value of the environment variable.
     *
     *   Reference ConfigMap
     *
     *   **name**: the name of the environment variable. You can reference one or all keys. If you want to reference all keys, specify `sae-sys-configmap-all-<ConfigMap name>`. Example: `sae-sys-configmap-all-test1`.
     *   **valueFrom**: the reference of the environment variable. Set the value to `configMapRef`.
     *   **configMapId**: the ConfigMap ID.
     *   **key**: the key. If you want to reference all keys, do not configure this parameter.
     *
     * @example [{"name":"envtmp","value":"0"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The ID of the corresponding Secret.
     *
     * @example 10
     *
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @description The URL of the image. This parameter is returned only if the **PackageType** parameter is set to **Image**.
     *
     * @example registry.cn-hangzhou.aliyuncs.com/sae_test/ali_sae_test:0.0.1
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The arguments in the JAR package. The arguments are used to start the application container. The default startup command is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example -Xms4G -Xmx4G
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @description The option settings in the JAR package. The settings are used to start the application container. The default startup command for application deployment is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example custom-option
     *
     * @var string
     */
    public $jarStartOptions;

    /**
     * @description The version of the Java development kit (JDK) on which the deployment package of the application depends. The following versions are supported:
     *
     *   **Open JDK 8**
     *   **Open JDK 7**
     *   **Dragonwell 11**
     *   **Dragonwell 8**
     *   **openjdk-8u191-jdk-alpine3.9**
     *   **openjdk-7u201-jdk-alpine3.9**
     *
     * This parameter is not returned if the **PackageType** parameter is set to **Image**.
     * @example Open JDK 8
     *
     * @var string
     */
    public $jdk;

    /**
     * @description The configurations for mounting the NAS file system. If you do not need to modify the NAS configurations when you deploy the application, configure **MountDesc** only in the first request. If you no longer need to use NAS, leave **MountDesc** empty in the request.
     *
     * @example [{mountPath: "/tmp", nasPath: "/"}]
     *
     * @var string
     */
    public $mountDesc;

    /**
     * @description The mount target of the NAS file system in the VPC where the application is deployed. If you do not need to modify this configuration during the deployment, configure the **MountHost** parameter only in the first request. You do not need to include this parameter in subsequent requests. If you need to remove this configuration, leave the **MountHost** parameter empty in the request.
     *
     * @example 10d3b4bc9****.com
     *
     * @var string
     */
    public $mountHost;

    /**
     * @description The ID of the Apsara File Storage NAS file system. If you do not need to modify the NAS configurations when you deploy the application, configure **NasId** only in the first request. If you no longer need to use NAS, leave **NasId** empty in the request.
     *
     * @example 10d3b4****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description The AccessKey ID that is used to read data from and write data to OSS.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkId;

    /**
     * @description The AccessKey secret that is used to read data from and write data to OSS.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkSecret;

    /**
     * @description The information about the mounted Object Storage Service (OSS) bucket. The following parameters are involved:
     *
     *   **bucketName**: the name of the OSS bucket.
     *
     *   **bucketPath**: the directory or object in OSS. If the specified directory or object does not exist, an error is returned.
     *
     *   **mountPath**: the directory of the container in SAE. If the path already exists, the newly specified path overwrites the previous one. If the path does not exist, it is created.
     *
     *   **readOnly**: specifies whether to only allow the container path to read data from the OSS directory. Valid values:
     *
     *   **true**: The container path only has read permission on the OSS directory.
     *   **false**: The application has read and write permissions.
     *
     * @example [{"bucketName": "oss-bucket", "bucketPath": "data/user.data", "mountPath": "/usr/data/user.data", "readOnly": true}]
     *
     * @var string
     */
    public $ossMountDescs;

    /**
     * @description The address of the deployment package. This parameter is required if you set **PackageType** to **FatJar**, **War**, or **PythonZip**.
     *
     * @example http://myoss.oss-cn-hangzhou.aliyuncs.com/my-buc/2019-06-30/****.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required if you set **PackageType** to **FatJar**, **War**, or **PythonZip**.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The ID of Container Registry Enterprise Edition instance N.
     *
     * @example cri-xxxxxx
     *
     * @var string
     */
    public $php;

    /**
     * @description The details of the PHP configuration file.
     *
     * @example k1=v1
     *
     * @var string
     */
    public $phpConfig;

    /**
     * @description The path on which the PHP configuration file for application startup is mounted. Make sure that the PHP server uses this configuration file during the startup.
     *
     * @example /usr/local/etc/php/php.ini
     *
     * @var string
     */
    public $phpConfigLocation;

    /**
     * @description The script to be run after the container is started. Example: `{"exec":{"command":["sh","-c","echo hello"\\]}}`
     *
     * @example {"exec":{"command":["sh","-c","echo hello"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The script that is run before the container is stopped. Example: `{"exec":{"command":["sh","-c","echo hello"\\]}}`
     *
     * @example {"exec":{"command":["sh","-c","echo hello"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The programming language. Valid values: **java**, **php**, **python**, and **shell**.
     *
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @description The Python environment. Set the value to **PYTHON 3.9.15**.
     *
     * @example PYTHON 3.9.15
     *
     * @var string
     */
    public $python;

    /**
     * @description The configurations for installing custom module dependencies. By default, the dependencies defined by the requirements.txt file in the root directory are installed. If the package does not contain this file and you do not configure custom dependencies in the package, specify the dependencies that you want to install in the text box.
     *
     * @example Flask==2.0
     *
     * @var string
     */
    public $pythonModules;

    /**
     * @description The ID of the job that you reference.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $refAppId;

    /**
     * @description The number of concurrent instances.
     *
     * @example 3
     *
     * @var string
     */
    public $replicas;

    /**
     * @description Specifies whether to enable job sharding.
     *
     * @example true
     *
     * @var bool
     */
    public $slice;

    /**
     * @description The parameters of job sharding.
     *
     * @example [0,1,2]
     *
     * @var string
     */
    public $sliceEnvs;

    /**
     * @description The configurations of Log Service.
     *
     *   To use Log Service resources that are automatically created by SAE, set this parameter to `[{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]`.
     *   To use custom Log Service resources, set this parameter to `[{"projectName":"test-sls","logType":"stdout","logDir":"","logstoreName":"sae","logtailName":""},{"projectName":"test","logDir":"/tmp/a.log","logstoreName":"sae","logtailName":""}]`.
     *
     * The following parameters are involved:
     *
     *   **projectName**: the name of the Log Service project.
     *   **logDir**: the path in which logs are stored.
     *   **logType**: the log type. **stdout**: the standard output log of the container. You can specify only one stdout value for this parameter. If you leave this parameter empty, file logs are collected.
     *   **logstoreName**: the name of the Logstore in Log Service.
     *   **logtailName**: the name of the Logtail configuration in Log Service. If you do not configure this parameter, a new Logtail configuration is created.
     *
     * If you do not need to modify the logging configurations when you deploy the application, configure the **SlsConfigs** parameter only in the first request. You do not need to include this parameter in subsequent requests. If you no longer need to use Log Service, leave the **SlsConfigs** parameter empty in the request.
     *
     * > A Log Service project that is automatically created by SAE when you create an application is deleted when the application is deleted. Therefore, when you create an application, you cannot select a Log Service project that is automatically created by SAE for log collection.
     * @example [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @description The timeout period for a graceful shutdown. Default value: 30. Unit: seconds. Valid values: 1 to 300.
     *
     * @example 10
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description The timeout period. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The time zone. Default value: **Asia/Shanghai**.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The Tomcat configuration. If you want to delete the configuration, set this parameter to {} or leave this parameter empty. Valid values:
     *
     *   **port**: the port number. The port number ranges from 1024 to 65535. Though the admin permissions are configured for the container, the root permissions are required to perform operations on ports whose number is smaller than 1024. Enter a value that ranges from 1025 to 65535 because the container has only the admin permissions. If you do not specify this parameter, the default port number 8080 is used.
     *   **contextPath**: the path. Default value: /. This value indicates the root directory.
     *   **maxThreads**: the maximum number of connections in the connection pool. Default value: 400.
     *   **uriEncoding**: the URI encoding scheme in the Tomcat container. Valid values: **UTF-8**, **ISO-8859-1**, **GBK**, and GB2312. If you do not specify this parameter, the default value **ISO-8859-1** is used.
     *   **useBodyEncoding**: specifies whether to use the encoding scheme that is specified by **BodyEncoding for URL**. Default value: **true**.
     *
     * @example {"port":8080,"contextPath":"/","maxThreads":400,"uriEncoding":"ISO-8859-1","useBodyEncodingForUri":true}
     *
     * @var string
     */
    public $tomcatConfig;

    /**
     * @example {"type":"time","config":"0 1 *\/1 * ?","timezone":"GMT+8:00"}
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @description The startup command of the WAR package. For information about how to configure the startup command, see [Configure startup commands](https://help.aliyun.com/document_detail/96677.html).
     *
     * @example CATALINA_OPTS=\\"$CATALINA_OPTS $Options\\" catalina.sh run
     *
     * @var string
     */
    public $warStartOptions;

    /**
     * @description The version of the Tomcat container on which the deployment package depends. The following versions are supported:
     *
     *   **apache-tomcat-7.0.91**
     *   **apache-tomcat-8.5.42**
     *
     * This parameter is not returned if the **PackageType** parameter is set to **Image**.
     * @example apache-tomcat-7.0.91
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn'              => 'AcrAssumeRoleArn',
        'acrInstanceId'                 => 'AcrInstanceId',
        'appId'                         => 'AppId',
        'backoffLimit'                  => 'BackoffLimit',
        'command'                       => 'Command',
        'commandArgs'                   => 'CommandArgs',
        'concurrencyPolicy'             => 'ConcurrencyPolicy',
        'configMapMountDesc'            => 'ConfigMapMountDesc',
        'customHostAlias'               => 'CustomHostAlias',
        'edasContainerVersion'          => 'EdasContainerVersion',
        'enableImageAccl'               => 'EnableImageAccl',
        'envs'                          => 'Envs',
        'imagePullSecrets'              => 'ImagePullSecrets',
        'imageUrl'                      => 'ImageUrl',
        'jarStartArgs'                  => 'JarStartArgs',
        'jarStartOptions'               => 'JarStartOptions',
        'jdk'                           => 'Jdk',
        'mountDesc'                     => 'MountDesc',
        'mountHost'                     => 'MountHost',
        'nasId'                         => 'NasId',
        'ossAkId'                       => 'OssAkId',
        'ossAkSecret'                   => 'OssAkSecret',
        'ossMountDescs'                 => 'OssMountDescs',
        'packageUrl'                    => 'PackageUrl',
        'packageVersion'                => 'PackageVersion',
        'php'                           => 'Php',
        'phpConfig'                     => 'PhpConfig',
        'phpConfigLocation'             => 'PhpConfigLocation',
        'postStart'                     => 'PostStart',
        'preStop'                       => 'PreStop',
        'programmingLanguage'           => 'ProgrammingLanguage',
        'python'                        => 'Python',
        'pythonModules'                 => 'PythonModules',
        'refAppId'                      => 'RefAppId',
        'replicas'                      => 'Replicas',
        'slice'                         => 'Slice',
        'sliceEnvs'                     => 'SliceEnvs',
        'slsConfigs'                    => 'SlsConfigs',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timeout'                       => 'Timeout',
        'timezone'                      => 'Timezone',
        'tomcatConfig'                  => 'TomcatConfig',
        'triggerConfig'                 => 'TriggerConfig',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
            $res['ConfigMapMountDesc'] = $this->configMapMountDesc;
        }
        if (null !== $this->customHostAlias) {
            $res['CustomHostAlias'] = $this->customHostAlias;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->enableImageAccl) {
            $res['EnableImageAccl'] = $this->enableImageAccl;
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
        if (null !== $this->php) {
            $res['Php'] = $this->php;
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
        if (null !== $this->python) {
            $res['Python'] = $this->python;
        }
        if (null !== $this->pythonModules) {
            $res['PythonModules'] = $this->pythonModules;
        }
        if (null !== $this->refAppId) {
            $res['RefAppId'] = $this->refAppId;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
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
     * @return UpdateJobRequest
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
            $model->configMapMountDesc = $map['ConfigMapMountDesc'];
        }
        if (isset($map['CustomHostAlias'])) {
            $model->customHostAlias = $map['CustomHostAlias'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EnableImageAccl'])) {
            $model->enableImageAccl = $map['EnableImageAccl'];
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
        if (isset($map['Php'])) {
            $model->php = $map['Php'];
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
        if (isset($map['Python'])) {
            $model->python = $map['Python'];
        }
        if (isset($map['PythonModules'])) {
            $model->pythonModules = $map['PythonModules'];
        }
        if (isset($map['RefAppId'])) {
            $model->refAppId = $map['RefAppId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
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
        if (isset($map['WarStartOptions'])) {
            $model->warStartOptions = $map['WarStartOptions'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
