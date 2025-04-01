<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $serviceGroup;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string[]
     */
    public $servicePortAndProtocol;

    /**
     * @var int[]
     */
    public $servicePorts;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var string
     */
    public $serviceType;

    /**
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

    public function validate()
    {
        if (\is_array($this->servicePortAndProtocol)) {
            Model::validateArray($this->servicePortAndProtocol);
        }
        if (\is_array($this->servicePorts)) {
            Model::validateArray($this->servicePorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->servicePortAndProtocol)) {
                $res['ServicePortAndProtocol'] = [];
                foreach ($this->servicePortAndProtocol as $key1 => $value1) {
                    $res['ServicePortAndProtocol'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->servicePorts) {
            if (\is_array($this->servicePorts)) {
                $res['ServicePorts'] = [];
                $n1 = 0;
                foreach ($this->servicePorts as $item1) {
                    $res['ServicePorts'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ServicePortAndProtocol'])) {
                $model->servicePortAndProtocol = [];
                foreach ($map['ServicePortAndProtocol'] as $key1 => $value1) {
                    $model->servicePortAndProtocol[$key1] = $value1;
                }
            }
        }

        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = [];
                $n1 = 0;
                foreach ($map['ServicePorts'] as $item1) {
                    $model->servicePorts[$n1++] = $item1;
                }
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
