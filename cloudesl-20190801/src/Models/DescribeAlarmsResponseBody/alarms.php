<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeAlarmsResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeAlarmsResponseBody\alarms\alarmInfo;
use AlibabaCloud\Tea\Model;

class alarms extends Model
{
    /**
     * @var alarmInfo[]
     */
    public $alarmInfo;
    protected $_name = [
        'alarmInfo' => 'AlarmInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmInfo) {
            $res['AlarmInfo'] = [];
            if (null !== $this->alarmInfo && \is_array($this->alarmInfo)) {
                $n = 0;
                foreach ($this->alarmInfo as $item) {
                    $res['AlarmInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmInfo'])) {
            if (!empty($map['AlarmInfo'])) {
                $model->alarmInfo = [];
                $n                = 0;
                foreach ($map['AlarmInfo'] as $item) {
                    $model->alarmInfo[$n++] = null !== $item ? alarmInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
