<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleTimeSpan extends Model
{
    /**
     * @var int[]
     */
    public $dayOfWeek;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtOffset;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dayOfWeek' => 'dayOfWeek',
        'endTime' => 'endTime',
        'gmtOffset' => 'gmtOffset',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->dayOfWeek)) {
            Model::validateArray($this->dayOfWeek);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayOfWeek) {
            if (\is_array($this->dayOfWeek)) {
                $res['dayOfWeek'] = [];
                $n1 = 0;
                foreach ($this->dayOfWeek as $item1) {
                    $res['dayOfWeek'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->gmtOffset) {
            $res['gmtOffset'] = $this->gmtOffset;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['dayOfWeek'])) {
            if (!empty($map['dayOfWeek'])) {
                $model->dayOfWeek = [];
                $n1 = 0;
                foreach ($map['dayOfWeek'] as $item1) {
                    $model->dayOfWeek[$n1++] = $item1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['gmtOffset'])) {
            $model->gmtOffset = $map['gmtOffset'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
