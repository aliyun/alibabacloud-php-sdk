<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationResponseBody\applicationList;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 00ee517d-dd7d-4d4e-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The deployment type of the application. Valid values:
     *
     *   War: The application is deployed by using a WAR package.
     *   FatJar: The application is deployed by using a JAR package.
     *   Image: The application is deployed by using an image.
     *   If this parameter is empty, the application is not deployed.
     *
     * @example FatJar
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The build package number of Enterprise Distributed Application Service (EDAS) Container.
     *
     * @example 58
     *
     * @var int
     */
    public $buildPackageId;

    /**
     * @description The ID of the cluster.
     *
     * @example c37aec2a-bcca-4ec1-****-************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster in which the application is deployed. Valid values:
     *
     *   **2**: Elastic Compute Service (ECS) cluster
     *   **3**: self-managed Kubernetes cluster in EDAS
     *   **5**: Container Service for Kubernetes (ACK) cluster
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The time when the application was created.
     *
     * @example 1664208000000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The IP address of the Internet-facing SLB instance.
     *
     * @example 100.100.70.***
     *
     * @var string
     */
    public $extSlbIp;

    /**
     * @description The listener port of the Internet-facing SLB instance.
     *
     * @example 8080
     *
     * @var int
     */
    public $extSlbListenerPort;

    /**
     * @description The number of application instances.
     *
     * @example 5
     *
     * @var int
     */
    public $instances;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @description The name of the application.
     *
     * @example doc-test-consumer
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the microservices namespace.
     *
     * @example cn-hangzhou:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The service port of the application.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID of the application.
     *
     * @example cn-beijing:docTes
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek24j4s4b*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of running application instances.
     *
     * @example 0
     *
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @description The IP address of the internal-facing Server Load Balancer (SLB) instance.
     *
     * @example 192.168.0.***
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The listener port of the internal-facing SLB instance.
     *
     * @example 8088
     *
     * @var int
     */
    public $slbListenerPort;

    /**
     * @description The port of the internal-facing SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $slbPort;

    /**
     * @description The state of the application. Valid values:
     *
     *   RUNNING: The application is running.
     *   STOPPED: The application is stopped.
     *   DEPLOYING: The application is being deployed.
     *   DELETING: The application is being deleted.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'                => 'AppId',
        'applicationType'      => 'ApplicationType',
        'buildPackageId'       => 'BuildPackageId',
        'clusterId'            => 'ClusterId',
        'clusterType'          => 'ClusterType',
        'createTime'           => 'CreateTime',
        'extSlbIp'             => 'ExtSlbIp',
        'extSlbListenerPort'   => 'ExtSlbListenerPort',
        'instances'            => 'Instances',
        'k8sNamespace'         => 'K8sNamespace',
        'name'                 => 'Name',
        'namespaceId'          => 'NamespaceId',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbIp'                => 'SlbIp',
        'slbListenerPort'      => 'SlbListenerPort',
        'slbPort'              => 'SlbPort',
        'state'                => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->extSlbListenerPort) {
            $res['ExtSlbListenerPort'] = $this->extSlbListenerPort;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->slbListenerPort) {
            $res['SlbListenerPort'] = $this->slbListenerPort;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['ExtSlbListenerPort'])) {
            $model->extSlbListenerPort = $map['ExtSlbListenerPort'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SlbListenerPort'])) {
            $model->slbListenerPort = $map['SlbListenerPort'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
