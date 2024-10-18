<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListCommonLogsShrinkRequest extends Model
{
    /**
     * @description The action types.
     *
     * @var string
     */
    public $actionNameShrink;

    /**
     * @description The action status. Logs associated with the specific action status are returned.
     *
     * Valid values:
     *
     *   Finished: The action is completed.
     *   Failed: The action failed.
     *   InProgress: The action is being performed.
     *
     * @example Finished
     *
     * @var string
     */
    public $actionStatus;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The start time of the time range. The time is a timestamp. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1703821542
     *
     * @var int
     */
    public $from;

    /**
     * @description Specifies whether to display results in reverse order.
     *
     * Default value: true
     * @example true
     *
     * @var bool
     */
    public $isReverse;

    /**
     * @description The request ID of the action. Logs associated with the specific request ID are returned.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @description The log type. Logs of the specific type are returned.
     *
     * @example Operation
     *
     * @var string
     */
    public $logType;

    /**
     * @description The ID of the user who performed the action.
     *
     * @example 137***
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @description The page number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 20.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the resource involved in the action. Logs associated with the specific resource are returned. This parameter is not recommended.
     *
     * @example i-abc***
     *
     * @var string
     */
    public $resource;

    /**
     * @description The end time of the time range. The time is a timestamp. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1703821666
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'actionNameShrink' => 'ActionName',
        'actionStatus'     => 'ActionStatus',
        'clusterId'        => 'ClusterId',
        'from'             => 'From',
        'isReverse'        => 'IsReverse',
        'logRequestId'     => 'LogRequestId',
        'logType'          => 'LogType',
        'operatorUid'      => 'OperatorUid',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resource'         => 'Resource',
        'to'               => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionNameShrink) {
            $res['ActionName'] = $this->actionNameShrink;
        }
        if (null !== $this->actionStatus) {
            $res['ActionStatus'] = $this->actionStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->isReverse) {
            $res['IsReverse'] = $this->isReverse;
        }
        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommonLogsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionNameShrink = $map['ActionName'];
        }
        if (isset($map['ActionStatus'])) {
            $model->actionStatus = $map['ActionStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IsReverse'])) {
            $model->isReverse = $map['IsReverse'];
        }
        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
