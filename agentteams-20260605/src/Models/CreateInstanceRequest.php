<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateInstanceRequest\zones;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'networkType' => 'NetworkType',
        'paymentType' => 'PaymentType',
        'vpcId' => 'VpcId',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
