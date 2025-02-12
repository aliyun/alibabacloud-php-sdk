<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Dara\Model;

class ListDdTaskOrderRequest extends Model
{
    /**
     * @var string
     */
    public $createRealName;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var bool
     */
    public $isUrgent;
    /**
     * @var string
     */
    public $openGroupId;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
