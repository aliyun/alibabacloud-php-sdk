<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest\nodePoolStrategy;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest\nodePoolStrategy\recurrenceSchedules\timerPeriods;
use AlibabaCloud\Tea\Model;

class recurrenceSchedules extends Model
{
    /**
     * @description 策略执行周期的类型。必须同时指定`RecurrenceType`和`RecurrenceValues`。
     *
     * @example weekly
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description 策略执行周期的数值列表。
     *
     * @var int[]
     */
    public $recurrenceValues;

    /**
     * @description 策略执行周期的时间段列表。时间段设置要求：
     *
     * - 所有时间段累计不跨天。
     * @var timerPeriods[]
     */
    public $timerPeriods;
    protected $_name = [
        'recurrenceType'   => 'RecurrenceType',
        'recurrenceValues' => 'RecurrenceValues',
        'timerPeriods'     => 'TimerPeriods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValues) {
            $res['RecurrenceValues'] = $this->recurrenceValues;
        }
        if (null !== $this->timerPeriods) {
            $res['TimerPeriods'] = [];
            if (null !== $this->timerPeriods && \is_array($this->timerPeriods)) {
                $n = 0;
                foreach ($this->timerPeriods as $item) {
                    $res['TimerPeriods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recurrenceSchedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValues'])) {
            if (!empty($map['RecurrenceValues'])) {
                $model->recurrenceValues = $map['RecurrenceValues'];
            }
        }
        if (isset($map['TimerPeriods'])) {
            if (!empty($map['TimerPeriods'])) {
                $model->timerPeriods = [];
                $n                   = 0;
                foreach ($map['TimerPeriods'] as $item) {
                    $model->timerPeriods[$n++] = null !== $item ? timerPeriods::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
