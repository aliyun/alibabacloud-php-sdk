<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) required for a RAM role to obtain images across accounts. For more information, see [Grant permissions across Alibaba Cloud accounts by using a RAM role](~~223585~~).
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
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to associate an EIP with the node pool. Take note of the following rules:
     *
     *   **true**: The EIP is associated with the application instance.
     *   **false**: The EIP is not associated with the application instance.
     *
     * @example true
     *
     * @var bool
     */
    public $associateEip;

    /**
     * @description Specifies whether to automatically enable an auto scaling policy for the application. Take note of the following rules:
     *
     *   **true**: turns on Logon-free Sharing
     *   **false**: turns off Logon-free Sharing
     *
     * @example true
     *
     * @var bool
     */
    public $autoEnableApplicationScalingRule;

    /**
     * @description The interval between batches during a batch release. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The description of the change order.
     *
     * @example Start the application
     *
     * @var string
     */
    public $changeOrderDesc;

    /**
     * @description The command that is used to start the image. The command must be an existing executable object in the container. Sample statements:
     *
     * In this example, the Command parameter is set to `Command="echo", CommandArgs=["abc", ">", "file0"]`.
     * @example echo
     *
     * @var string
     */
    public $command;

    /**
     * @description The parameters of the image startup command. The CommandArgs parameter specifies the parameters that are required for the **Command** parameter. You can specify the name in one of the following formats:
     *
     * In the preceding example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. This parameter is optional.
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The description of the **ConfigMap** instance mounted to the application. Use configurations created on the Configuration Items page to configure containers. The following table describes the parameters that are used in the preceding statements.
     *
     *   **congfigMapId**: the ID of the ConfigMap instance. You can call the [ListNamespacedConfigMaps](~~176917~~) operation to obtain the ID.
     *   **key**: the key.
     *
     * > You can use `sae-sys-configmap-all` to mount all keys.
     *
     *   **mountPath**: the mount path in the container.
     *
     * @example [{"configMapId":16,"key":"test","mountPath":"/tmp"}]
     *
     * @var string
     */
    public $configMapMountDesc;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @description The custom mappings between hostnames and IP addresses in the container. Take note of the following rules:
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
     * @description This parameter takes effect only for applications that are in the Stopped state. If you call the **DeployApplication** operation to manage a running application, the application is immediately redeployed.
     *
     *   **true** (default): specifies that the system immediately deploys the application, enables new configurations, and pulls application instances.
     *   **false**: specifies that the system only enables the new configurations.
     *
     * @example true
     *
     * @var string
     */
    public $deploy;

    /**
     * @description The version of the container, such as Ali-Tomcat, in which an application developed based on High-speed Service Framework (HSF) is deployed.
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description Indicates whether access to Application High Availability Service (AHAS) is enabled. Take note of the following rules:
     *
     *   **true**: Access to AHAS is enabled.
     *   **false**: Access to AHAS is disabled.
     *
     * @example false
     *
     * @var string
     */
    public $enableAhas;

    /**
     * @description Indicates whether canary release rules are enabled. Canary release rules apply only to applications in Spring Cloud and Dubbo frameworks. Take note of the following rules:
     *
     *   **true**: The canary release rules are enabled.
     *   **false**: The canary release rules are disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableGreyTagRoute;

    /**
     * @description The environment variables. You can configure custom environment variables or reference a ConfigMap. If you want to reference a ConfigMap, you must first create a ConfigMap. For more information, see [CreateConfigMap](~~176914~~). Take note of the following rules:
     *
     *   Customize
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
     * @description The logging configurations of Message Queue for Apache Kafka. Take note of the following rules:
     *
     *   **kafkaEndpoint**: the endpoint of the Message Queue for Apache Kafka API.
     *   **kafkaInstanceId**: the ID of the Message Queue for Apache Kafka instance.
     *   **kafkaConfigs**: One or more logging configurations of Message Queue for Apache Kafka. For information about sample values and parameters, see the request parameter **KafkaLogfileConfig** in this topic.
     *
     * @example {"kafkaEndpoint":"10.0.X.XXX:XXXX,10.0.X.XXX:XXXX,10.0.X.XXX:XXXX\","kafkaInstanceId":"alikafka_pre-cn-7pp2l8kr****","kafkaConfigs":[{"logType":"file_log","logDir":"/tmp/a.log","kafkaTopic":"test2"},{"logType":"stdout","logDir":"","kafkaTopic":"test"}]}
     *
     * @var string
     */
    public $kafkaConfigs;

    /**
     * @description The details of the availability check that was performed on the container. If the container fails this health check multiple times, the system disables and restarts the container. You can use one of the following methods to perform the health check:
     *
     *   Example of **exec**: `{"exec":{"command":\["sh","-c","cat/home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}`
     *   Sample code of the **httpGet** method: `{"httpGet":{"path":"/","port":18091,"scheme":"HTTP","isContainKeyWord":true,"keyWord":"SAE"},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *   Sample code of the **tcpSocket** method: `{"tcpSocket":{"port":18091},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *
     * The following table describes the parameters that are used in the preceding statements.
     *
     *   **exec.command**: the health check command.
     *   **httpGet.path**: the request path.
     *   **httpGet.scheme**: the protocol that is used to perform the health check. Valid values: **HTTP** and **HTTPS**.
     *   **httpGet.isContainKeyWord**: indicates whether the response contains keywords. Valid values: **true** and **false**. If this field is not returned, the advanced settings are not used.
     *   **httpGet.keyWord**: the custom keyword. This parameter is available only if the **isContainKeyWord** field is returned.
     *   **tcpSocket.port**: the port that is used to check the status of TCP connections.
     *   **initialDelaySeconds**: the delay of the health check. Default value: 10. Unit: seconds.
     *   **periodSeconds**: the interval at which health checks are performed. Default value: 30. Unit: seconds.
     *   **timeoutSeconds**: the timeout period of the health check. Default value: 1. Unit: seconds. If you set this parameter to 0 or leave this parameter empty, the timeout period is automatically set to 1 second.
     *
     * @example {"exec":{"command":["sleep","5s"]},"initialDelaySeconds":10,"timeoutSeconds":11}
     *
     * @var string
     */
    public $liveness;

    /**
     * @var int
     */
    public $memory;

    /**
     * @description The Nacos registry. Valid values:
     *
     *   **0**: SAE built-in Nacos registry
     *   **1**: self-managed Nacos registry
     *   **2** : MSE Nacos registry
     *
     * @example "0"
     *
     * @var string
     */
    public $microRegistration;

    /**
     * @description The percentage of the minimum number of available instances. Take note of the following rules:
     *
     *   If you set the value to **-1**, the minimum number of available instances is not determined based on this parameter. Default value: -1.
     *   If you set the value to a number **from 0 to 100**, the minimum number of available instances is calculated by using the following formula: Current number of instances × (Value of MinReadyInstanceRatio × 100%). The value is the nearest integer rounded up from the calculated result. For example, if the percentage is set to **50**% and five instances are available, the minimum number of available instances is 3.
     *
     * > When both **MinReadyInstance** and **MinReadyInstanceRatio** are specified and **MinReadyInstanceRatio** is set to a number from 0 to 100, the value of **MinReadyInstanceRatio**** takes precedence. For example, if **MinReadyInstances** is set to **5, and **MinReadyInstanceRatio** is set to **50**, the minimum number of available instances is set to the nearest integer rounded up from the calculated result of the following formula: Current number of instances × **50%**.
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @description The minimum number of available instances. Special values:
     *
     *   If you set the value to **0**, business interruptions occur when the application is updated.
     *   If you set the value to \*\*-1\*\*, the minimum number of available instances is automatically set to a system-recommended value. The value is the nearest integer to which the calculated result of the following formula is rounded up: Current number of instances × 25%. For example, if five instances are available, the minimum number of available instances is calculated by using the following formula: 5 × 25% = 1.25. In this case, the minimum number of available instances is 2.
     *
     * > Make sure that at least one instance is available during application deployment and rollback to prevent business interruptions.
     * @example 1
     *
     * @var int
     */
    public $minReadyInstances;

    /**
     * @description The configurations for mounting the NAS file system. After the application is created, you may want to call other operations to manage the application. If you do not want to change the NAS configurations in these subsequent operations, you can omit the **MountDesc** parameter in the requests. If you want to unmount the NAS file system, you must set the **MountDesc** values in the subsequent requests to an empty string ("").
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
     * @description The configurations of mounting the NAS file system. Take note of the following rules:
     *
     *   **mountPath**: the mount path of the container.
     *   **readOnly**: If you set the value to **false**, the application has the read and write permissions.
     *   **nasId**: the ID of the NAS file system.
     *   **mountDomain**: the domain name of the mount target. For more information, see [DescribeMountTargets](~~62626~~).
     *   **nasPath**: the directory in the NAS file system.
     *
     * @example [{"mountPath":"/test1","readOnly":false,"nasId":"nasId1","mountDomain":"nasId1.cn-shenzhen.nas.aliyuncs.com","nasPath":"/test1"},{"nasId":"nasId2","mountDomain":"nasId2.cn-shenzhen.nas.aliyuncs.com","readOnly":false,"nasPath":"/test2","mountPath":"/test2"}]
     *
     * @var string
     */
    public $nasConfigs;

    /**
     * @description The ID of the Apsara File Storage NAS file system. After the application is created, you may want to call other operations to manage the application. If you do not want to change the NAS configurations in these subsequent operations, you can omit the **NasId** parameter in the requests. If you want to unmount the NAS file system, you must set the **NasId** values in the subsequent requests to an empty string ("").
     *
     * @example 10d3b4****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description The AccessKey ID that is used to read data from and write data to Object Storage Service (OSS) buckets.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkId;

    /**
     * @description The AccessKey secret that is used to read data from and write data to OSS buckets.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkSecret;

    /**
     * @description Information of the Object Storage Service (OSS) bucket mounted to the application. The following table describes the parameters that are used in the preceding statements.
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
     * @example FatJar
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The address of the deployment package. This parameter is required when the **PackageType** parameter is set to **FatJar**, **War**, or **PythonZip**.
     *
     * @example http://myoss.oss-cn-hangzhou.aliyuncs.com/my-buc/2019-06-30/****.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required when the **PackageType** parameter is set to **FatJar**, **War**, or **PythonZip**.
     *
     * @example 1.0.1
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
     * @description The path on which the PHP configuration file for application monitoring is mounted. Make sure that the PHP server loads the configuration file. SAE automatically generates the corresponding configuration file. No manual operations are required.
     *
     * @example /usr/local/etc/php/conf.d/arms.ini
     *
     * @var string
     */
    public $phpArmsConfigLocation;

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
     * @description The script that is run immediately after the container is started. Example: `{"exec":{"command":\["sh","-c","echo hello"\]}}`
     *
     * @example {"exec":{"command":["sh","-c","echo hello"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The script that is run before the container is stopped. Example: `{"exec":{"command":\["sh","-c","echo hello"\]}}`
     *
     * @example {"exec":{"command":["sh","-c","echo hello"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The configurations of Kubernetes Service-based service registration and discovery. Take note of the following rules:
     *
     *   **serviceName**: the name of the Alibaba Cloud service. Format: `<Custom content>-<Namespace ID>`. `-<Namespace ID>` is automatically specified based on the namespace in which an application resides and cannot be changed. For example, if you select the default namespace in the China (Beijing) region, `-cn-beijing-default` is automatically specified.
     *   **namespaceId**: the namespace ID.
     *   **portAndProtocol**: the port number and protocol. Valid values of the port number: 1 to 65535. Valid values of the protocol: **TCP** and **UDP**.
     *   **enable**: enables the Kubernetes Service-based registration and discovery feature.
     *
     * @example {"serviceName":"bwm-poc-sc-gateway-cn-beijing-front","namespaceId":"cn-beijing:front","portAndProtocol":{"18012":"TCP"},"enable":true}
     *
     * @var string
     */
    public $pvtzDiscoverySvc;

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
     * @description The details of the health check that was performed on the container. If the container fails this health check multiple times, the system disables and restarts the container. Containers that fail health checks cannot receive traffic from Server Load Balancer (SLB) instances. You can use the **exec**, **httpGet**, or **tcpSocket** method to perform health checks. For more information, see the description of the **Liveness** parameter.
     *
     * > You can use only one method to perform the health check.
     * @example {"exec":{"command":["sleep","6s"]},"initialDelaySeconds":15,"timeoutSeconds":12}
     *
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
     * @description The logging configurations of Log Service.
     *
     *   To use Log Service resources that are automatically created by SAE, set this parameter to `[{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]`.
     *   To use custom Log Service resources, set this parameter to `[{"projectName":"test-sls","logType":"stdout","logDir":"","logstoreName":"sae","logtailName":""},{"projectName":"test","logDir":"/tmp/a.log","logstoreName":"sae","logtailName":""}]`.
     *
     * The following table describes the parameters that are used in the preceding statements.
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
     * @description The time zone. Default value: **Asia/Shanghai**.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The Tomcat configuration. If you want to cancel this configuration, set this parameter to "" or "{}". The following variables are included in the configuration: Take note of the following rules:
     *
     *   **port**: the port number. The port number ranges from 1024 to 65535. Though the admin permissions are configured for the container, the root permissions are required to perform operations on ports whose number is smaller than 1024. Enter a value that ranges from 1025 to 65535 because the container has only the admin permissions. If you do not specify this parameter, the default port number 8080 is used.
     *   **contextPath**: the path. Default value: /. This value indicates the root directory.
     *   **maxThreads**: the maximum number of connections in the connection pool. Default value: 400.
     *   **uriEncoding**: the URI encoding scheme in the Tomcat container. Valid values: UTF-8, ISO-8859-1, GBK, and GB2312.************ If you do not specify this parameter, the default value **ISO-8859-1** is used.
     *   **useBodyEncoding**: specifies whether to use the encoding scheme specified in the request body for URI query parameters. Default value: true.
     *
     * @example {"port":8080,"contextPath":"/","maxThreads":400,"uriEncoding":"ISO-8859-1","useBodyEncodingForUri":true}
     *
     * @var string
     */
    public $tomcatConfig;

    /**
     * @description The deployment policy. If the minimum number of available instances is 1, the value of the **UpdateStrategy** parameter is an empty string (""). If the minimum number of available instances is greater than 1, the following strategies can be configured:
     *
     *   The application is deployed on an instance. The remaining instances are automatically classified into two release batches whose interval is set to 1. In this case, the parameter is set to `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}`.
     *   The application is deployed on an instance. The remaining instances are manually classified into two release batches. In this case, the parameter is set to `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"manual"},"grayUpdate":{"gray":1}}`.
     *   All instances are automatically classified into two release batches. The application is deployed on the instances of the two batches in parallel. In this case, the parameter is set to `{"type":"BatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":0}}`
     *
     * The following table describes the parameters that are used in the preceding statements.
     *
     *   **type**: the type of the release policy. Valid values: **GrayBatchUpdate** and **BatchUpdate**.
     *
     *   **batchUpdate**: the phased release policy.
     *
     *   **batch**: the number of release batches.
     *   **releaseType**: the processing method for the batches. Valid values: **auto** and **manual**.
     *   **batchWaitTime**: the interval between release batches. Unit: seconds.
     *
     *   **grayUpdate**: the number of release batches in the phased release after a canary release. This parameter is returned only if the **type** parameter is set to **GrayBatchUpdate**.
     *
     * @example {"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}
     *
     * @var string
     */
    public $updateStrategy;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The startup command of the WAR package. For information about how to configure the startup command, see [Configure startup commands](~~96677~~).
     *
     * @example CATALINA_OPTS=\"$CATALINA_OPTS $Options\" catalina.sh run
     *
     * @var string
     */
    public $warStartOptions;

    /**
     * @description The version of the Tomcat container on which the deployment package depends. Valid values:
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
        'cpu'                              => 'Cpu',
        'customHostAlias'                  => 'CustomHostAlias',
        'deploy'                           => 'Deploy',
        'edasContainerVersion'             => 'EdasContainerVersion',
        'enableAhas'                       => 'EnableAhas',
        'enableGreyTagRoute'               => 'EnableGreyTagRoute',
        'envs'                             => 'Envs',
        'imagePullSecrets'                 => 'ImagePullSecrets',
        'imageUrl'                         => 'ImageUrl',
        'jarStartArgs'                     => 'JarStartArgs',
        'jarStartOptions'                  => 'JarStartOptions',
        'jdk'                              => 'Jdk',
        'kafkaConfigs'                     => 'KafkaConfigs',
        'liveness'                         => 'Liveness',
        'memory'                           => 'Memory',
        'microRegistration'                => 'MicroRegistration',
        'minReadyInstanceRatio'            => 'MinReadyInstanceRatio',
        'minReadyInstances'                => 'MinReadyInstances',
        'mountDesc'                        => 'MountDesc',
        'mountHost'                        => 'MountHost',
        'nasConfigs'                       => 'NasConfigs',
        'nasId'                            => 'NasId',
        'ossAkId'                          => 'OssAkId',
        'ossAkSecret'                      => 'OssAkSecret',
        'ossMountDescs'                    => 'OssMountDescs',
        'packageType'                      => 'PackageType',
        'packageUrl'                       => 'PackageUrl',
        'packageVersion'                   => 'PackageVersion',
        'php'                              => 'Php',
        'phpArmsConfigLocation'            => 'PhpArmsConfigLocation',
        'phpConfig'                        => 'PhpConfig',
        'phpConfigLocation'                => 'PhpConfigLocation',
        'postStart'                        => 'PostStart',
        'preStop'                          => 'PreStop',
        'pvtzDiscoverySvc'                 => 'PvtzDiscoverySvc',
        'python'                           => 'Python',
        'pythonModules'                    => 'PythonModules',
        'readiness'                        => 'Readiness',
        'replicas'                         => 'Replicas',
        'securityGroupId'                  => 'SecurityGroupId',
        'slsConfigs'                       => 'SlsConfigs',
        'terminationGracePeriodSeconds'    => 'TerminationGracePeriodSeconds',
        'timezone'                         => 'Timezone',
        'tomcatConfig'                     => 'TomcatConfig',
        'updateStrategy'                   => 'UpdateStrategy',
        'vSwitchId'                        => 'VSwitchId',
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
        if (null !== $this->enableAhas) {
            $res['EnableAhas'] = $this->enableAhas;
        }
        if (null !== $this->enableGreyTagRoute) {
            $res['EnableGreyTagRoute'] = $this->enableGreyTagRoute;
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
        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['EnableAhas'])) {
            $model->enableAhas = $map['EnableAhas'];
        }
        if (isset($map['EnableGreyTagRoute'])) {
            $model->enableGreyTagRoute = $map['EnableGreyTagRoute'];
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
        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
