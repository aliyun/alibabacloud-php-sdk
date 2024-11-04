<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

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
        'endTime'   => 'endTime',
        'gmtOffset' => 'gmtOffset',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfWeek) {
            $res['dayOfWeek'] = $this->dayOfWeek;
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

    /**
     * @param array $map
     *
     * @return AlertRuleTimeSpan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dayOfWeek'])) {
            if (!empty($map['dayOfWeek'])) {
                $model->dayOfWeek = $map['dayOfWeek'];
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
