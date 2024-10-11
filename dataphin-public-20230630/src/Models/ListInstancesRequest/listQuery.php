<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example SCRIPT
     *
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @example 2024-05-31
     *
     * @var string
     */
    public $maxBizDate;

    /**
     * @example 2024-05-31
     *
     * @var string
     */
    public $maxRunDate;

    /**
     * @example 2024-05-30
     *
     * @var string
     */
    public $minBizDate;

    /**
     * @example 2024-05-30
     *
     * @var string
     */
    public $minRunDate;

    /**
     * @example n_23131
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $priorityList;

    /**
     * @description This parameter is required.
     *
     * @example 131311111321
     *
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
     * @description This parameter is required.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @example xx
     *
     * @var string
     */
    public $searchText;

    /**
     * @var string[]
     */
    public $subBizTypeList;
    protected $_name = [
        'bizType'            => 'BizType',
        'bizUnitId'          => 'BizUnitId',
        'maxBizDate'         => 'MaxBizDate',
        'maxRunDate'         => 'MaxRunDate',
        'minBizDate'         => 'MinBizDate',
        'minRunDate'         => 'MinRunDate',
        'nodeId'             => 'NodeId',
        'ownerList'          => 'OwnerList',
        'page'               => 'Page',
        'pageSize'           => 'PageSize',
        'priorityList'       => 'PriorityList',
        'projectId'          => 'ProjectId',
        'runStatusList'      => 'RunStatusList',
        'schedulePaused'     => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'scheduleType'       => 'ScheduleType',
        'searchText'         => 'SearchText',
        'subBizTypeList'     => 'SubBizTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
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
            $res['OwnerList'] = $this->ownerList;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->priorityList) {
            $res['PriorityList'] = $this->priorityList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runStatusList) {
            $res['RunStatusList'] = $this->runStatusList;
        }
        if (null !== $this->schedulePaused) {
            $res['SchedulePaused'] = $this->schedulePaused;
        }
        if (null !== $this->schedulePeriodList) {
            $res['SchedulePeriodList'] = $this->schedulePeriodList;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }
        if (null !== $this->subBizTypeList) {
            $res['SubBizTypeList'] = $this->subBizTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
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
                $model->ownerList = $map['OwnerList'];
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
                $model->priorityList = $map['PriorityList'];
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RunStatusList'])) {
            if (!empty($map['RunStatusList'])) {
                $model->runStatusList = $map['RunStatusList'];
            }
        }
        if (isset($map['SchedulePaused'])) {
            $model->schedulePaused = $map['SchedulePaused'];
        }
        if (isset($map['SchedulePeriodList'])) {
            if (!empty($map['SchedulePeriodList'])) {
                $model->schedulePeriodList = $map['SchedulePeriodList'];
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
                $model->subBizTypeList = $map['SubBizTypeList'];
            }
        }

        return $model;
    }
}
