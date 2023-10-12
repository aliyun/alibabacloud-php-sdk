<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody\monitorItem;

use AlibabaCloud\Tea\Model;

class alarmRuleList extends Model
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
     * @example 10
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
     * @return alarmRuleList
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
