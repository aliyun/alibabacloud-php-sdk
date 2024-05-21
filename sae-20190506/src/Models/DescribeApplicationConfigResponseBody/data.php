<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\configMapMountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\mountDesc;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\ossMountDescs;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is used to pull images across accounts. For more information, see [Pull images across Alibaba Cloud accounts](https://help.aliyun.com/document_detail/190675.html) and [Grant permissions across Alibaba Cloud accounts by using a RAM role](https://help.aliyun.com/document_detail/223585.html).
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
     * @var string
     */
    public $appDescription;

    /**
     * @description The ID of the application.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSource;

    /**
     * @description Indicates whether an elastic IP address (EIP) is associated with the application instance. Valid values:
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
     * @description The interval between batches in a phased release. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $batchWaitTime;

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
     * @description The parameters of the image startup command. The CommandArgs parameter contains the parameters that are required for the **Command** parameter. Format:
     *
     * `["a","b"]`
     *
     * In the preceding **Command** example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. You do not need to configure this parameter if it does not exist in the Command parameter.
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The details of the ConfigMap.
     *
     * @var configMapMountDesc[]
     */
    public $configMapMountDesc;

    /**
     * @description The CPU specifications that are required for each instance. Unit: millicores. You cannot set this parameter to 0. Valid values:
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
     * @description The custom mappings between hostnames and IP addresses in the container. Valid values:
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
     * @description Indicates whether access to Application High Availability Service (AHAS) is enabled. Valid values:
     *
     *   **true**: Access to AHAS is enabled.
     *   **false**: Access to AHAS is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $enableAhas;

    /**
     * @description Indicates whether canary release rules are enabled. Canary release rules apply only to applications in Spring Cloud and Dubbo frameworks. Valid values:
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
     * @description The environment variables. Variable description:
     *
     *   **name**: the name of the environment variable.
     *   **value**: the value or reference of the environment variable.
     *
     * @example [{"name":"TEST_ENV_KEY","value":"TEST_ENV_VAR"}]
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
     * @description The URL of the image. This parameter is returned only if the **PackageType** parameter is set to **Image**.
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
     * @description The logging configurations of Message Queue for Apache Kafka. The following parameters are involved:
     *
     *   **KafkaConfigs**: the configurations of Message Queue for Apache Kafka.
     *
     *   **createTime**: the time when the Message Queue for Apache Kafka instance was created.
     *
     *   **kafkaTopic**: the message topic that is used to classify messages.
     *
     *   **logDir**: the path in which logs are stored.
     *
     *   **logType**: the type of collected logs. Valid values:
     *
     *   **file_log**: the file log that is stored in the container. The path of the file logs in the container is returned.
     *   **stdout**: the standard output log of the container. You can specify only one stdout value.
     *
     *   **kafkaEndpoint**: the endpoint of the Message Queue for Apache Kafka service.
     *
     *   **kafkaInstanceId**: the ID of the Message Queue for Apache Kafka instance.
     *
     *   **region**: the region where the Message Queue for Apache Kafka instance resides.
     *
     * @example [{"createTime":1646304855512,"kafkaTopic":"test","logDir":"/tmp/a.log","logType":"file_log"},{"createTime":1646304855512,"kafkaTopic":"test2","logDir":"/sae-stdlog/kafka-jar*\/*","logType":"stdout"}],"kafkaEndpoint":"10.0.X.XXX:XXXX,10.0.X.XXX:XXXX,10.0.X.XXX:XXXX","kafkaInstanceId":"alikafka_pre-cn-7pp2l8kr****","region":"cn-beijing"}]
     *
     * @var string
     */
    public $kafkaConfigs;

    /**
     * @description The details of the availability check that was performed on the container. If the container fails this health check multiple times, the system disables and restarts the container. You can use one of the following methods to perform the health check:
     *
     *   Sample code of the **exec** method: `{"exec":{"command":["sh","-c","cat/home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}`
     *   Sample code of the **httpGet** method: `{"httpGet":{"path":"/","port":18091,"scheme":"HTTP","isContainKeyWord":true,"keyWord":"SAE"},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *   Sample code of the **tcpSocket** method: `{"tcpSocket":{"port":18091},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *
     * The following parameters are involved:
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
     * @example {"exec":{"command":["curl http://localhost:8080"]},"initialDelaySeconds":20,"timeoutSeconds":3}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The size of memory required by each instance. Unit: MB. You cannot set this parameter to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 1000.
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
     * @example "0"
     *
     * @var string
     */
    public $microRegistration;

    /**
     * @description The percentage of the minimum number of available instances. Valid values:
     *
     *   **-1**: the default value. This value indicates that the minimum number of available instances is not measured by percentage. If you do not configure this parameter, the default value **-1** is used.
     *   **0 to 100**: indicates that the minimum number of available instances is calculated by using the following formula: Current number of instances × (Value of MinReadyInstanceRatio × 100%). If the calculated result is not an integer, the result is rounded up to the nearest integer. For example, if the percentage is set to **50**% and five instances are available, the minimum number of available instances is 3.
     *
     * >  If the **MinReadyInstance** and **MinReadyInstanceRatio** parameters are returned and the value of the **MinReadyInstanceRatio** parameter is not **-1**, the value of the **MinReadyInstanceRatio** parameter takes effect. If the **MinReadyInstances** parameter is set to **5** and the **MinReadyInstanceRatio** parameter is set to **50**, the value of the **MinReadyInstanceRatio** parameter determines the minimum number of available instances.
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @description The minimum number of available instances. Valid values:
     *
     *   If you set the value to **0**, business interruptions occur when the application is updated.
     *   If you set the value to **-1**, the minimum number of available instances is automatically set to a system-recommended value. The value is the nearest integer to which the calculated result of the following formula is rounded up: Current number of instances × 25%. For example, if five instances are available, the minimum number of available instances is calculated by using the following formula: 5 × 25% = 1.25. In this case, the minimum number of available instances is 2.
     *
     * >  Make sure that at least one instance is available during application deployment and rollback to prevent business interruptions.
     * @example 1
     *
     * @var int
     */
    public $minReadyInstances;

    /**
     * @description The details of the mounted NAS file system.
     *
     * @var mountDesc[]
     */
    public $mountDesc;

    /**
     * @description The mount target of the NAS file system in the VPC where the application is deployed. If you do not need to modify this configuration during the deployment, configure the **MountHost** parameter only in the first request. You do not need to include this parameter in subsequent requests. If you need to remove this configuration, leave the **MountHost** parameter empty in the request.
     *
     * @example example.com
     *
     * @var string
     */
    public $mountHost;

    /**
     * @description The ID of the microservice application.
     *
     * @example xxxxxxx@xxxxx
     *
     * @var string
     */
    public $mseApplicationId;

    /**
     * @var string
     */
    public $mseApplicationName;

    /**
     * @description The ID of the namespace.
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
     * @description The ID of the NAS file system.
     *
     * @example AKSN89**
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
     * @description The description of the mounted OSS bucket.
     *
     * @var ossMountDescs[]
     */
    public $ossMountDescs;

    /**
     * @description The type of the deployment package. Valid values:
     *
     *   If you deploy the application by using a Java Archive (JAR) package, you can set this parameter to **FatJar**, **War**, or **Image**.
     *
     *   If you deploy the application by using a PHP package, you can set this parameter to one of the following values:
     *
     *   **PhpZip**
     *   **IMAGE_PHP_5_4**
     *   **IMAGE_PHP_5_4_ALPINE**
     *   **IMAGE_PHP_5_5**
     *   **IMAGE_PHP_5_5_ALPINE**
     *   **IMAGE_PHP_5_6**
     *   **IMAGE_PHP_5_6_ALPINE**
     *   **IMAGE_PHP_7_0**
     *   **IMAGE_PHP_7_0_ALPINE**
     *   **IMAGE_PHP_7_1**
     *   **IMAGE_PHP_7_1_ALPINE**
     *   **IMAGE_PHP_7_2**
     *   **IMAGE_PHP_7_2_ALPINE**
     *   **IMAGE_PHP_7_3**
     *   **IMAGE_PHP_7_3_ALPINE**
     *
     * @example War
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The URL of the deployment package. This parameter is returned only if the **PackageType** parameter is set to **FatJar** or **War**.
     *
     * @example https://edas-bj.oss-cn-beijing.aliyuncs.com/apps/K8s_APP_ID/d4c97c37-aba3-403e-ae1e-6f7d8742****\/hello-sae.war
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is returned only if the **PackageType** parameter is set to **FatJar** or **War**.
     *
     * @example 1.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $php;

    /**
     * @description The path on which the PHP configuration file for application monitoring is mounted. Make sure that the PHP server loads the configuration file.
     *
     * SAE automatically generates the corresponding configuration file. No manual operations are required.
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
     * @description The script that is run immediately after the container is started. Example: `{"exec":{"command":["cat","/etc/group"]}}`
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The script that is run before the container is stopped. Example: `{"exec":{"command":["cat","/etc/group"]}}`
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
     *   **other**: Other programming languages, such as Python, C++, Go, .NET, and Node.js.
     *
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
    public $pvtzDiscovery;

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
     * @description The details of the health check that was performed on the container. If the container fails this health check multiple times, the system disables and restarts the container. Containers that fail health checks cannot receive traffic from Server Load Balancer (SLB) instances. You can use the **exec**, **httpGet**, or **tcpSocket** method to perform health checks. For more information, see the description of the **Liveness** parameter.
     *
     * >  You can use only one method to perform the health check.
     * @example {"exec":{"command":["curl http://localhost:8080"]},"initialDelaySeconds":20,"timeoutSeconds":5}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description The ID of the region.
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
     * @var string[]
     */
    public $serviceTags;

    /**
     * @description The logging configurations of Log Service.
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
     * @example [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @description The details of the tags.
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
     * @description The time zone. Default value: **Asia/Shanghai**.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The Tomcat configuration. If you want to delete the configuration, set this parameter to {} or leave this parameter empty. The following parameters are involved:
     *
     *   **port**: the port number. Valid values: 1024 to 65535. The root permissions are required to perform operations on ports whose number is smaller than 1024. Enter a value that ranges from 1025 to 65535 because the container has only the admin permissions. If you do not configure this parameter, the default port number 8080 is used.
     *   **contextPath**: the path. Default value: /. This value indicates the root directory.
     *   **maxThreads**: the maximum number of connections in the connection pool. Default value: 400.
     *   **uriEncoding**: the URI encoding scheme in the Tomcat container. Valid values: **UTF-8**, **ISO-8859-1**, **GBK**, and **GB2312**. If you do not configure this parameter, the default value **ISO-8859-1** is used.
     *   **useBodyEncoding**: indicates whether to use the encoding scheme that is specified by **BodyEncoding for URL**. Default value: **true**.
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
     * The following parameters are involved:
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
     * @description The ID of the vSwitch.
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
     * @description The option settings in the WAR package. The settings are used to start the application container. The default startup command is `java $JAVA_OPTS $CATALINA_OPTS -Options org.apache.catalina.startup.Bootstrap "$@" start`.
     *
     * @example custom-option
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
        'acrAssumeRoleArn'              => 'AcrAssumeRoleArn',
        'acrInstanceId'                 => 'AcrInstanceId',
        'appDescription'                => 'AppDescription',
        'appId'                         => 'AppId',
        'appName'                       => 'AppName',
        'appSource'                     => 'AppSource',
        'associateEip'                  => 'AssociateEip',
        'batchWaitTime'                 => 'BatchWaitTime',
        'command'                       => 'Command',
        'commandArgs'                   => 'CommandArgs',
        'configMapMountDesc'            => 'ConfigMapMountDesc',
        'cpu'                           => 'Cpu',
        'customHostAlias'               => 'CustomHostAlias',
        'edasContainerVersion'          => 'EdasContainerVersion',
        'enableAhas'                    => 'EnableAhas',
        'enableGreyTagRoute'            => 'EnableGreyTagRoute',
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
        'minReadyInstanceRatio'         => 'MinReadyInstanceRatio',
        'minReadyInstances'             => 'MinReadyInstances',
        'mountDesc'                     => 'MountDesc',
        'mountHost'                     => 'MountHost',
        'mseApplicationId'              => 'MseApplicationId',
        'mseApplicationName'            => 'MseApplicationName',
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
        'pvtzDiscovery'                 => 'PvtzDiscovery',
        'python'                        => 'Python',
        'pythonModules'                 => 'PythonModules',
        'readiness'                     => 'Readiness',
        'regionId'                      => 'RegionId',
        'replicas'                      => 'Replicas',
        'securityGroupId'               => 'SecurityGroupId',
        'serviceTags'                   => 'ServiceTags',
        'slsConfigs'                    => 'SlsConfigs',
        'tags'                          => 'Tags',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timezone'                      => 'Timezone',
        'tomcatConfig'                  => 'TomcatConfig',
        'updateStrategy'                => 'UpdateStrategy',
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
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->serviceTags) {
            $res['ServiceTags'] = $this->serviceTags;
        }
        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
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
        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
        }
        if (isset($map['AssociateEip'])) {
            $model->associateEip = $map['AssociateEip'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ServiceTags'])) {
            $model->serviceTags = $map['ServiceTags'];
        }
        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
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
