<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList;

use AlibabaCloud\Dara\Model;

class notifyRule extends Model
{
    /**
     * @var string[]
     */
    public $critical;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string[]
     */
    public $warning;
    protected $_name = [
        'critical' => 'Critical',
        'interval' => 'Interval',
        'warning'  => 'Warning',
    ];

    public function validate()
    {
        if (\is_array($this->critical)) {
            Model::validateArray($this->critical);
        }
        if (\is_array($this->warning)) {
            Model::validateArray($this->warning);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            if (\is_array($this->critical)) {
                $res['Critical'] = [];
                $n1              = 0;
                foreach ($this->critical as $item1) {
                    $res['Critical'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->warning) {
            if (\is_array($this->warning)) {
                $res['Warning'] = [];
                $n1             = 0;
                foreach ($this->warning as $item1) {
                    $res['Warning'][$n1++] = $item1;
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
        if (isset($map['Critical'])) {
            if (!empty($map['Critical'])) {
                $model->critical = [];
                $n1              = 0;
                foreach ($map['Critical'] as $item1) {
                    $model->critical[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = [];
                $n1             = 0;
                foreach ($map['Warning'] as $item1) {
                    $model->warning[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
