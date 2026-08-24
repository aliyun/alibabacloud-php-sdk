<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateVulScanScheduledStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $scanBeginTime;

    /**
     * @var string
     */
    public $scanEndTime;

    /**
     * @var string
     */
    public $scanFrequency;

    /**
     * @var string
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
    public $strategyName;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'matchMode' => 'MatchMode',
        'priority' => 'Priority',
        'scanBeginTime' => 'ScanBeginTime',
        'scanEndTime' => 'ScanEndTime',
        'scanFrequency' => 'ScanFrequency',
        'scanInterval' => 'ScanInterval',
        'status' => 'Status',
        'strategyDescription' => 'StrategyDescription',
        'strategyName' => 'StrategyName',
        'userGroupIds' => 'UserGroupIds',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
