<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example SCRIPT
     *
     * @var string
     */
    public $nodeBizType;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $nodeSubBizTypeList;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
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
     * @example 12111
     *
     * @var int
     */
    public $projectId;

    /**
     * @example true
     *
     * @var bool
     */
    public $schedulePaused;

    /**
     * @var string[]
     */
    public $schedulePeriodList;

    /**
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
    protected $_name = [
        'dryRun'             => 'DryRun',
        'nodeBizType'        => 'NodeBizType',
        'nodeSubBizTypeList' => 'NodeSubBizTypeList',
        'ownerList'          => 'OwnerList',
        'page'               => 'Page',
        'pageSize'           => 'PageSize',
        'priorityList'       => 'PriorityList',
        'projectId'          => 'ProjectId',
        'schedulePaused'     => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'scheduleType'       => 'ScheduleType',
        'searchText'         => 'SearchText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->nodeBizType) {
            $res['NodeBizType'] = $this->nodeBizType;
        }
        if (null !== $this->nodeSubBizTypeList) {
            $res['NodeSubBizTypeList'] = $this->nodeSubBizTypeList;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NodeBizType'])) {
            $model->nodeBizType = $map['NodeBizType'];
        }
        if (isset($map['NodeSubBizTypeList'])) {
            if (!empty($map['NodeSubBizTypeList'])) {
                $model->nodeSubBizTypeList = $map['NodeSubBizTypeList'];
            }
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

        return $model;
    }
}
