<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildRequest\taskPolicies;

class CreateProjectBuildRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $projectBuildAction;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var taskPolicies[]
     */
    public $taskPolicies;
    protected $_name = [
        'clientToken' => 'clientToken',
        'groupId' => 'groupId',
        'projectBuildAction' => 'projectBuildAction',
        'taskIds' => 'taskIds',
        'taskPolicies' => 'taskPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
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

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->projectBuildAction) {
            $res['projectBuildAction'] = $this->projectBuildAction;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['taskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['taskIds'][$n1++] = $item1;
                }
            }
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

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['projectBuildAction'])) {
            $model->projectBuildAction = $map['projectBuildAction'];
        }

        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['taskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
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
