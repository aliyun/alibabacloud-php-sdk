<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SaveBaseStrategyPeriodRequest extends Model
{
    /**
     * @var string
     */
    public $entryId;

    /**
     * @var bool
     */
    public $onlyWeekdays;

    /**
     * @var bool
     */
    public $onlyWorkdays;

    /**
     * @var int
     */
    public $strategyLevel;

    /**
     * @var string[]
     */
    public $workingTime;

    /**
     * @var string
     */
    public $workingTimeFramesJson;
    protected $_name = [
        'entryId' => 'EntryId',
        'onlyWeekdays' => 'OnlyWeekdays',
        'onlyWorkdays' => 'OnlyWorkdays',
        'strategyLevel' => 'StrategyLevel',
        'workingTime' => 'WorkingTime',
        'workingTimeFramesJson' => 'WorkingTimeFramesJson',
    ];

    public function validate()
    {
        if (\is_array($this->workingTime)) {
            Model::validateArray($this->workingTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }

        if (null !== $this->onlyWeekdays) {
            $res['OnlyWeekdays'] = $this->onlyWeekdays;
        }

        if (null !== $this->onlyWorkdays) {
            $res['OnlyWorkdays'] = $this->onlyWorkdays;
        }

        if (null !== $this->strategyLevel) {
            $res['StrategyLevel'] = $this->strategyLevel;
        }

        if (null !== $this->workingTime) {
            if (\is_array($this->workingTime)) {
                $res['WorkingTime'] = [];
                $n1 = 0;
                foreach ($this->workingTime as $item1) {
                    $res['WorkingTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workingTimeFramesJson) {
            $res['WorkingTimeFramesJson'] = $this->workingTimeFramesJson;
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
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }

        if (isset($map['OnlyWeekdays'])) {
            $model->onlyWeekdays = $map['OnlyWeekdays'];
        }

        if (isset($map['OnlyWorkdays'])) {
            $model->onlyWorkdays = $map['OnlyWorkdays'];
        }

        if (isset($map['StrategyLevel'])) {
            $model->strategyLevel = $map['StrategyLevel'];
        }

        if (isset($map['WorkingTime'])) {
            if (!empty($map['WorkingTime'])) {
                $model->workingTime = [];
                $n1 = 0;
                foreach ($map['WorkingTime'] as $item1) {
                    $model->workingTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkingTimeFramesJson'])) {
            $model->workingTimeFramesJson = $map['WorkingTimeFramesJson'];
        }

        return $model;
    }
}
