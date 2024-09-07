<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListCommonLogsRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionName;

    /**
     * @example Finished
     *
     * @var string
     */
    public $actionStatus;

    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 1703821542
     *
     * @var int
     */
    public $from;

    /**
     * @example true
     *
     * @var bool
     */
    public $isReverse;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example Operation
     *
     * @var string
     */
    public $logType;

    /**
     * @example 137***
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example i-abc***
     *
     * @var string
     */
    public $resource;

    /**
     * @description This parameter is required.
     *
     * @example 1703821666
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'actionName'   => 'ActionName',
        'actionStatus' => 'ActionStatus',
        'clusterId'    => 'ClusterId',
        'from'         => 'From',
        'isReverse'    => 'IsReverse',
        'logRequestId' => 'LogRequestId',
        'logType'      => 'LogType',
        'operatorUid'  => 'OperatorUid',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'resource'     => 'Resource',
        'to'           => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
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
     * @return ListCommonLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            if (!empty($map['ActionName'])) {
                $model->actionName = $map['ActionName'];
            }
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
