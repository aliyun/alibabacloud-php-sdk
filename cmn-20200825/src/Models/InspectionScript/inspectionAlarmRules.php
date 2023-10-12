<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\InspectionScript;

use AlibabaCloud\Tea\Model;

class inspectionAlarmRules extends Model
{
    /**
     * @var string
     */
    public $alarmExpression;

    /**
     * @var string
     */
    public $alarmLevel;

    /**
     * @var string
     */
    public $alarmOperator;

    /**
     * @var string
     */
    public $alarmValue;
    protected $_name = [
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
