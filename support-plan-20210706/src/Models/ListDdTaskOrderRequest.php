<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ListDdTaskOrderRequest extends Model
{
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
     * @var bool
     */
    public $isUrgent;

    /**
     * @description openGroupId
     *
     * This parameter is required.
     * @example DAWNN14N
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description pageNo
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description pageSize
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
        'createRealName' => 'CreateRealName',
        'endTime'        => 'EndTime',
        'isUrgent'       => 'IsUrgent',
        'openGroupId'    => 'OpenGroupId',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'startTime'      => 'StartTime',
        'taskStatus'     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createRealName) {
            $res['CreateRealName'] = $this->createRealName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isUrgent) {
            $res['IsUrgent'] = $this->isUrgent;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CreateRealName'])) {
            $model->createRealName = $map['CreateRealName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsUrgent'])) {
            $model->isUrgent = $map['IsUrgent'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
