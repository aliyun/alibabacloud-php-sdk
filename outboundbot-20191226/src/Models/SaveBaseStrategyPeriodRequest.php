<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveBaseStrategyPeriodRequest extends Model
{
    /**
     * @example fe51eca2-a904-4b4d-b3ff-31be334b9500
     *
     * @var string
     */
    public $entryId;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyWeekdays;

    /**
     * @example 2
     *
     * @var int
     */
    public $strategyLevel;

    /**
     * @example []
     *
     * @var string[]
     */
    public $workingTime;

    /**
     * @example [{\"beginTime\":\"09:00:00\",\"beginTimeMillis\":324000000000,\"endTime\":\"21:00:00\",\"endTimeMillis\":756000000000}]
     *
     * @var string
     */
    public $workingTimeFramesJson;
    protected $_name = [
        'entryId'               => 'EntryId',
        'onlyWeekdays'          => 'OnlyWeekdays',
        'strategyLevel'         => 'StrategyLevel',
        'workingTime'           => 'WorkingTime',
        'workingTimeFramesJson' => 'WorkingTimeFramesJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }
        if (null !== $this->onlyWeekdays) {
            $res['OnlyWeekdays'] = $this->onlyWeekdays;
        }
        if (null !== $this->strategyLevel) {
            $res['StrategyLevel'] = $this->strategyLevel;
        }
        if (null !== $this->workingTime) {
            $res['WorkingTime'] = $this->workingTime;
        }
        if (null !== $this->workingTimeFramesJson) {
            $res['WorkingTimeFramesJson'] = $this->workingTimeFramesJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBaseStrategyPeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }
        if (isset($map['OnlyWeekdays'])) {
            $model->onlyWeekdays = $map['OnlyWeekdays'];
        }
        if (isset($map['StrategyLevel'])) {
            $model->strategyLevel = $map['StrategyLevel'];
        }
        if (isset($map['WorkingTime'])) {
            if (!empty($map['WorkingTime'])) {
                $model->workingTime = $map['WorkingTime'];
            }
        }
        if (isset($map['WorkingTimeFramesJson'])) {
            $model->workingTimeFramesJson = $map['WorkingTimeFramesJson'];
        }

        return $model;
    }
}
