<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class ConfigureNatGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipAllocationId;

    /**
     * @var int
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $natGatewayInstanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'eipAllocationId' => 'EipAllocationId',
        'eipBandwidth' => 'EipBandwidth',
        'instanceId' => 'InstanceId',
        'natGatewayInstanceId' => 'NatGatewayInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eipAllocationId) {
            $res['EipAllocationId'] = $this->eipAllocationId;
        }

        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->natGatewayInstanceId) {
            $res['NatGatewayInstanceId'] = $this->natGatewayInstanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EipAllocationId'])) {
            $model->eipAllocationId = $map['EipAllocationId'];
        }

        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NatGatewayInstanceId'])) {
            $model->natGatewayInstanceId = $map['NatGatewayInstanceId'];
        }

        return $model;
    }
}
