<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListOperationProcessRequest extends Model
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
     * @var int
     */
    public $startTime;
    /**
     * @var int[]
     */
    public $statusCodes;
    /**
     * @var string[]
     */
    public $taskIds;
    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
        'startTime'   => 'StartTime',
        'statusCodes' => 'StatusCodes',
        'taskIds'     => 'TaskIds',
        'taskTypes'   => 'TaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->statusCodes)) {
            Model::validateArray($this->statusCodes);
        }
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statusCodes) {
            if (\is_array($this->statusCodes)) {
                $res['StatusCodes'] = [];
                $n1                 = 0;
                foreach ($this->statusCodes as $item1) {
                    $res['StatusCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1             = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1               = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1++] = $item1;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatusCodes'])) {
            if (!empty($map['StatusCodes'])) {
                $model->statusCodes = [];
                $n1                 = 0;
                foreach ($map['StatusCodes'] as $item1) {
                    $model->statusCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1             = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = [];
                $n1               = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
