<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\QueryFeaturesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\QueryFeaturesResponseBody\data\features;

class data extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $targetScope;
    protected $_name = [
        'features' => 'Features',
        'instanceId' => 'InstanceId',
        'resourceName' => 'ResourceName',
        'targetScope' => 'TargetScope',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->targetScope) {
            $res['TargetScope'] = $this->targetScope;
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = features::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['TargetScope'])) {
            $model->targetScope = $map['TargetScope'];
        }

        return $model;
    }
}
