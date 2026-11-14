<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class WarmPoolCapacityPolicy extends Model
{
    /**
     * @var int
     */
    public $minReadySandboxes;

    /**
     * @var WarmPoolScheduledPolicy[]
     */
    public $scheduledPolicies;
    protected $_name = [
        'minReadySandboxes' => 'minReadySandboxes',
        'scheduledPolicies' => 'scheduledPolicies',
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
        if (null !== $this->minReadySandboxes) {
            $res['minReadySandboxes'] = $this->minReadySandboxes;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['minReadySandboxes'])) {
            $model->minReadySandboxes = $map['minReadySandboxes'];
        }

        if (isset($map['scheduledPolicies'])) {
            if (!empty($map['scheduledPolicies'])) {
                $model->scheduledPolicies = [];
                $n1 = 0;
                foreach ($map['scheduledPolicies'] as $item1) {
                    $model->scheduledPolicies[$n1] = WarmPoolScheduledPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
