<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest\accessTimeRangeConfig;

use AlibabaCloud\Dara\Model;

class effectiveTime extends Model
{
    /**
     * @var int[]
     */
    public $days;

    /**
     * @var int[]
     */
    public $hours;
    protected $_name = [
        'days' => 'Days',
        'hours' => 'Hours',
    ];

    public function validate()
    {
        if (\is_array($this->days)) {
            Model::validateArray($this->days);
        }
        if (\is_array($this->hours)) {
            Model::validateArray($this->hours);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            if (\is_array($this->days)) {
                $res['Days'] = [];
                $n1 = 0;
                foreach ($this->days as $item1) {
                    $res['Days'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hours) {
            if (\is_array($this->hours)) {
                $res['Hours'] = [];
                $n1 = 0;
                foreach ($this->hours as $item1) {
                    $res['Hours'][$n1] = $item1;
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
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = [];
                $n1 = 0;
                foreach ($map['Days'] as $item1) {
                    $model->days[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Hours'])) {
            if (!empty($map['Hours'])) {
                $model->hours = [];
                $n1 = 0;
                foreach ($map['Hours'] as $item1) {
                    $model->hours[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
