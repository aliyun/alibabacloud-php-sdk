<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class TimeTrigger extends Model
{
    /**
     * @description 结束时间戳。单位为毫秒。
     *
     * @example 1639714800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 定时任务触发操作失败后，在此时间内重试。单位为秒，取值范围：0~3600。
     *
     * @example 600
     *
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @description 启动时间。
     *
     * This parameter is required.
     *
     * @var string
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
     * - recurrenceType 取 MINUTELY 时，只能填一个数值，取值范围：1~1440。
     * - recurrenceType 取 HOURLY 时，只能填一个数值，取值范围：1~24。
     * - recurrenceType 取 DAILY 时，只能填一个数值，取值范围：1~31。
     * - recurrenceType 取 WEEKLY 时，可以填入多个值，填多个值时使用英文逗号（,）分隔。周一到周天分别用MON，TUE，WED，THU，FRI，SAT，SUN代替。 比如 MON,FRI,SUN 代表周一、周五、周天。
     * - recurrenceType 取 MONTHLY 时，格式为A-B或者A,B。A、B的取值范围为1~31，如果使用A-B时B必须大于A。
     *
     * @example MON,FRI,SUN
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description 开始时间戳。单位为毫秒。
     *
     * @example 1639714800000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime' => 'LaunchTime',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TimeTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
