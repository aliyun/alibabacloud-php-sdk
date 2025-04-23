<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskPolicyRequest\taskPolicies;

class UpdateTaskPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var taskPolicies[]
     */
    public $taskPolicies;
    protected $_name = [
        'clientToken' => 'clientToken',
        'taskPolicies' => 'taskPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->taskPolicies)) {
            Model::validateArray($this->taskPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->taskPolicies) {
            if (\is_array($this->taskPolicies)) {
                $res['taskPolicies'] = [];
                $n1 = 0;
                foreach ($this->taskPolicies as $item1) {
                    $res['taskPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['taskPolicies'])) {
            if (!empty($map['taskPolicies'])) {
                $model->taskPolicies = [];
                $n1 = 0;
                foreach ($map['taskPolicies'] as $item1) {
                    $model->taskPolicies[$n1++] = taskPolicies::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
