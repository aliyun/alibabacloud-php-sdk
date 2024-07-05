<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
        'timeRange'  => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameTimes) {
            $res['FrameTimes'] = $this->frameTimes;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SceneElement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameTimes'])) {
            if (!empty($map['FrameTimes'])) {
                $model->frameTimes = $map['FrameTimes'];
            }
        }
        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = $map['TimeRange'];
            }
        }

        return $model;
    }
}
