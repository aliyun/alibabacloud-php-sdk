<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ModifyLogAlarmTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string[]
     */
    public $toMailList;

    /**
     * @var string[]
     */
    public $dbIdList;

    /**
     * @var string[]
     */
    public $riskLevelList;
    protected $_name = [
        'regionId'      => 'RegionId',
        'instanceId'    => 'InstanceId',
        'taskName'      => 'TaskName',
        'taskId'        => 'TaskId',
        'toMailList'    => 'ToMailList',
        'dbIdList'      => 'DbIdList',
        'riskLevelList' => 'RiskLevelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->toMailList) {
            $res['ToMailList'] = $this->toMailList;
        }
        if (null !== $this->dbIdList) {
            $res['DbIdList'] = $this->dbIdList;
        }
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = $this->riskLevelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLogAlarmTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ToMailList'])) {
            if (!empty($map['ToMailList'])) {
                $model->toMailList = $map['ToMailList'];
            }
        }
        if (isset($map['DbIdList'])) {
            if (!empty($map['DbIdList'])) {
                $model->dbIdList = $map['DbIdList'];
            }
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = $map['RiskLevelList'];
            }
        }

        return $model;
    }
}
