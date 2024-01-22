<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\mountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\ossMountDescs;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is used to pull images across accounts. For more information, see [Pull images across Alibaba Cloud accounts](~~190675~~) and [Grant permissions across Alibaba Cloud accounts by using a RAM role](~~223585~~).
     *
     * @example acs:ram::123456789012****:role/adminrole
     *
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @description The ID of the Container Registry Enterprise Edition instance.
     *
     * @example cri-xxxxxx
     *
     * @var string
     */
    public $acrInstanceId;

    /**
     * @description The description of the application.
     *
     * @example Sample application
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The application ID.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The number of times that the job was retried.
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
     * @description The arguments of the image startup command. This parameter contains the arguments that are required for **Command**. Format:
     *
     * `["a","b"]`
     *
     * In the preceding **Command** example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. If this parameter does not exist in the Command parameter, you do not need to configure it.
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The concurrency policy of the job. Valid values:
     *
     *   **Forbid**: Concurrent running is prohibited. If the previous job is not completed, no new job is created.
     *   **Allow**: Concurrent running is allowed.
     *   **Replace**: If the previous job is not completed when the time to create a new job is reached, the new job replaces the previous job.
     *
     * @example Allow
     *
     * @var string
     */
    public $concurrencyPolicy;

    /**
     * @description The details of the ConfigMap.
     *
     * @var configMapMountDesc[]
     */
    public $configMapMountDesc;

    /**
     * @description The CPU specifications required for each instance. Unit: millicore. This parameter cannot be set to 0. Valid values:
     *
     *   **500**
     *   **1000**
     *   **2000**
     *   **4000**
     *   **8000**
     *   **16000**
     *   **32000**
     *
     * @example 1000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The custom mapping between the hostname and IP address in the container. Valid values:
     *
     *   **hostName**: the domain name or hostname.
     *   **ip**: the IP address.
     *
     * @example [{"hostName":"test.host.name","ip":"0.0.0.0"}]
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
     * @description The environment variables. You can configure custom environment variables or reference a ConfigMap. If you want to reference a ConfigMap, you must first create a ConfigMap. For more information, see [CreateConfigMap](~~176914~~). Valid values:
     *
     *   Custom configuration
     *
     *   **name**: the name of the environment variable.
     *   **value**: the value of the environment variable.
     *
     *   Reference a ConfigMap
     *
     *   **name**: the name of the environment variable. You can reference one or all keys. To reference all keys, specify `sae-sys-configmap-all-<ConfigMap name>`. Example: `sae-sys-configmap-all-test1`.
     *   **valueFrom**: the reference of the environment variable. Set the value to `configMapRef`.
     *   **configMapId**: the ID of the ConfigMap.
     *   **key**: the key. If you want to reference all keys, you do not need to configure this parameter.
     *
     * @example [{"name":"TEST_ENV_KEY","value":"TEST_ENV_VAR"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The ID of the corresponding secret.
     *
     * @example 10
     *
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @description The URL of the image. This parameter is returned only if **PackageType** is set to **Image**.
     *
     * @example docker.io/library/nginx:1.14.2
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The arguments in the JAR package. The arguments are used to start the application container. The default startup command is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example start
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @description The option settings in the JAR package. The settings are used to start the application container. The default startup command is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example -Dtest=true
     *
     * @var string
     */
    public $jarStartOptions;

    /**
     * @description The version of the Java Development Kit (JDK) on which the deployment package of the application depends. The following versions are supported:
     *
     *   **Open JDK 8**
     *   **Open JDK 7**
     *   **Dragonwell 11**
     *   **Dragonwell 8**
     *   **openjdk-8u191-jdk-alpine3.9**
     *   **openjdk-7u201-jdk-alpine3.9**
     *
     * This parameter is not returned if **PackageType** is set to **Image**.
     * @example Open JDK 8
     *
     * @var string
     */
    public $jdk;

    /**
     * @description The size of memory that is required by each instance. Unit: MB. This parameter cannot be set to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 2000.
     *   This parameter is set to **4096** if the Cpu parameter is set to 1000, 2000, or 4000.
     *   This parameter is set to **8192** if the Cpu parameter is set to 2000, 4000, or 8000.
     *   This parameter is set to **12288** if the Cpu parameter is set to 12000.
     *   This parameter is set to **16384** if the Cpu parameter is set to 4000, 8000, or 16000.
     *   This parameter is set to **24567** if the Cpu parameter is set to 12000.
     *   This parameter is set to **32768** if the Cpu parameter is set to 16000.
     *   This parameter is set to **65536** if the Cpu parameter is set to 8000, 16000, or 32000.
     *   This parameter is set to **131072** if the Cpu parameter is set to 32000.
     *
     * @example 2048
     *
     * @var int
     */
    public $memory;

    /**
     * @description The details of the mounted NAS file system.
     *
     * @var mountDesc[]
     */
    public $mountDesc;

    /**
     * @description The mount target of the NAS file system in the VPC in which the application is deployed. If you do not need to modify this configuration during the deployment, configure **MountHost** only in the first request. If you need to remove this configuration, leave **MountHost** empty in the request.
     *
     * @example example.com
     *
     * @var string
     */
    public $mountHost;

    /**
     * @description The namespace ID.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The configurations for mounting the NAS file system.
     *
     * @example [{"mountPath":"/test1","readOnly":false,"nasId":"nasId1","mountDomain":"nasId1.cn-shenzhen.nas.aliyuncs.com","nasPath":"/test1"},{"nasId":"nasId2","mountDomain":"nasId2.cn-shenzhen.nas.aliyuncs.com","readOnly":false,"nasPath":"/test2","mountPath":"/test2"}]
     *
     * @var string
     */
    public $nasConfigs;

    /**
     * @description The ID of the NAS file system.
     *
     * @example AKSN89**
     *
     * @var string
     */
    public $nasId;

    /**
     * @description The AccessKey ID that is used to read data from and write data to Object Storage Service (OSS).
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
     * @description The description of mounted OSS buckets.
     *
     * @var ossMountDescs[]
     */
    public $ossMountDescs;

    /**
     * @description The type of the deployment package. Valid values:
     *
     *   If you deploy the application by using a Java Archive (JAR) package, this parameter is set to **FatJar**, **War**, or **Image**.
     *
     *   If you deploy the application by using a PHP package, this parameter is set to one of the following values:
     *
     *   **PhpZip**
     *   **IMAGE_PHP\_5\_4**
     *   **IMAGE_PHP\_5\_4\_ALPINE**
     *   **IMAGE_PHP\_5\_5**
     *   **IMAGE_PHP\_5\_5\_ALPINE**
     *   **IMAGE_PHP\_5\_6**
     *   **IMAGE_PHP\_5\_6\_ALPINE**
     *   **IMAGE_PHP\_7\_0**
     *   **IMAGE_PHP\_7\_0\_ALPINE**
     *   **IMAGE_PHP\_7\_1**
     *   **IMAGE_PHP\_7\_1\_ALPINE**
     *   **IMAGE_PHP\_7\_2**
     *   **IMAGE_PHP\_7\_2\_ALPINE**
     *   **IMAGE_PHP\_7\_3**
     *   **IMAGE_PHP\_7\_3\_ALPINE**
     *
     *   If you deploy the application by using a Pythhon package, this parameter is set to **PythonZip** or **Image**.
     *
     * @example War
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The URL of the deployment package. This parameter is returned only if **PackageType** is set to **FatJar** or **War**.
     *
     * @example https://edas-bj.oss-cn-beijing.aliyuncs.com/apps/K8s_APP_ID/d4c97c37-aba3-403e-ae1e-6f7d8742****\/hello-sae.war
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required only if **PackageType** is set to **FatJar** or **War**.
     *
     * @example 1.0
     *
     * @var string
     */
    public $packageVersion;

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
     * @description The script that is run immediately after the container is started. Example: `{"exec":{"command":\["cat","/etc/group"\]}}`
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The script that is run before the container is stopped. Example: `{"exec":{"command":\["cat","/etc/group"\]}}`
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The programming language that is used to create the application. Valid values:
     *
     *   **java**: Java
     *   **php**: PHP
     *   **python**: Python
     *   **other**: other programming languages, such as C++, Go, .NET, and Node.js.
     *
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @description The Internet request URLs of one-time jobs.
     *
     * @var string[]
     */
    public $publicWebHookUrls;

    /**
     * @description The Python environment. PYTHON 3.9.15 is supported.
     *
     * @example PYTHON 3.9.15
     *
     * @var string
     */
    public $python;

    /**
     * @description The configurations for installing custom module dependencies. By default, the dependencies defined by the requirements.txt file in the root directory are installed. If no software package is configured, you can specify dependencies based on your business requirements.
     *
     * @example Flask==2.0
     *
     * @var string
     */
    public $pythonModules;

    /**
     * @description The ID of the job template that you reference.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $refAppId;

    /**
     * @description The IDs of the referenced job templates.
     *
     * @var string[]
     */
    public $refedAppIds;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of application instances.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The ID of the security group.
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Indicates whether job sharding is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $slice;

    /**
     * @description The parameters of job sharding.
     *
     * @example SliceEnvs
     *
     * @var string
     */
    public $sliceEnvs;

    /**
     * @description The logging configurations of Log Service.
     *
     *   To use Log Service resources that are automatically created by SAE, set this parameter to `[{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]`.
     *   To use custom Log Service resources, set this parameter to `[{"projectName":"test-sls","logType":"stdout","logDir":"","logstoreName":"sae","logtailName":""},{"projectName":"test","logDir":"/tmp/a.log","logstoreName":"sae","logtailName":""}]`.
     *
     * Parameter description:
     *
     *   **projectName**: the name of the Log Service project.
     *   **logDir**: the path in which logs are stored.
     *   **logType**: the log type. **stdout**: the standard output (stdout) log of the container. Only one stdout value for this parameter can be specified. If this parameter is not configured, file logs are collected.
     *   **logstoreName**: the name of the Logstore in Log Service.
     *   **logtailName**: the name of the Logtail in Log Service. If this parameter is not configured, a new Logtail is created.
     *
     * If you do not need to modify the logging configurations when you deploy the application, configure **SlsConfigs** only in the first request. If you no longer need to use Log Service, leave **SlsConfigs** empty in the request.
     * @example [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @description Indicates whether the job template is suspended.
     *
     * @example false
     *
     * @var bool
     */
    public $suspend;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The timeout period for a graceful shutdown. Default value: 30. Unit: seconds. Valid values: 1 to 300.
     *
     * @example 10
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description The timeout period for the job. Unit: seconds.
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
     * @description The Tomcat configuration. If you want to delete the configuration, set this parameter to {} or leave this parameter empty. Parameter description:
     *
     *   **port**: the port number. Valid values: 1024 to 65535. The root permissions are required to perform operations on ports whose number is smaller than 1024. Enter a value that ranges from 1025 to 65535 because the container has only the admin permissions. If this parameter is not configured, the default value 8080 is used.
     *   **contextPath**: the path. Default value: /. The value indicates the root directory.
     *   **maxThreads**: the maximum number of connections in the connection pool. Default value: 400.
     *   **uriEncoding**: the URI encoding scheme in the Tomcat container. Valid values: **UTF-8**, **ISO-8859-1**, **GBK**, and **GB2312**. If this parameter is not configured, the default value **ISO-8859-1** is used.
     *   **useBodyEncoding**: indicates whether to use the encoding scheme that is specified by **BodyEncoding for URL**. Default value: **true**.
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
     * @description The vSwitch ID.
     *
     * @example vsw-2ze559r1z1bpwqxwp****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The internal request URLs for one-time jobs.
     *
     * @var string[]
     */
    public $vpcWebHookUrls;

    /**
     * @description The option settings in the WAR package. The settings are used to start the application container. The default startup command is `java $JAVA_OPTS $CATALINA_OPTS -Options org.apache.catalina.startup.Bootstrap "$@" start`.
     *
     * @example custom-option
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
     * This parameter is not returned if **PackageType** is set to **Image**.
     * @example apache-tomcat-7.0.91
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn'              => 'AcrAssumeRoleArn',
        'acrInstanceId'                 => 'AcrInstanceId',
        'appDescription'                => 'AppDescription',
        'appId'                         => 'AppId',
        'appName'                       => 'AppName',
        'backoffLimit'                  => 'BackoffLimit',
        'command'                       => 'Command',
        'commandArgs'                   => 'CommandArgs',
        'concurrencyPolicy'             => 'ConcurrencyPolicy',
        'configMapMountDesc'            => 'ConfigMapMountDesc',
        'cpu'                           => 'Cpu',
        'customHostAlias'               => 'CustomHostAlias',
        'edasContainerVersion'          => 'EdasContainerVersion',
        'envs'                          => 'Envs',
        'imagePullSecrets'              => 'ImagePullSecrets',
        'imageUrl'                      => 'ImageUrl',
        'jarStartArgs'                  => 'JarStartArgs',
        'jarStartOptions'               => 'JarStartOptions',
        'jdk'                           => 'Jdk',
        'memory'                        => 'Memory',
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
        'phpConfig'                     => 'PhpConfig',
        'phpConfigLocation'             => 'PhpConfigLocation',
        'postStart'                     => 'PostStart',
        'preStop'                       => 'PreStop',
        'programmingLanguage'           => 'ProgrammingLanguage',
        'publicWebHookUrls'             => 'PublicWebHookUrls',
        'python'                        => 'Python',
        'pythonModules'                 => 'PythonModules',
        'refAppId'                      => 'RefAppId',
        'refedAppIds'                   => 'RefedAppIds',
        'regionId'                      => 'RegionId',
        'replicas'                      => 'Replicas',
        'securityGroupId'               => 'SecurityGroupId',
        'slice'                         => 'Slice',
        'sliceEnvs'                     => 'SliceEnvs',
        'slsConfigs'                    => 'SlsConfigs',
        'suspend'                       => 'Suspend',
        'tags'                          => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timeout'                       => 'Timeout',
        'timezone'                      => 'Timezone',
        'tomcatConfig'                  => 'TomcatConfig',
        'triggerConfig'                 => 'TriggerConfig',
        'vSwitchId'                     => 'VSwitchId',
        'vpcId'                         => 'VpcId',
        'vpcWebHookUrls'                => 'VpcWebHookUrls',
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
            $res['ConfigMapMountDesc'] = [];
            if (null !== $this->configMapMountDesc && \is_array($this->configMapMountDesc)) {
                $n = 0;
                foreach ($this->configMapMountDesc as $item) {
                    $res['ConfigMapMountDesc'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['MountDesc'] = [];
            if (null !== $this->mountDesc && \is_array($this->mountDesc)) {
                $n = 0;
                foreach ($this->mountDesc as $item) {
                    $res['MountDesc'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['OssMountDescs'] = [];
            if (null !== $this->ossMountDescs && \is_array($this->ossMountDescs)) {
                $n = 0;
                foreach ($this->ossMountDescs as $item) {
                    $res['OssMountDescs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['PublicWebHookUrls'] = $this->publicWebHookUrls;
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
            $res['RefedAppIds'] = $this->refedAppIds;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['VpcWebHookUrls'] = $this->vpcWebHookUrls;
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
     * @return data
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
                $n                         = 0;
                foreach ($map['ConfigMapMountDesc'] as $item) {
                    $model->configMapMountDesc[$n++] = null !== $item ? configMapMountDesc::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['MountDesc'] as $item) {
                    $model->mountDesc[$n++] = null !== $item ? mountDesc::fromMap($item) : $item;
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
                $n                    = 0;
                foreach ($map['OssMountDescs'] as $item) {
                    $model->ossMountDescs[$n++] = null !== $item ? ossMountDescs::fromMap($item) : $item;
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
                $model->publicWebHookUrls = $map['PublicWebHookUrls'];
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
                $model->refedAppIds = $map['RefedAppIds'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
                $model->vpcWebHookUrls = $map['VpcWebHookUrls'];
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
