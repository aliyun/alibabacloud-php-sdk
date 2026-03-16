<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ScalingStatus extends Model
{
    /**
     * @var string
     */
    public $currentError;

    /**
     * @var int
     */
    public $currentInstances;

    /**
     * @var int
     */
    public $minInstances;

    /**
     * @var ScheduledPolicy[]
     */
    public $scheduledPolicies;

    /**
     * @var int
     */
    public $targetInstances;
    protected $_name = [
        'currentError' => 'currentError',
        'currentInstances' => 'currentInstances',
        'minInstances' => 'minInstances',
        'scheduledPolicies' => 'scheduledPolicies',
        'targetInstances' => 'targetInstances',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledPolicies)) {
            Model::validateArray($this->scheduledPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }

        if (null !== $this->currentInstances) {
            $res['currentInstances'] = $this->currentInstances;
        }

        if (null !== $this->minInstances) {
            $res['minInstances'] = $this->minInstances;
        }

        if (null !== $this->scheduledPolicies) {
            if (\is_array($this->scheduledPolicies)) {
                $res['scheduledPolicies'] = [];
                $n1 = 0;
                foreach ($this->scheduledPolicies as $item1) {
                    $res['scheduledPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetInstances) {
            $res['targetInstances'] = $this->targetInstances;
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
        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }

        if (isset($map['currentInstances'])) {
            $model->currentInstances = $map['currentInstances'];
        }

        if (isset($map['minInstances'])) {
            $model->minInstances = $map['minInstances'];
        }

        if (isset($map['scheduledPolicies'])) {
            if (!empty($map['scheduledPolicies'])) {
                $model->scheduledPolicies = [];
                $n1 = 0;
                foreach ($map['scheduledPolicies'] as $item1) {
                    $model->scheduledPolicies[$n1] = ScheduledPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetInstances'])) {
            $model->targetInstances = $map['targetInstances'];
        }

        return $model;
    }
}
