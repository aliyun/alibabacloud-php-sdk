<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $completedTasks;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description ID
     *
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example default
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example runnable
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalTasks;
    protected $_name = [
        'completedTasks' => 'CompletedTasks',
        'createdAt'      => 'CreatedAt',
        'id'             => 'Id',
        'name'           => 'Name',
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'status'         => 'Status',
        'taskIds'        => 'TaskIds',
        'totalTasks'     => 'TotalTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedTasks) {
            $res['CompletedTasks'] = $this->completedTasks;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->totalTasks) {
            $res['TotalTasks'] = $this->totalTasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedTasks'])) {
            $model->completedTasks = $map['CompletedTasks'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['TotalTasks'])) {
            $model->totalTasks = $map['TotalTasks'];
        }

        return $model;
    }
}
