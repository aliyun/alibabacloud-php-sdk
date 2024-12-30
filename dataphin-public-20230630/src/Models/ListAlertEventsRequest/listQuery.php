<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-11-27 13:47:00
     *
     * @var string
     */
    public $alertEndTime;

    /**
     * @var string[]
     */
    public $alertObjectTypeList;

    /**
     * @var string[]
     */
    public $alertReasonList;

    /**
     * @description This parameter is required.
     *
     * @example 2024-11-16 00:00:00
     *
     * @var string
     */
    public $alertStartTime;

    /**
     * @var string[]
     */
    public $bizNameList;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $monitoredItemIdList;

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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $projectNameList;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
     * @var string
     */
    public $sourceSystem;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'alertEndTime'        => 'AlertEndTime',
        'alertObjectTypeList' => 'AlertObjectTypeList',
        'alertReasonList'     => 'AlertReasonList',
        'alertStartTime'      => 'AlertStartTime',
        'bizNameList'         => 'BizNameList',
        'keyword'             => 'Keyword',
        'monitoredItemIdList' => 'MonitoredItemIdList',
        'page'                => 'Page',
        'pageSize'            => 'PageSize',
        'projectNameList'     => 'ProjectNameList',
        'sourceSystem'        => 'SourceSystem',
        'statusList'          => 'StatusList',
        'userIdList'          => 'UserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEndTime) {
            $res['AlertEndTime'] = $this->alertEndTime;
        }
        if (null !== $this->alertObjectTypeList) {
            $res['AlertObjectTypeList'] = $this->alertObjectTypeList;
        }
        if (null !== $this->alertReasonList) {
            $res['AlertReasonList'] = $this->alertReasonList;
        }
        if (null !== $this->alertStartTime) {
            $res['AlertStartTime'] = $this->alertStartTime;
        }
        if (null !== $this->bizNameList) {
            $res['BizNameList'] = $this->bizNameList;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->monitoredItemIdList) {
            $res['MonitoredItemIdList'] = $this->monitoredItemIdList;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectNameList) {
            $res['ProjectNameList'] = $this->projectNameList;
        }
        if (null !== $this->sourceSystem) {
            $res['SourceSystem'] = $this->sourceSystem;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
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
        if (isset($map['AlertEndTime'])) {
            $model->alertEndTime = $map['AlertEndTime'];
        }
        if (isset($map['AlertObjectTypeList'])) {
            if (!empty($map['AlertObjectTypeList'])) {
                $model->alertObjectTypeList = $map['AlertObjectTypeList'];
            }
        }
        if (isset($map['AlertReasonList'])) {
            if (!empty($map['AlertReasonList'])) {
                $model->alertReasonList = $map['AlertReasonList'];
            }
        }
        if (isset($map['AlertStartTime'])) {
            $model->alertStartTime = $map['AlertStartTime'];
        }
        if (isset($map['BizNameList'])) {
            if (!empty($map['BizNameList'])) {
                $model->bizNameList = $map['BizNameList'];
            }
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MonitoredItemIdList'])) {
            if (!empty($map['MonitoredItemIdList'])) {
                $model->monitoredItemIdList = $map['MonitoredItemIdList'];
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectNameList'])) {
            if (!empty($map['ProjectNameList'])) {
                $model->projectNameList = $map['ProjectNameList'];
            }
        }
        if (isset($map['SourceSystem'])) {
            $model->sourceSystem = $map['SourceSystem'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
