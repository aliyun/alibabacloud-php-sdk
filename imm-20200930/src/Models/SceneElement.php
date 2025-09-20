<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SceneElement extends Model
{
    /**
     * @var int[]
     */
    public $frameTimes;

    /**
     * @var int[]
     */
    public $timeRange;
    protected $_name = [
        'frameTimes' => 'FrameTimes',
        'timeRange' => 'TimeRange',
    ];

    public function validate()
    {
        if (\is_array($this->frameTimes)) {
            Model::validateArray($this->frameTimes);
        }
        if (\is_array($this->timeRange)) {
            Model::validateArray($this->timeRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameTimes) {
            if (\is_array($this->frameTimes)) {
                $res['FrameTimes'] = [];
                $n1 = 0;
                foreach ($this->frameTimes as $item1) {
                    $res['FrameTimes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeRange) {
            if (\is_array($this->timeRange)) {
                $res['TimeRange'] = [];
                $n1 = 0;
                foreach ($this->timeRange as $item1) {
                    $res['TimeRange'][$n1] = $item1;
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
        if (isset($map['FrameTimes'])) {
            if (!empty($map['FrameTimes'])) {
                $model->frameTimes = [];
                $n1 = 0;
                foreach ($map['FrameTimes'] as $item1) {
                    $model->frameTimes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = [];
                $n1 = 0;
                foreach ($map['TimeRange'] as $item1) {
                    $model->timeRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
