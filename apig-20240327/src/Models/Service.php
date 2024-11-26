<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\Service\ports;
use AlibabaCloud\Tea\Model;

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
     * @example gw-xxxx
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example publich
     *
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
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example rg-xxx
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['addresses'] = $this->addresses;
        }
        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toMap() : null;
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
            $res['healthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
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
            $res['ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['ports'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['unhealthyEndpoints'] = $this->unhealthyEndpoints;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Service
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = $map['addresses'];
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
                $n            = 0;
                foreach ($map['ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
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
                $model->unhealthyEndpoints = $map['unhealthyEndpoints'];
            }
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
