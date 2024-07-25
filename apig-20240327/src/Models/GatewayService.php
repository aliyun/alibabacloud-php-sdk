<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayService\ports;
use AlibabaCloud\Tea\Model;

class GatewayService extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $gatewayServiceId;

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
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

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
        'createTimestamp'    => 'createTimestamp',
        'gatewayServiceId'   => 'gatewayServiceId',
        'healthCheck'        => 'healthCheck',
        'healthStatus'       => 'healthStatus',
        'name'               => 'name',
        'namespace'          => 'namespace',
        'ports'              => 'ports',
        'qualifier'          => 'qualifier',
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
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->gatewayServiceId) {
            $res['gatewayServiceId'] = $this->gatewayServiceId;
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
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
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
     * @return GatewayService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = $map['addresses'];
            }
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
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
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
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
