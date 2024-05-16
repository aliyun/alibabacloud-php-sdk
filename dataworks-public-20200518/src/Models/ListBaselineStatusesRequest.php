<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListBaselineStatusesRequest extends Model
{
    /**
     * @description The type of the baseline. Valid values: DAILY and HOURLY. The value DAILY indicates that the baseline is scheduled by day. The value HOURLY indicates that the baseline is scheduled by hour. Multiple types are separated by commas (,).
     *
     * @example DAILY,HOURLY
     *
     * @var string
     */
    public $baselineTypes;

    /**
     * @description The data timestamp of the baseline instance. Specify the time in the ISO 8601 standard in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2020-07-07T00:00:00+0800
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The status of the baseline instance. Valid values: UNFINISH and FINISH. The value UNFINISH indicates that the baseline instance is still running. The value FINISH indicates that the baseline instance finishes running. Multiple states are separated by commas (,).
     *
     * @example FINISH,UNFINISH
     *
     * @var string
     */
    public $finishStatus;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of the page to return. Valid values: 1 to 30. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The priority of the baseline. Valid values: 1, 3, 5, 7, and 8. Multiple priorities are separated by commas (,).
     *
     * @example 1,3,5,7,8
     *
     * @var string
     */
    public $priority;

    /**
     * @description The keyword of the baseline name used to search for the baseline.
     *
     * @example Keyword of the baseline name
     *
     * @var string
     */
    public $searchText;

    /**
     * @description The status of the baseline. Valid values: ERROR, SAFE, DANGEROUS, and OVER. The value ERROR indicates that no nodes are associated with the baseline, or all nodes associated with the baseline are suspended. The value SAFE indicates that nodes finish running before the alerting time. The value DANGEROUS indicates that nodes are still running after the alerting time but before the committed completion time. The value OVER indicates that nodes are still running after the committed completion time. Multiple states are separated by commas (,).
     *
     * @example SAFE,DANGROUS,OVER
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $topicId;
    protected $_name = [
        'baselineTypes' => 'BaselineTypes',
        'bizdate'       => 'Bizdate',
        'finishStatus'  => 'FinishStatus',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'priority'      => 'Priority',
        'searchText'    => 'SearchText',
        'status'        => 'Status',
        'topicId'       => 'TopicId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineTypes) {
            $res['BaselineTypes'] = $this->baselineTypes;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBaselineStatusesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineTypes'])) {
            $model->baselineTypes = $map['BaselineTypes'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
