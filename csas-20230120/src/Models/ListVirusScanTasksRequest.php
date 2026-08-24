<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListVirusScanTasksRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $performanceModes;

    /**
     * @var string[]
     */
    public $scanModes;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'performanceModes' => 'PerformanceModes',
        'scanModes' => 'ScanModes',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskIds' => 'TaskIds',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->performanceModes)) {
            Model::validateArray($this->performanceModes);
        }
        if (\is_array($this->scanModes)) {
            Model::validateArray($this->scanModes);
        }
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->performanceModes) {
            if (\is_array($this->performanceModes)) {
                $res['PerformanceModes'] = [];
                $n1 = 0;
                foreach ($this->performanceModes as $item1) {
                    $res['PerformanceModes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scanModes) {
            if (\is_array($this->scanModes)) {
                $res['ScanModes'] = [];
                $n1 = 0;
                foreach ($this->scanModes as $item1) {
                    $res['ScanModes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PerformanceModes'])) {
            if (!empty($map['PerformanceModes'])) {
                $model->performanceModes = [];
                $n1 = 0;
                foreach ($map['PerformanceModes'] as $item1) {
                    $model->performanceModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScanModes'])) {
            if (!empty($map['ScanModes'])) {
                $model->scanModes = [];
                $n1 = 0;
                foreach ($map['ScanModes'] as $item1) {
                    $model->scanModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
