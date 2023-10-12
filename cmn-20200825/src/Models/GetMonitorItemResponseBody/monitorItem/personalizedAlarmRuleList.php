<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody\monitorItem;

use AlibabaCloud\Tea\Model;

class personalizedAlarmRuleList extends Model
{
    /**
     * @example CRITICAL
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example >=
     *
     * @var string
     */
    public $expression;

    /**
     * @example role
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example ASW
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @example 20
     *
     * @var string
     */
    public $value;

    /**
     * @example loss_rate
     *
     * @var string
     */
    public $variable;
    protected $_name = [
        'alarmStatus' => 'AlarmStatus',
        'expression'  => 'Expression',
        'fieldName'   => 'FieldName',
        'fieldValue'  => 'FieldValue',
        'value'       => 'Value',
        'variable'    => 'Variable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->variable) {
            $res['Variable'] = $this->variable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personalizedAlarmRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
