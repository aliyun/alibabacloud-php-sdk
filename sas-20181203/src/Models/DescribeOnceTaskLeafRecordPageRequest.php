<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeOnceTaskLeafRecordPageRequest extends Model
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
     * @var bool
     */
    public $relateInfo;
    /**
     * @var string
     */
    public $source;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string[]
     */
    public $statusList;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
        'relateInfo'  => 'RelateInfo',
        'source'      => 'Source',
        'startTime'   => 'StartTime',
        'statusList'  => 'StatusList',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
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

        if (null !== $this->relateInfo) {
            $res['RelateInfo'] = $this->relateInfo;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1                = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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

        if (isset($map['RelateInfo'])) {
            $model->relateInfo = $map['RelateInfo'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1                = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
