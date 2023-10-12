<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListTasksHistoriesResponseBody\inspectionTasks;

use AlibabaCloud\Tea\Model;

class inspectionAlarmRules extends Model
{
    /**
     * @example 11
     *
     * @var string
     */
    public $actualValue;

    /**
     * @example A>10
     *
     * @var string
     */
    public $alarmExpression;

    /**
     * @example warning
     *
     * @var string
     */
    public $alarmLevel;

    /**
     * @example >
     *
     * @var string
     */
    public $alarmOperator;

    /**
     * @example 10
     *
     * @var string
     */
    public $alarmValue;
    protected $_name = [
        'actualValue'     => 'ActualValue',
        'alarmExpression' => 'AlarmExpression',
        'alarmLevel'      => 'AlarmLevel',
        'alarmOperator'   => 'AlarmOperator',
        'alarmValue'      => 'AlarmValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['ActualValue'] = $this->actualValue;
        }
        if (null !== $this->alarmExpression) {
            $res['AlarmExpression'] = $this->alarmExpression;
        }
        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }
        if (null !== $this->alarmOperator) {
            $res['AlarmOperator'] = $this->alarmOperator;
        }
        if (null !== $this->alarmValue) {
            $res['AlarmValue'] = $this->alarmValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionAlarmRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }
        if (isset($map['AlarmExpression'])) {
            $model->alarmExpression = $map['AlarmExpression'];
        }
        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }
        if (isset($map['AlarmOperator'])) {
            $model->alarmOperator = $map['AlarmOperator'];
        }
        if (isset($map['AlarmValue'])) {
            $model->alarmValue = $map['AlarmValue'];
        }

        return $model;
    }
}
