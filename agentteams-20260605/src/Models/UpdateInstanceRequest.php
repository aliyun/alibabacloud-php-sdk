<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceRequest\zones;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'networkType' => 'NetworkType',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
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
