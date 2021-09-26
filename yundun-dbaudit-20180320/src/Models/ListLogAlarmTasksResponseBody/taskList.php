<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListLogAlarmTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string[]
     */
    public $toMailList;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @var string[]
     */
    public $dbIdList;
    protected $_name = [
        'taskStatus'    => 'TaskStatus',
        'taskId'        => 'TaskId',
        'createTime'    => 'CreateTime',
        'taskName'      => 'TaskName',
        'toMailList'    => 'ToMailList',
        'riskLevelList' => 'RiskLevelList',
        'dbIdList'      => 'DbIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->toMailList) {
            $res['ToMailList'] = $this->toMailList;
        }
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = $this->riskLevelList;
        }
        if (null !== $this->dbIdList) {
            $res['DbIdList'] = $this->dbIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ToMailList'])) {
            if (!empty($map['ToMailList'])) {
                $model->toMailList = $map['ToMailList'];
            }
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = $map['RiskLevelList'];
            }
        }
        if (isset($map['DbIdList'])) {
            if (!empty($map['DbIdList'])) {
                $model->dbIdList = $map['DbIdList'];
            }
        }

        return $model;
    }
}
