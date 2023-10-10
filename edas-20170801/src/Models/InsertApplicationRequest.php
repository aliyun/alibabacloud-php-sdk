<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertApplicationRequest extends Model
{
    /**
     * @description The name of the application. The name can contain only digits, letters, hyphens (-), and underscores (\_) and must start with a letter. The name can be up to 36 characters in length.
     *
     * @example hello-edas-test-1
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The build package number of EDAS Container. This parameter is required if you create a High-Speed Service Framework (HSF) application. You can query the build package number by using one of the following methods:
     *
     *   Call the ListBuildPack operation. For more information, see [ListBuildPack](~~149391~~).
     *   Obtain the value in the **Build package number** column of the [Release notes for EDAS Container](~~92614~~) topic.
     *
     * @example 59
     *
     * @var int
     */
    public $buildPackId;

    /**
     * @description The ID of the ECS cluster in which you want to create the application. If you specify an ID, the application is created in the specified ECS cluster. If you leave this parameter empty, the application is created in the default cluster. We recommend that you specify this parameter.
     *
     * @example 13136119-f384-4f50-b76e-xxxxxxxxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the application component. You can call the ListComponents operation to query the component IDs. For more information, see [ListComponents](~~97502~~).
     *
     * Valid values for common application components:
     *
     *   4: Apache Tomcat 7.0.91
     *   7: Apache Tomcat 8.5.42
     *   5: OpenJDK 1.8.x
     *   6: OpenJDK 1.7.x
     *
     * This parameter is available only for Java SDK 2.57.3 or later, or Python SDK 2.57.3 or later. Assume that you use an SDK that is not provided by EDAS, for example, aliyun-python-sdk-core, aliyun-java-sdk-core, and Alibaba Cloud CLI. In this case, you can directly specify this parameter.
     * @example 7
     *
     * @var string
     */
    public $componentIds;

    /**
     * @description The number of CPU cores that can be used by the application container in a Swarm cluster. \*\*This parameter is deprecated.\*\*
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The description of the application.
     *
     * @example create by edas pop api
     *
     * @var string
     */
    public $description;

    /**
     * @description The value of `ecu_id` of the ECS instance to be added during scale-out. The ECU ID is the unique identity for an ECS instance that is imported to EDAS. Separate multiple values of `ecu_id` with commas (,). You can call the ListScaleOutEcu operation to query the value of `ecu_id`. For more information, see [ListScaleOutEcu](~~149371~~).
     *
     * @example 07bd417a-b863-477d-****-************
     *
     * @var string
     */
    public $ecuInfo;

    /**
     * @description Specifies whether to enable the port health check. Valid values:
     *
     *   **true**: enable the port health check.
     *   **false**: does not enable the port health check.
     *
     * @example true
     *
     * @var bool
     */
    public $enablePortCheck;

    /**
     * @description Specifies whether to enable the URL health check. Valid values:
     *
     *   **true**: enables the URL health check.
     *   **false**: does not enable the URL health check.
     *
     * @example true
     *
     * @var bool
     */
    public $enableUrlCheck;

    /**
     * @description The health check URL of the application.
     *
     * @example http://127.0.0.1:8080/_ehc.html
     *
     * @var string
     */
    public $healthCheckURL;

    /**
     * @description The health check URL of the application. This parameter is equivalent to the HealthCheckURL parameter.
     *
     * @example http://127.0.0.1:8080/_ehc.html
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The script to mount. Set the value in the JSON format. Example: `[{"ignoreFail":false,"name":"postprepareInstanceEnvironmentOnScaleOut","script":"ls"},{"ignoreFail":true,"name":"postdeleteInstanceDataOnScaleIn","script":""},{"ignoreFail":true,"name":"prestartInstance","script":""},{"ignoreFail":true,"name":"poststartInstance","script":""},{"ignoreFail":true,"name":"prestopInstance","script":""},{"ignoreFail":true,"name":"poststopInstance","script":""}]`
     *
     * @example [{"ignoreFail":false,"name":"postprepareInstanceEnvironmentOnScaleOut","script":"ls"}]
     *
     * @var string
     */
    public $hooks;

    /**
     * @description The version of the Java Development Kit (JDK) used to deploy the application. **This parameter is deprecated.
     *
     * @example 8
     *
     * @var string
     */
    public $jdk;

    /**
     * @description The custom parameters.
     *
     * @example -Dproperty=value
     *
     * @var string
     */
    public $jvmOptions;

    /**
     * @description The ID of the microservices namespace. To query the ID of a microservices namespace, you can choose **Resource Management** > **Microservice Namespaces** in the left-side navigation pane of the EDAS console or call the ListUserDefineRegion operation. For more information, see [ListUserDefineRegion](~~149377~~).
     *
     *   This parameter is required if the cluster you specify is not deployed in the default microservices namespace. Otherwise, the message `application regionId is different with cluster regionId!` appears.
     *   If the cluster you specify is deployed in the default microservices namespace, you do not need to specify this parameter. Set this parameter to the ID of the microservices namespace in which the cluster you specify is deployed.
     *
     * @example cn-beijing:prod
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The maximum size of the heap memory. Unit: MB.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxHeapSize;

    /**
     * @description The size of the permanent generation heap memory. Unit: MB.
     *
     * @example 200
     *
     * @var int
     */
    public $maxPermSize;

    /**
     * @description The memory size that can be used by the application container in a Swarm cluster. \*\*This parameter is deprecated.\*\*
     *
     * @example 2048
     *
     * @var int
     */
    public $mem;

    /**
     * @description The initial size of the heap memory. Unit: MB.
     *
     * @example 500
     *
     * @var int
     */
    public $minHeapSize;

    /**
     * @description The type of the application deployment package. Valid values: war and jar.
     *
     * @example war
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The reserved port for the application. \*\*This parameter is deprecated.\*\*
     *
     * @example 8090
     *
     * @var string
     */
    public $reservedPortStr;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek24j4s4b*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The version of Apache Tomcat. **This parameter is deprecated.
     *
     * @example 4
     *
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'buildPackId'     => 'BuildPackId',
        'clusterId'       => 'ClusterId',
        'componentIds'    => 'ComponentIds',
        'cpu'             => 'Cpu',
        'description'     => 'Description',
        'ecuInfo'         => 'EcuInfo',
        'enablePortCheck' => 'EnablePortCheck',
        'enableUrlCheck'  => 'EnableUrlCheck',
        'healthCheckURL'  => 'HealthCheckURL',
        'healthCheckUrl'  => 'HealthCheckUrl',
        'hooks'           => 'Hooks',
        'jdk'             => 'Jdk',
        'jvmOptions'      => 'JvmOptions',
        'logicalRegionId' => 'LogicalRegionId',
        'maxHeapSize'     => 'MaxHeapSize',
        'maxPermSize'     => 'MaxPermSize',
        'mem'             => 'Mem',
        'minHeapSize'     => 'MinHeapSize',
        'packageType'     => 'PackageType',
        'reservedPortStr' => 'ReservedPortStr',
        'resourceGroupId' => 'ResourceGroupId',
        'webContainer'    => 'WebContainer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
        }
        if (null !== $this->enablePortCheck) {
            $res['EnablePortCheck'] = $this->enablePortCheck;
        }
        if (null !== $this->enableUrlCheck) {
            $res['EnableUrlCheck'] = $this->enableUrlCheck;
        }
        if (null !== $this->healthCheckURL) {
            $res['HealthCheckURL'] = $this->healthCheckURL;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->jvmOptions) {
            $res['JvmOptions'] = $this->jvmOptions;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->reservedPortStr) {
            $res['ReservedPortStr'] = $this->reservedPortStr;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }
        if (isset($map['EnablePortCheck'])) {
            $model->enablePortCheck = $map['EnablePortCheck'];
        }
        if (isset($map['EnableUrlCheck'])) {
            $model->enableUrlCheck = $map['EnableUrlCheck'];
        }
        if (isset($map['HealthCheckURL'])) {
            $model->healthCheckURL = $map['HealthCheckURL'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['JvmOptions'])) {
            $model->jvmOptions = $map['JvmOptions'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ReservedPortStr'])) {
            $model->reservedPortStr = $map['ReservedPortStr'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
