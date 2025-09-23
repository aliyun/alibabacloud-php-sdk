<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody\switchListItems\switchLogItems;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody\switchListItems\switchStepItems;

class switchListItems extends Model
{
    /**
     * @var string[]
     */
    public $DBNodeCrashList;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventFinishTime;

    /**
     * @var string
     */
    public $eventStartTime;

    /**
     * @var string
     */
    public $faultInjectionType;

    /**
     * @var string
     */
    public $simulateListId;

    /**
     * @var string
     */
    public $simulateMode;

    /**
     * @var string
     */
    public $simulateStatus;

    /**
     * @var string
     */
    public $simulateTaskId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var switchLogItems[]
     */
    public $switchLogItems;

    /**
     * @var switchStepItems[]
     */
    public $switchStepItems;
    protected $_name = [
        'DBNodeCrashList' => 'DBNodeCrashList',
        'endTime' => 'EndTime',
        'eventFinishTime' => 'EventFinishTime',
        'eventStartTime' => 'EventStartTime',
        'faultInjectionType' => 'FaultInjectionType',
        'simulateListId' => 'SimulateListId',
        'simulateMode' => 'SimulateMode',
        'simulateStatus' => 'SimulateStatus',
        'simulateTaskId' => 'SimulateTaskId',
        'startTime' => 'StartTime',
        'switchLogItems' => 'SwitchLogItems',
        'switchStepItems' => 'SwitchStepItems',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeCrashList)) {
            Model::validateArray($this->DBNodeCrashList);
        }
        if (\is_array($this->switchLogItems)) {
            Model::validateArray($this->switchLogItems);
        }
        if (\is_array($this->switchStepItems)) {
            Model::validateArray($this->switchStepItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeCrashList) {
            if (\is_array($this->DBNodeCrashList)) {
                $res['DBNodeCrashList'] = [];
                $n1 = 0;
                foreach ($this->DBNodeCrashList as $item1) {
                    $res['DBNodeCrashList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventFinishTime) {
            $res['EventFinishTime'] = $this->eventFinishTime;
        }

        if (null !== $this->eventStartTime) {
            $res['EventStartTime'] = $this->eventStartTime;
        }

        if (null !== $this->faultInjectionType) {
            $res['FaultInjectionType'] = $this->faultInjectionType;
        }

        if (null !== $this->simulateListId) {
            $res['SimulateListId'] = $this->simulateListId;
        }

        if (null !== $this->simulateMode) {
            $res['SimulateMode'] = $this->simulateMode;
        }

        if (null !== $this->simulateStatus) {
            $res['SimulateStatus'] = $this->simulateStatus;
        }

        if (null !== $this->simulateTaskId) {
            $res['SimulateTaskId'] = $this->simulateTaskId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->switchLogItems) {
            if (\is_array($this->switchLogItems)) {
                $res['SwitchLogItems'] = [];
                $n1 = 0;
                foreach ($this->switchLogItems as $item1) {
                    $res['SwitchLogItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->switchStepItems) {
            if (\is_array($this->switchStepItems)) {
                $res['SwitchStepItems'] = [];
                $n1 = 0;
                foreach ($this->switchStepItems as $item1) {
                    $res['SwitchStepItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBNodeCrashList'])) {
            if (!empty($map['DBNodeCrashList'])) {
                $model->DBNodeCrashList = [];
                $n1 = 0;
                foreach ($map['DBNodeCrashList'] as $item1) {
                    $model->DBNodeCrashList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventFinishTime'])) {
            $model->eventFinishTime = $map['EventFinishTime'];
        }

        if (isset($map['EventStartTime'])) {
            $model->eventStartTime = $map['EventStartTime'];
        }

        if (isset($map['FaultInjectionType'])) {
            $model->faultInjectionType = $map['FaultInjectionType'];
        }

        if (isset($map['SimulateListId'])) {
            $model->simulateListId = $map['SimulateListId'];
        }

        if (isset($map['SimulateMode'])) {
            $model->simulateMode = $map['SimulateMode'];
        }

        if (isset($map['SimulateStatus'])) {
            $model->simulateStatus = $map['SimulateStatus'];
        }

        if (isset($map['SimulateTaskId'])) {
            $model->simulateTaskId = $map['SimulateTaskId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SwitchLogItems'])) {
            if (!empty($map['SwitchLogItems'])) {
                $model->switchLogItems = [];
                $n1 = 0;
                foreach ($map['SwitchLogItems'] as $item1) {
                    $model->switchLogItems[$n1] = switchLogItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SwitchStepItems'])) {
            if (!empty($map['SwitchStepItems'])) {
                $model->switchStepItems = [];
                $n1 = 0;
                foreach ($map['SwitchStepItems'] as $item1) {
                    $model->switchStepItems[$n1] = switchStepItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
