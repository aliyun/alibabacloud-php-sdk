<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\Service\ports;

class Service extends Model
{
    /**
     * @var string[]
     */
    public $addresses;
    /**
     * @var AiServiceConfig
     */
    public $aiServiceConfig;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var ServiceHealthCheck
     */
    public $healthCheck;
    /**
     * @var string
     */
    public $healthStatus;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var ports[]
     */
    public $ports;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $qualifier;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var string[]
     */
    public $unhealthyEndpoints;
    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'addresses'          => 'addresses',
        'aiServiceConfig'    => 'aiServiceConfig',
        'createTimestamp'    => 'createTimestamp',
        'gatewayId'          => 'gatewayId',
        'groupName'          => 'groupName',
        'healthCheck'        => 'healthCheck',
        'healthStatus'       => 'healthStatus',
        'name'               => 'name',
        'namespace'          => 'namespace',
        'ports'              => 'ports',
        'protocol'           => 'protocol',
        'qualifier'          => 'qualifier',
        'resourceGroupId'    => 'resourceGroupId',
        'serviceId'          => 'serviceId',
        'sourceType'         => 'sourceType',
        'unhealthyEndpoints' => 'unhealthyEndpoints',
        'updateTimestamp'    => 'updateTimestamp',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->aiServiceConfig) {
            $this->aiServiceConfig->validate();
        }
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->unhealthyEndpoints)) {
            Model::validateArray($this->unhealthyEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['addresses'] = [];
                $n1               = 0;
                foreach ($this->addresses as $item1) {
                    $res['addresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toArray($noStream) : $this->aiServiceConfig;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->healthCheck) {
            $res['healthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->healthStatus) {
            $res['healthStatus'] = $this->healthStatus;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1           = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->unhealthyEndpoints) {
            if (\is_array($this->unhealthyEndpoints)) {
                $res['unhealthyEndpoints'] = [];
                $n1                        = 0;
                foreach ($this->unhealthyEndpoints as $item1) {
                    $res['unhealthyEndpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = [];
                $n1               = 0;
                foreach ($map['addresses'] as $item1) {
                    $model->addresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['aiServiceConfig'])) {
            $model->aiServiceConfig = AiServiceConfig::fromMap($map['aiServiceConfig']);
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['healthCheck'])) {
            $model->healthCheck = ServiceHealthCheck::fromMap($map['healthCheck']);
        }

        if (isset($map['healthStatus'])) {
            $model->healthStatus = $map['healthStatus'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1           = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1++] = ports::fromMap($item1);
                }
            }
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['unhealthyEndpoints'])) {
            if (!empty($map['unhealthyEndpoints'])) {
                $model->unhealthyEndpoints = [];
                $n1                        = 0;
                foreach ($map['unhealthyEndpoints'] as $item1) {
                    $model->unhealthyEndpoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
