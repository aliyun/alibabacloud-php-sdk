<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationShrinkRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) required for a RAM role to obtain images across accounts. For more information, see [Grant permissions across Alibaba Cloud accounts by using a RAM role](https://help.aliyun.com/document_detail/223585.html).
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
     * @description The description of the template. The description cannot exceed 1,024 characters in length.
     *
     * @example This is a test description.
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The name of the application. The name can contain digits, letters, and hyphens (-). The name must start with a letter and cannot end with a hyphen (-). It cannot exceed 36 characters in length.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description Select micro_service, which is the application.
     *
     * @example micro_service
     *
     * @var string
     */
    public $appSource;

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
     * @description Specifies whether to automatically configure the network environment. Valid values:
     *
     *   **true**: SAE automatically configures the network environment when you create the application. If you set this parameter to true, the values of the **NamespaceId**, **VpcId**, **vSwitchId**, and **SecurityGroupId** parameters are ignored.
     *   **false**: SAE configures the network environment based on your settings when you create the application.
     *
     * >  If you select **true**, other **NamespaceId** will be ignored.
     *
     * @example true
     *
     * @var bool
     */
    public $autoConfig;

    /**
     * @description The ID of the basic application.
     *
     * @example ee99cce6-1c8e-4bfa-96c3-3e2fa9de8a41
     *
     * @var string
     */
    public $baseAppId;

    /**
     * @description The command that is used to start the image. The command must be an existing executable object in the container. Sample statements:
     *
     * command:
     * - echo
     * - abc
     * - >
     * - file0
     *
     * In this example, the Command parameter is set to `Command="echo", CommandArgs=["abc", ">", "file0"]`.
     *
     * @example echo
     *
     * @var string
     */
    public $command;

    /**
     * @description The parameters of the image startup command. The CommandArgs parameter specifies the parameters that are required for the **Command** parameter. You can specify the name in one of the following formats:
     *
     * `["a","b"]`
     *
     * In the preceding example, the CommandArgs parameter is set to `CommandArgs=["abc", ">", "file0"]`. The data type of `["abc", ">", "file0"]` must be an array of strings in the JSON format. This parameter is optional.
     *
     * @example ["a","b"]
     *
     * @var string
     */
    public $commandArgs;

    /**
     * @description The description of the **ConfigMap** instance mounted to the application. Use configurations created on the Configuration Items page to configure containers. The following table describes the parameters that are used in the preceding statements.
     *
     *   **congfigMapId**: the ID of the ConfigMap instance. You can call the [ListNamespacedConfigMaps](https://help.aliyun.com/document_detail/176917.html) operation to obtain the ID.
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
     * @description The CPU specifications that are required for each instance. Unit: millicores. This parameter cannot be set to 0. Valid values:
     *
     *   **500**
     *   **1000**
     *   **2000**
     *   **4000**
     *   **8000**
     *   **12000**
     *   **16000**
     *   **32000**
     *
     * @example 1000
     *
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
     * @description Custom image type. To it to empty string to use pre-built image.
     *
     * - internet: Public network image
     *
     * - intranet: Private network image
     *
     * @example internet
     *
     * @var string
     */
    public $customImageNetworkType;

    /**
     * @description Whether to deploy now.
     *
     *   **true** (default): Deploy now.
     *   **false**: Deploy later.
     *
     * @example true
     *
     * @var bool
     */
    public $deploy;

    /**
     * @description The disk size. Unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description . NET Framework version number:
     *
     *   .NET 3.1
     *   .NET 5.0
     *   .NET 6.0
     *   .NET 7.0
     *   .NET 8.0
     *
     * @example .NET 3.1
     *
     * @var string
     */
    public $dotnet;

    /**
     * @description The version of the container in HSF.
     *
     * @example 3.5.3
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description Enable CPU Burst.
     * - true: enable
     * - false: disable
     *
     * @example true
     *
     * @var bool
     */
    public $enableCpuBurst;

    /**
     * @description Enable application monitoring for non-Java applications based on eBPF technology. The value options are as follows:
     *
     * - true: Enable.
     * - false: Disable (default).
     *
     * @example false
     *
     * @var string
     */
    public $enableEbpf;

    /**
     * @description Indicates whether to enable the new ARMS feature:
     *
     *   true: enables this parameter.
     *   false: disables this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $enableNewArms;

    /**
     * @var bool
     */
    public $enablePrometheus;

    /**
     * @description Enable Sidecar resource isolation.
     *
     * - true: enable
     * - false: disable
     *
     * @example true
     *
     * @var bool
     */
    public $enableSidecarResourceIsolated;

    /**
     * @description The environment variables. You can configure custom environment variables or reference a ConfigMap. Before you can reference a ConfigMap, you must create a ConfigMap. For more information, see [CreateConfigMap](https://help.aliyun.com/document_detail/176914.html). Valid values:
     *
     *   Custom configuration
     *
     *   **name**: the name of the environment variable.
     *   **value**: the value of the environment variable. The priority of the custom configuration is higher than valueFrom.
     *
     *   Reference a ConfigMap (valueFrom)
     *
     *   **name**: the name of the environment variable. You can reference one or all keys. To reference all keys, specify `sae-sys-configmap-all-<ConfigMap name>`. Example: `sae-sys-configmap-all-test1`.
     *   **valueFrom**: the reference of the environment variable. Valid value: `configMapRef`.
     *   **configMapId**: the ID of the ConfigMap.
     *   **key**: the key. If you want to reference all key values, you do not need to configure this parameter.
     *
     * @example [{"name":"envtmp","value":"0"}]
     *
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $gpuConfig;

    /**
     * @description The ID of the corresponding Secret.
     *
     * @example 10
     *
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @description The URL of the image. This parameter is required if you set the `PackageType` parameter to `Image`.
     *
     * @example registry.cn-hangzhou.aliyuncs.com/sae_test/ali_sae_test:0.0.1
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description Initialize container configuration.
     *
     * @var string
     */
    public $initContainersConfigShrink;

    /**
     * @var bool
     */
    public $isStateful;

    /**
     * @description The arguments in the JAR package. The arguments are used to start the application container. The default startup command is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example custom-args
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @description The option settings in the JAR package. The settings are used to start the application container. The default startup command for application deployment is `$JAVA_HOME/bin/java $JarStartOptions -jar $CATALINA_OPTS "$package_path" $JarStartArgs`.
     *
     * @example -Xms4G -Xmx4G
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
     *
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
     * @example {"kafkaEndpoint":"10.0.X.XXX:XXXX,10.0.X.XXX:XXXX,10.0.X.XXX:XXXX\\","kafkaInstanceId":"alikafka_pre-cn-7pp2l8kr****","kafkaConfigs":[{"logType":"file_log","logDir":"/tmp/a.log","kafkaTopic":"test2"},{"logType":"stdout","logDir":"","kafkaTopic":"test"}]}
     *
     * @var string
     */
    public $kafkaConfigs;

    /**
     * @description Container health check. If the container fails this check, it will be revoked and relaunch again. Use one of the following methods to perform the health check:
     *
     *   Example of **exec**: `{"exec":{"command":["sh","-c","cat/home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}`
     *   Sample code of the **httpGet** method: `{"httpGet":{"path":"/","port":18091,"scheme":"HTTP","isContainKeyWord":true,"keyWord":"SAE"},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *   Sample code of the **tcpSocket** method: `{"tcpSocket":{"port":18091},"initialDelaySeconds":11,"periodSeconds":10,"timeoutSeconds":1}`
     *
     * > You can use only one method to perform the health check.
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
     * @example {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The memory size that is required by each instance. Unit: MB. This parameter cannot be set to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 2000.
     *   This parameter is set to **4096** if the Cpu parameter is set to 1000, 2000, or 4000.
     *   This parameter is set to **8192** if the Cpu parameter is set to 2000, 4000, or 8,000.
     *   This parameter is set to **12288** if the Cpu parameter is set to 12000.
     *   This parameter is set to **16384** if the Cpu parameter is set to 4000, 8000, or 16000.
     *   This parameter is set to **24576** if the Cpu parameter is set to 12000.
     *   This parameter is set to **32768** if the Cpu parameter is set to 16000.
     *   This parameter is set to **65536** if the Cpu parameter is set to 8000, 16000, or 32000.
     *   This parameter is set to **131072** if the Cpu parameter is set to 32000.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The Nacos registry. Valid values:
     *
     *   **0**: SAE built-in Nacos registry
     *   **1**: self-managed Nacos registry
     *   **2** : MSE enterprise edition Nacos registry
     *
     * @example "0"
     *
     * @var string
     */
    public $microRegistration;

    /**
     * @description The Registry configurations.
     *
     * @example {\\"instanceId\\":\\"mse-cn-zvp2bh6h70r\\",\\"namespace\\":\\"4c0aa74f-57cb-423c-b6af-5d9f2d0e3dbd\\"}
     *
     * @var string
     */
    public $microRegistrationConfig;

    /**
     * @description Configure microservices governance
     *
     * Whether to enable microservices governance (enable):
     * - true: Enable
     * - false: Disable
     *
     * Configure lossless online/offline deployment (mseLosslessRule):
     *
     * delayTime: Delay duration (unit: seconds)
     *
     * enable: Whether to enable lossless deployment
     *
     * - true: Enable
     *
     * - false: Disable
     *
     * notice: Whether to enable notifications
     *
     * - true: Enable
     *
     * - false: Disable
     *
     * warmupTime: Small-traffic warm-up duration (unit: seconds)
     *
     * @example {"enable": true,"mseLosslessRule": {"delayTime": 0,"enable": false,"notice": false,"warmupTime": 120}}
     *
     * @var string
     */
    public $microserviceEngineConfig;

    /**
     * @description It is not recommended to configure this field; configuring NasConfigs instead. This field specifies the NAS mount description. When deploying, if the configuration has not changed, you do not need to set this parameter (i.e., the MountDesc field does not need to be included in the request). If you need to clear the NAS configuration, set the value of this field to an empty string in the request (i.e., set the value of the MountDesc field to "").
     *
     * @example [{mountPath: "/tmp", nasPath: "/"}]
     *
     * @var string
     */
    public $mountDesc;

    /**
     * @description It is not recommended to configure this field; configuring NasConfigs instead. This field specifies the NAS mount point within the application\\"s VPC. When deploying, if the configuration has not changed, you do not need to set this parameter (i.e., the MountHost field does not need to be included in the request). If you need to clear the NAS configuration, set the value of this field to an empty string in the request (i.e., set the value of the MountHost field to "").
     *
     * @example example.com
     *
     * @var string
     */
    public $mountHost;

    /**
     * @description SAE namespace ID. Only namespaces consisting of lowercase letters and hyphens (-) are supported, and the name must start with a letter.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The configurations of mounting the NAS file system. Take note of the following rules:
     *
     *   **mountPath**: the mount path of the container.
     *   **readOnly**: If you set the value to **false**, the application has the read and write permissions.
     *   **nasId**: the ID of the NAS file system.
     *   **mountDomain**: the domain name of the mount target. For more information, see [DescribeMountTargets](https://help.aliyun.com/document_detail/62626.html).
     *   **nasPath**: the directory in the NAS file system.
     *
     * @example [{"mountPath":"/test1","readOnly":false,"nasId":"nasId1","mountDomain":"nasId1.cn-shenzhen.nas.aliyuncs.com","nasPath":"/test1"},{"nasId":"nasId2","mountDomain":"nasId2.cn-shenzhen.nas.aliyuncs.com","readOnly":false,"nasPath":"/test2","mountPath":"/test2"}]
     *
     * @var string
     */
    public $nasConfigs;

    /**
     * @description It is not recommended to configure this field; configuring NasConfigs instead. The ID of the mounted NAS must be in the same region as the cluster. The NAS must have available mount point quota or its mount point must already be on a switch within the VPC. If this field is not specified and the mountDescs field exists, a NAS will be automatically purchased and mounted to a switch within the VPC by default.
     *
     * When deploying, if the configuration has not changed, you do not need to set this parameter (i.e., the NASId field does not need to be included in the request). If you need to clear the NAS configuration, set the value of this field to an empty string in the request (i.e., set the value of the NASId field to "").
     *
     * @example KSAK****
     *
     * @var string
     */
    public $nasId;

    /**
     * @description SAE edition.
     *
     * - lite: the lightweight edition.
     *
     * - std: the standard edition.
     *
     * - pro: the professional edition.
     *
     * @example pro
     *
     * @var string
     */
    public $newSaeVersion;

    /**
     * @description The name of the RAM role used to authenticate the user identity.
     *
     * >  You need to create an OpenID Connect (OIDC) identity provider (IdP) and an identity provider (IdP) for role-based single sign-on (SSO) in advance. For more information, see [Creates an OpenID Connect (OIDC) identity provider (IdP)](https://help.aliyun.com/document_detail/2331022.html) and [Creates an identity provider (IdP) for role-based single sign-on (SSO)](https://help.aliyun.com/document_detail/2331016.html).
     *
     * @example sae-test
     *
     * @var string
     */
    public $oidcRoleName;

    /**
     * @description The Accesskey ID that the OSS reads and writes from.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $ossAkId;

    /**
     * @description The AccessKey Secret that the OSS reads and writes from.
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
     * @description The type of the deployment package. Take note of the following rules:
     *
     *   If you deploy the application by using a Java Archive (JAR) package, you can set this parameter to **FatJar**, **War**, or **Image**.
     *   If you deploy the application by using a PHP package, you can set this parameter to one of the following values:
     *
     **PhpZip** **IMAGE_PHP_5_4** **IMAGE_PHP_5_4_ALPINE** **IMAGE_PHP_5_5** **IMAGE_PHP_5_5_ALPINE** **IMAGE_PHP_5_6** **IMAGE_PHP_5_6_ALPINE** **IMAGE_PHP_7_0** **IMAGE_PHP_7_0_ALPINE** **IMAGE_PHP_7_1** **IMAGE_PHP_7_1_ALPINE** **IMAGE_PHP_7_2** **IMAGE_PHP_7_2_ALPINE** **IMAGE_PHP_7_3** **IMAGE_PHP_7_3_ALPINE**
     *
     *   If you deploy the application by using a **Python** package, you can set this parameter to **PythonZip** or **Image**:
     *
     * This parameter is required.
     *
     * @example FatJar
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The address of the deployment package. This parameter is required if you set **PackageType** to **FatJar**, **War**, or **PythonZip**.
     *
     * @example http://myoss.oss-cn-****.aliyuncs.com/my-buc/2019-06-30/****.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package. This parameter is required when the **PackageType** parameter is set to **FatJar**, **War**, or **PythonZip**.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The dependent PHP version of PHP package. Image is not supported.
     *
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
     * @description Control whether to run a script after the container is initialized. Example: {"exec":{"command":["cat","/etc/group"]}}
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $postStart;

    /**
     * @description To controle whether to run a script before the container stops. Example: {"exec":{"command":["cat","/etc/group"]}}
     *
     * @example {"exec":{"command":["cat","/etc/group"]}}
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The programming language for the application’s technology stack. The value options are as follows:
     *
     * - java: Java language
     * - php: PHP language
     * - python: Python language
     * - dotnet: .NET Core language
     * - other: Multi-language, such as C++, Go, Node.js, etc.
     *
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

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
     * @description Check the launch status of the container. Containers that fail health checks more than once will not receive traffic from Server Load Balancer (SLB) instances any loner. You can use the **exec**, **httpGet**, or **tcpSocket** method to perform health checks. For more information, see the description of the **Liveness** parameter.
     *
     * > You can use only one method to perform the health check.
     *
     * @example {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description The number of instances when initialized.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The resource type. Supports NULL (default) and haiguang (haiguang server).
     *
     * @example UNLL
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The SAE version. Supported versions:
     *
     *   **v1**
     *   **v2**
     *
     * @example v1
     *
     * @var string
     */
    public $saeVersion;

    /**
     * @description Secret Mount Description
     * Use the secret dictionaries created in the Namespace Secret Dictionary page to inject information into containers. Parameter descriptions are as follows:
     *
     * - secretId: Secret instance ID. Obtain via the ListSecrets interface.
     *
     * - key: Key-value pair. Note: Set the parameter sae-sys-secret-all to mount all keys.
     *
     * - mountPath: Mount path.
     *
     * @example [{“secretId":10,”key":"test","mountPath":"/tmp"}]
     *
     * @var string
     */
    public $secretMountDesc;

    /**
     * @description Security group ID.
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The canary tag configured for the application.
     *
     * @example {\\"alicloud.service.tag\\":\\"g1\\"}
     *
     * @var string
     */
    public $serviceTags;

    /**
     * @description The configuration of the container.
     *
     * @var string
     */
    public $sidecarContainersConfigShrink;

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
     *
     * @example [{"logDir":"","logType":"stdout"},{"logDir":"/tmp/a.log"}]
     *
     * @var string
     */
    public $slsConfigs;

    /**
     * @description Enable application startup probe.
     *
     * Check succeeded: Indicates that the application has started successfully. If you have configured Liveness and Readiness checks, they will be performed after the application startup is successful.
     * Check failed: Indicates that the application failed to start; an exception will be reported and the application will be automatically restarted.
     *
     * > - exec, httpGet, and tcpSocket methods are supported. For specific examples, see the Liveness parameter documentation.
     * > - Only one health check method can be selected.
     *
     * @example {"exec":{"command":["sh","-c","cat /home/admin/start.sh"]},"initialDelaySeconds":30,"periodSeconds":30,"timeoutSeconds":2}
     *
     * @var string
     */
    public $startupProbe;

    /**
     * @description The timeout period for a graceful shutdown. Default value: 30. Unit: seconds. Valid values: 1 to 300.
     *
     * @example 30
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description Time zone. Default to time zone of Asia/Shanghai.
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
     * @description The vSwitch to which the elastic network interface (ENI) of the application instance is connected. The vSwitch must be located in the VPC specified by the VpcId parameter. The SAE namespace is bound with this vSwitch. The default value is the ID of the vSwitch that is bound to the namespace.
     *
     * @example vsw-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) that corresponds to the SAE namespace. In SAE, once correspondence is configured between a namespace and a VPC, the namespace cannot correspond to other VPCs. When the SAE application is created within the namespace, the application is bound with the VPC. Multiple namespaces can correspond to the same VPC. The default value is the ID of the VPC that is bound to the namespace.
     *
     * @example vpc-bp1aevy8sofi8mh1q****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The startup command of the WAR package. For information about how to configure the startup command, see [Configure startup commands](https://help.aliyun.com/document_detail/96677.html).
     *
     * @example CATALINA_OPTS=\\"$CATALINA_OPTS $Options\\" catalina.sh run
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
     *
     * @example apache-tomcat-7.0.91
     *
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
        'enableCpuBurst' => 'EnableCpuBurst',
        'enableEbpf' => 'EnableEbpf',
        'enableNewArms' => 'EnableNewArms',
        'enablePrometheus' => 'EnablePrometheus',
        'enableSidecarResourceIsolated' => 'EnableSidecarResourceIsolated',
        'envs' => 'Envs',
        'gpuConfig' => 'GpuConfig',
        'imagePullSecrets' => 'ImagePullSecrets',
        'imageUrl' => 'ImageUrl',
        'initContainersConfigShrink' => 'InitContainersConfig',
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
        'sidecarContainersConfigShrink' => 'SidecarContainersConfig',
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

    public function validate() {}

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
        if (null !== $this->imagePullSecrets) {
            $res['ImagePullSecrets'] = $this->imagePullSecrets;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->initContainersConfigShrink) {
            $res['InitContainersConfig'] = $this->initContainersConfigShrink;
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
        if (null !== $this->sidecarContainersConfigShrink) {
            $res['SidecarContainersConfig'] = $this->sidecarContainersConfigShrink;
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

    /**
     * @param array $map
     *
     * @return CreateApplicationShrinkRequest
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
        if (isset($map['ImagePullSecrets'])) {
            $model->imagePullSecrets = $map['ImagePullSecrets'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InitContainersConfig'])) {
            $model->initContainersConfigShrink = $map['InitContainersConfig'];
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
            $model->sidecarContainersConfigShrink = $map['SidecarContainersConfig'];
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
