<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ByTimeScalingRuleSpec extends Model
{
    /**
     * @description 重复执行定时任务的结束时间戳。单位为毫秒。
     *
     * @example 1639714800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 启动时间戳。单位为毫秒。
     *
     * This parameter is required.
     * @example 1639714634819
     *
     * @var int
     */
    public $launchTime;

    /**
     * @description 指定时间规则的执行类型。
     *
     * @example WEEKLY
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description 重复执行定时任务的数值。具体取值取决于 recurrenceType 设置。
     *
     * @example MON,FRI,SUN
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ByTimeScalingRuleSpec
     */
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
