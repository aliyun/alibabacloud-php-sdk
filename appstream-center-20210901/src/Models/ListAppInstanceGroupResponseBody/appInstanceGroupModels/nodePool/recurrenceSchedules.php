<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool\recurrenceSchedules\timerPeriods;

class recurrenceSchedules extends Model
{
    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var int[]
     */
    public $recurrenceValues;

    /**
     * @var timerPeriods[]
     */
    public $timerPeriods;
    protected $_name = [
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValues' => 'RecurrenceValues',
        'timerPeriods' => 'TimerPeriods',
    ];

    public function validate()
    {
        if (\is_array($this->recurrenceValues)) {
            Model::validateArray($this->recurrenceValues);
        }
        if (\is_array($this->timerPeriods)) {
            Model::validateArray($this->timerPeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValues) {
            if (\is_array($this->recurrenceValues)) {
                $res['RecurrenceValues'] = [];
                $n1 = 0;
                foreach ($this->recurrenceValues as $item1) {
                    $res['RecurrenceValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timerPeriods) {
            if (\is_array($this->timerPeriods)) {
                $res['TimerPeriods'] = [];
                $n1 = 0;
                foreach ($this->timerPeriods as $item1) {
                    $res['TimerPeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValues'])) {
            if (!empty($map['RecurrenceValues'])) {
                $model->recurrenceValues = [];
                $n1 = 0;
                foreach ($map['RecurrenceValues'] as $item1) {
                    $model->recurrenceValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimerPeriods'])) {
            if (!empty($map['TimerPeriods'])) {
                $model->timerPeriods = [];
                $n1 = 0;
                foreach ($map['TimerPeriods'] as $item1) {
                    $model->timerPeriods[$n1] = timerPeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
