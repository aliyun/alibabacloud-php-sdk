<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListVulScanTasksRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scheduledStrategyId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'matchMode' => 'MatchMode',
        'pageSize' => 'PageSize',
        'scheduledStrategyId' => 'ScheduledStrategyId',
        'status' => 'Status',
        'taskIds' => 'TaskIds',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scheduledStrategyId) {
            $res['ScheduledStrategyId'] = $this->scheduledStrategyId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ScheduledStrategyId'])) {
            $model->scheduledStrategyId = $map['ScheduledStrategyId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
