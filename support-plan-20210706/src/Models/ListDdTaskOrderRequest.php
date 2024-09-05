<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ListDdTaskOrderRequest extends Model
{
    /**
     * @description callerParentId
     *
     * @example 123
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description callerType
     *
     * @example 123
     *
     * @var string
     */
    public $callerType;

    /**
     * @description callerUid
     *
     * @example 123
     *
     * @var int
     */
    public $callerUid;

    /**
     * @description createRealName
     *
     * @example Tom
     *
     * @var string
     */
    public $createRealName;

    /**
     * @description endTime
     *
     * @example 2024-08-20 14:09:16
     *
     * @var string
     */
    public $endTime;

    /**
     * @description openGroupId
     *
     * @example DAWNN14N
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description orderId
     *
     * @example E2112019N14PBY
     *
     * @var string
     */
    public $orderId;

    /**
     * @description pageNo
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description pageSize
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description requestId
     *
     * @example 2F8557E4-742B-1CF7-8E83-28CD0C1F7B48
     *
     * @var string
     */
    public $requestId;

    /**
     * @description startTime
     *
     * @example 2024-08-01 14:09:11
     *
     * @var string
     */
    public $startTime;

    /**
     * @description taskStatus
     *
     * @example dealingNode
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'callerParentId' => 'CallerParentId',
        'callerType'     => 'CallerType',
        'callerUid'      => 'CallerUid',
        'createRealName' => 'CreateRealName',
        'endTime'        => 'EndTime',
        'openGroupId'    => 'OpenGroupId',
        'orderId'        => 'OrderId',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
        'taskStatus'     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->createRealName) {
            $res['CreateRealName'] = $this->createRealName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDdTaskOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CreateRealName'])) {
            $model->createRealName = $map['CreateRealName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
