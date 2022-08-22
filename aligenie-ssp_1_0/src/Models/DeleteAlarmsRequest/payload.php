<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var int[]
     */
    public $alarmIds;
    protected $_name = [
        'alarmIds' => 'AlarmIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmIds) {
            $res['AlarmIds'] = $this->alarmIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmIds'])) {
            if (!empty($map['AlarmIds'])) {
                $model->alarmIds = $map['AlarmIds'];
            }
        }

        return $model;
    }
}
