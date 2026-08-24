<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanScheduledStrategyResponseBody\customMatchGroup;

class UpdateVulScanScheduledStrategyResponseBody extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var customMatchGroup[]
     */
    public $customMatchGroup;

    /**
     * @var int
     */
    public $lastTriggerTime;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string[]
     */
    public $matchTargetIds;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scanBeginTime;

    /**
     * @var int
     */
    public $scanEndTime;

    /**
     * @var string
     */
    public $scanFrequency;

    /**
     * @var int
     */
    public $scanInterval;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategyDescription;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'createTime' => 'CreateTime',
        'customMatchGroup' => 'CustomMatchGroup',
        'lastTriggerTime' => 'LastTriggerTime',
        'matchMode' => 'MatchMode',
        'matchTargetIds' => 'MatchTargetIds',
        'priority' => 'Priority',
        'requestId' => 'RequestId',
        'scanBeginTime' => 'ScanBeginTime',
        'scanEndTime' => 'ScanEndTime',
        'scanFrequency' => 'ScanFrequency',
        'scanInterval' => 'ScanInterval',
        'status' => 'Status',
        'strategyDescription' => 'StrategyDescription',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->customMatchGroup)) {
            Model::validateArray($this->customMatchGroup);
        }
        if (\is_array($this->matchTargetIds)) {
            Model::validateArray($this->matchTargetIds);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customMatchGroup) {
            if (\is_array($this->customMatchGroup)) {
                $res['CustomMatchGroup'] = [];
                $n1 = 0;
                foreach ($this->customMatchGroup as $item1) {
                    $res['CustomMatchGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastTriggerTime) {
            $res['LastTriggerTime'] = $this->lastTriggerTime;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->matchTargetIds) {
            if (\is_array($this->matchTargetIds)) {
                $res['MatchTargetIds'] = [];
                $n1 = 0;
                foreach ($this->matchTargetIds as $item1) {
                    $res['MatchTargetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scanBeginTime) {
            $res['ScanBeginTime'] = $this->scanBeginTime;
        }

        if (null !== $this->scanEndTime) {
            $res['ScanEndTime'] = $this->scanEndTime;
        }

        if (null !== $this->scanFrequency) {
            $res['ScanFrequency'] = $this->scanFrequency;
        }

        if (null !== $this->scanInterval) {
            $res['ScanInterval'] = $this->scanInterval;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategyDescription) {
            $res['StrategyDescription'] = $this->strategyDescription;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = $item1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomMatchGroup'])) {
            if (!empty($map['CustomMatchGroup'])) {
                $model->customMatchGroup = [];
                $n1 = 0;
                foreach ($map['CustomMatchGroup'] as $item1) {
                    $model->customMatchGroup[$n1] = customMatchGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastTriggerTime'])) {
            $model->lastTriggerTime = $map['LastTriggerTime'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['MatchTargetIds'])) {
            if (!empty($map['MatchTargetIds'])) {
                $model->matchTargetIds = [];
                $n1 = 0;
                foreach ($map['MatchTargetIds'] as $item1) {
                    $model->matchTargetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScanBeginTime'])) {
            $model->scanBeginTime = $map['ScanBeginTime'];
        }

        if (isset($map['ScanEndTime'])) {
            $model->scanEndTime = $map['ScanEndTime'];
        }

        if (isset($map['ScanFrequency'])) {
            $model->scanFrequency = $map['ScanFrequency'];
        }

        if (isset($map['ScanInterval'])) {
            $model->scanInterval = $map['ScanInterval'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrategyDescription'])) {
            $model->strategyDescription = $map['StrategyDescription'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
