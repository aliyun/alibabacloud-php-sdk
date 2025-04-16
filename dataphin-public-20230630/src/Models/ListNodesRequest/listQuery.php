<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $nodeBizType;

    /**
     * @var string[]
     */
    public $nodeSubBizTypeList;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $priorityList;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $schedulePaused;

    /**
     * @var string[]
     */
    public $schedulePeriodList;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $searchText;
    protected $_name = [
        'dryRun' => 'DryRun',
        'nodeBizType' => 'NodeBizType',
        'nodeSubBizTypeList' => 'NodeSubBizTypeList',
        'ownerList' => 'OwnerList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'priorityList' => 'PriorityList',
        'projectId' => 'ProjectId',
        'schedulePaused' => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'scheduleType' => 'ScheduleType',
        'searchText' => 'SearchText',
    ];

    public function validate()
    {
        if (\is_array($this->nodeSubBizTypeList)) {
            Model::validateArray($this->nodeSubBizTypeList);
        }
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->priorityList)) {
            Model::validateArray($this->priorityList);
        }
        if (\is_array($this->schedulePeriodList)) {
            Model::validateArray($this->schedulePeriodList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->nodeBizType) {
            $res['NodeBizType'] = $this->nodeBizType;
        }

        if (null !== $this->nodeSubBizTypeList) {
            if (\is_array($this->nodeSubBizTypeList)) {
                $res['NodeSubBizTypeList'] = [];
                $n1 = 0;
                foreach ($this->nodeSubBizTypeList as $item1) {
                    $res['NodeSubBizTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->priorityList) {
            if (\is_array($this->priorityList)) {
                $res['PriorityList'] = [];
                $n1 = 0;
                foreach ($this->priorityList as $item1) {
                    $res['PriorityList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->schedulePaused) {
            $res['SchedulePaused'] = $this->schedulePaused;
        }

        if (null !== $this->schedulePeriodList) {
            if (\is_array($this->schedulePeriodList)) {
                $res['SchedulePeriodList'] = [];
                $n1 = 0;
                foreach ($this->schedulePeriodList as $item1) {
                    $res['SchedulePeriodList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['NodeBizType'])) {
            $model->nodeBizType = $map['NodeBizType'];
        }

        if (isset($map['NodeSubBizTypeList'])) {
            if (!empty($map['NodeSubBizTypeList'])) {
                $model->nodeSubBizTypeList = [];
                $n1 = 0;
                foreach ($map['NodeSubBizTypeList'] as $item1) {
                    $model->nodeSubBizTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PriorityList'])) {
            if (!empty($map['PriorityList'])) {
                $model->priorityList = [];
                $n1 = 0;
                foreach ($map['PriorityList'] as $item1) {
                    $model->priorityList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SchedulePaused'])) {
            $model->schedulePaused = $map['SchedulePaused'];
        }

        if (isset($map['SchedulePeriodList'])) {
            if (!empty($map['SchedulePeriodList'])) {
                $model->schedulePeriodList = [];
                $n1 = 0;
                foreach ($map['SchedulePeriodList'] as $item1) {
                    $model->schedulePeriodList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}
