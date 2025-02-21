<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec;

use AlibabaCloud\Dara\Model;

class byTimeScalingRuleSpec extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $launchTime;
    /**
     * @var string
     */
    public $recurrenceType;
    /**
     * @var string
     */
    public $recurrenceValue;
    protected $_name = [
        'endTime'         => 'EndTime',
        'launchTime'      => 'LaunchTime',
        'recurrenceType'  => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }

        return $model;
    }
}
