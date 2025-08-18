<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $maxBizDate;

    /**
     * @var string
     */
    public $maxRunDate;

    /**
     * @var string
     */
    public $minBizDate;

    /**
     * @var string
     */
    public $minRunDate;

    /**
     * @var string
     */
    public $nodeId;

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
     * @var string[]
     */
    public $runStatusList;

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

    /**
     * @var string[]
     */
    public $subBizTypeList;
    protected $_name = [
        'bizType' => 'BizType',
        'bizUnitId' => 'BizUnitId',
        'flowId' => 'FlowId',
        'maxBizDate' => 'MaxBizDate',
        'maxRunDate' => 'MaxRunDate',
        'minBizDate' => 'MinBizDate',
        'minRunDate' => 'MinRunDate',
        'nodeId' => 'NodeId',
        'ownerList' => 'OwnerList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'priorityList' => 'PriorityList',
        'projectId' => 'ProjectId',
        'runStatusList' => 'RunStatusList',
        'schedulePaused' => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'scheduleType' => 'ScheduleType',
        'searchText' => 'SearchText',
        'subBizTypeList' => 'SubBizTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->priorityList)) {
            Model::validateArray($this->priorityList);
        }
        if (\is_array($this->runStatusList)) {
            Model::validateArray($this->runStatusList);
        }
        if (\is_array($this->schedulePeriodList)) {
            Model::validateArray($this->schedulePeriodList);
        }
        if (\is_array($this->subBizTypeList)) {
            Model::validateArray($this->subBizTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->maxBizDate) {
            $res['MaxBizDate'] = $this->maxBizDate;
        }

        if (null !== $this->maxRunDate) {
            $res['MaxRunDate'] = $this->maxRunDate;
        }

        if (null !== $this->minBizDate) {
            $res['MinBizDate'] = $this->minBizDate;
        }

        if (null !== $this->minRunDate) {
            $res['MinRunDate'] = $this->minRunDate;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = $item1;
                    ++$n1;
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
                    $res['PriorityList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runStatusList) {
            if (\is_array($this->runStatusList)) {
                $res['RunStatusList'] = [];
                $n1 = 0;
                foreach ($this->runStatusList as $item1) {
                    $res['RunStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schedulePaused) {
            $res['SchedulePaused'] = $this->schedulePaused;
        }

        if (null !== $this->schedulePeriodList) {
            if (\is_array($this->schedulePeriodList)) {
                $res['SchedulePeriodList'] = [];
                $n1 = 0;
                foreach ($this->schedulePeriodList as $item1) {
                    $res['SchedulePeriodList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        if (null !== $this->subBizTypeList) {
            if (\is_array($this->subBizTypeList)) {
                $res['SubBizTypeList'] = [];
                $n1 = 0;
                foreach ($this->subBizTypeList as $item1) {
                    $res['SubBizTypeList'][$n1] = $item1;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['MaxBizDate'])) {
            $model->maxBizDate = $map['MaxBizDate'];
        }

        if (isset($map['MaxRunDate'])) {
            $model->maxRunDate = $map['MaxRunDate'];
        }

        if (isset($map['MinBizDate'])) {
            $model->minBizDate = $map['MinBizDate'];
        }

        if (isset($map['MinRunDate'])) {
            $model->minRunDate = $map['MinRunDate'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = $item1;
                    ++$n1;
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
                    $model->priorityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RunStatusList'])) {
            if (!empty($map['RunStatusList'])) {
                $model->runStatusList = [];
                $n1 = 0;
                foreach ($map['RunStatusList'] as $item1) {
                    $model->runStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SchedulePaused'])) {
            $model->schedulePaused = $map['SchedulePaused'];
        }

        if (isset($map['SchedulePeriodList'])) {
            if (!empty($map['SchedulePeriodList'])) {
                $model->schedulePeriodList = [];
                $n1 = 0;
                foreach ($map['SchedulePeriodList'] as $item1) {
                    $model->schedulePeriodList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        if (isset($map['SubBizTypeList'])) {
            if (!empty($map['SubBizTypeList'])) {
                $model->subBizTypeList = [];
                $n1 = 0;
                foreach ($map['SubBizTypeList'] as $item1) {
                    $model->subBizTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
