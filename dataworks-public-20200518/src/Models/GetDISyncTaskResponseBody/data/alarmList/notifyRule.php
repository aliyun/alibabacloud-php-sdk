<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\alarmList;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            if (!empty($map['Critical'])) {
                $model->critical = $map['Critical'];
            }
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = $map['Warning'];
            }
        }

        return $model;
    }
}
