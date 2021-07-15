<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $fireTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $robotId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $completeCount;
    protected $_name = [
        'status'        => 'Status',
        'gmtCreate'     => 'GmtCreate',
        'totalCount'    => 'TotalCount',
        'fireTime'      => 'FireTime',
        'taskName'      => 'TaskName',
        'robotId'       => 'RobotId',
        'robotName'     => 'RobotName',
        'id'            => 'Id',
        'completeCount' => 'CompleteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->completeCount) {
            $res['CompleteCount'] = $this->completeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return record
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CompleteCount'])) {
            $model->completeCount = $map['CompleteCount'];
        }

        return $model;
    }
}
