<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class record extends Model
{
    /**
     * @var int
     */
    public $completeCount;

    /**
     * @var string
     */
    public $fireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $robotId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'completeCount' => 'CompleteCount',
        'fireTime' => 'FireTime',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'robotId' => 'RobotId',
        'robotName' => 'RobotName',
        'status' => 'Status',
        'taskName' => 'TaskName',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeCount) {
            $res['CompleteCount'] = $this->completeCount;
        }

        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }

        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CompleteCount'])) {
            $model->completeCount = $map['CompleteCount'];
        }

        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }

        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
