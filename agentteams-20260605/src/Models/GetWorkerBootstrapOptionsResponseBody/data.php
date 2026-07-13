<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerBootstrapOptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerBootstrapOptionsResponseBody\data\networkOptions;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var networkOptions[]
     */
    public $networkOptions;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'networkOptions' => 'NetworkOptions',
    ];

    public function validate()
    {
        if (\is_array($this->networkOptions)) {
            Model::validateArray($this->networkOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkOptions) {
            if (\is_array($this->networkOptions)) {
                $res['NetworkOptions'] = [];
                $n1 = 0;
                foreach ($this->networkOptions as $item1) {
                    $res['NetworkOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkOptions'])) {
            if (!empty($map['NetworkOptions'])) {
                $model->networkOptions = [];
                $n1 = 0;
                foreach ($map['NetworkOptions'] as $item1) {
                    $model->networkOptions[$n1] = networkOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
