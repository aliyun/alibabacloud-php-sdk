<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsResponseBody\alarmList\alarm;

use AlibabaCloud\Tea\Model;

class alarmActions extends Model
{
    /**
     * @var string[]
     */
    public $alarmAction;
    protected $_name = [
        'alarmAction' => 'AlarmAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmAction) {
            $res['AlarmAction'] = $this->alarmAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmAction'])) {
            if (!empty($map['AlarmAction'])) {
                $model->alarmAction = $map['AlarmAction'];
            }
        }

        return $model;
    }
}
