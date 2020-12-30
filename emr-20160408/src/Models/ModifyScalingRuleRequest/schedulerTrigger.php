<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class schedulerTrigger extends Model
{
    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $launchTime;
    protected $_name = [
        'launchExpirationTime' => 'LaunchExpirationTime',
        'recurrenceValue'      => 'RecurrenceValue',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'launchTime'           => 'LaunchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }

        return $model;
    }
}
