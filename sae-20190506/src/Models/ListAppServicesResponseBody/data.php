<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
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
     * @description The number of instances of the microservice.
     *
     * @example 1
     *
     * @var string
     */
    public $instanceCount;

    /**
     * @description The ID of the namespace to which the application belongs.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The registry type. Valid values:
     *
     *   **0**：SAE Nacos
     *   **1**: SAE built-in Nacos
     *   **2**: MSE Nacos
     *   **9**: SAE Kubernets service
     *
     * @example 0
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The IDs of the security groups.
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The group to which the microservice belongs.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $serviceGroup;

    /**
     * @description The name of the microservice.
     *
     * @example frontend
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The ports and protocols.
     *
     * @var string[]
     */
    public $servicePortAndProtocol;

    /**
     * @description The list of ports.
     *
     * @var int[]
     */
    public $servicePorts;

    /**
     * @description The protocol used by the microservice.
     *
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The type of the microservice. Valid values:
     *
     *   **dubbo**
     *   **springCloud**
     *   **hsf**
     *   **k8sService**
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The version of the microservice.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'instanceCount' => 'InstanceCount',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'registryType' => 'RegistryType',
        'securityGroupId' => 'SecurityGroupId',
        'serviceGroup' => 'ServiceGroup',
        'serviceName' => 'ServiceName',
        'servicePortAndProtocol' => 'ServicePortAndProtocol',
        'servicePorts' => 'ServicePorts',
        'serviceProtocol' => 'ServiceProtocol',
        'serviceType' => 'ServiceType',
        'serviceVersion' => 'ServiceVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->serviceGroup) {
            $res['ServiceGroup'] = $this->serviceGroup;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->servicePortAndProtocol) {
            $res['ServicePortAndProtocol'] = $this->servicePortAndProtocol;
        }
        if (null !== $this->servicePorts) {
            $res['ServicePorts'] = $this->servicePorts;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ServiceGroup'])) {
            $model->serviceGroup = $map['ServiceGroup'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServicePortAndProtocol'])) {
            $model->servicePortAndProtocol = $map['ServicePortAndProtocol'];
        }
        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = $map['ServicePorts'];
            }
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
