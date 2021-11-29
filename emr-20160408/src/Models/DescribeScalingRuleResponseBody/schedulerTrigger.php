<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingRuleResponseBody;

use AlibabaCloud\Tea\Model;

class schedulerTrigger extends Model
{
    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var int
     */
    public $launchTime;

    /**
     * @var int
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;
    protected $_name = [
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime'           => 'LaunchTime',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
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
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
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
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
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
