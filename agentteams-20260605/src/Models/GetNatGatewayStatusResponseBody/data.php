<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponseBody\data\natGateways;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponseBody\data\zoneCidrs;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $natGatewayConfigured;

    /**
     * @var natGateways[]
     */
    public $natGateways;

    /**
     * @var bool
     */
    public $snatConfigured;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $zoneCidrCovered;

    /**
     * @var zoneCidrs[]
     */
    public $zoneCidrs;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'natGatewayConfigured' => 'NatGatewayConfigured',
        'natGateways' => 'NatGateways',
        'snatConfigured' => 'SnatConfigured',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'zoneCidrCovered' => 'ZoneCidrCovered',
        'zoneCidrs' => 'ZoneCidrs',
    ];

    public function validate()
    {
        if (\is_array($this->natGateways)) {
            Model::validateArray($this->natGateways);
        }
        if (\is_array($this->zoneCidrs)) {
            Model::validateArray($this->zoneCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->natGatewayConfigured) {
            $res['NatGatewayConfigured'] = $this->natGatewayConfigured;
        }

        if (null !== $this->natGateways) {
            if (\is_array($this->natGateways)) {
                $res['NatGateways'] = [];
                $n1 = 0;
                foreach ($this->natGateways as $item1) {
                    $res['NatGateways'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->snatConfigured) {
            $res['SnatConfigured'] = $this->snatConfigured;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneCidrCovered) {
            $res['ZoneCidrCovered'] = $this->zoneCidrCovered;
        }

        if (null !== $this->zoneCidrs) {
            if (\is_array($this->zoneCidrs)) {
                $res['ZoneCidrs'] = [];
                $n1 = 0;
                foreach ($this->zoneCidrs as $item1) {
                    $res['ZoneCidrs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NatGatewayConfigured'])) {
            $model->natGatewayConfigured = $map['NatGatewayConfigured'];
        }

        if (isset($map['NatGateways'])) {
            if (!empty($map['NatGateways'])) {
                $model->natGateways = [];
                $n1 = 0;
                foreach ($map['NatGateways'] as $item1) {
                    $model->natGateways[$n1] = natGateways::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SnatConfigured'])) {
            $model->snatConfigured = $map['SnatConfigured'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneCidrCovered'])) {
            $model->zoneCidrCovered = $map['ZoneCidrCovered'];
        }

        if (isset($map['ZoneCidrs'])) {
            if (!empty($map['ZoneCidrs'])) {
                $model->zoneCidrs = [];
                $n1 = 0;
                foreach ($map['ZoneCidrs'] as $item1) {
                    $model->zoneCidrs[$n1] = zoneCidrs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
