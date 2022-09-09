<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildRequest\taskPolicies;
use AlibabaCloud\Tea\Model;

class CreateProjectBuildRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
        'clientToken'        => 'clientToken',
        'projectBuildAction' => 'projectBuildAction',
        'taskIds'            => 'taskIds',
        'taskPolicies'       => 'taskPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->projectBuildAction) {
            $res['projectBuildAction'] = $this->projectBuildAction;
        }
        if (null !== $this->taskIds) {
            $res['taskIds'] = $this->taskIds;
        }
        if (null !== $this->taskPolicies) {
            $res['taskPolicies'] = [];
            if (null !== $this->taskPolicies && \is_array($this->taskPolicies)) {
                $n = 0;
                foreach ($this->taskPolicies as $item) {
                    $res['taskPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectBuildRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['projectBuildAction'])) {
            $model->projectBuildAction = $map['projectBuildAction'];
        }
        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = $map['taskIds'];
            }
        }
        if (isset($map['taskPolicies'])) {
            if (!empty($map['taskPolicies'])) {
                $model->taskPolicies = [];
                $n                   = 0;
                foreach ($map['taskPolicies'] as $item) {
                    $model->taskPolicies[$n++] = null !== $item ? taskPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
