<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteAlarmsRequest;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->alarmIds)) {
            Model::validateArray($this->alarmIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmIds) {
            if (\is_array($this->alarmIds)) {
                $res['AlarmIds'] = [];
                $n1 = 0;
                foreach ($this->alarmIds as $item1) {
                    $res['AlarmIds'][$n1] = $item1;
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
        if (isset($map['AlarmIds'])) {
            if (!empty($map['AlarmIds'])) {
                $model->alarmIds = [];
                $n1 = 0;
                foreach ($map['AlarmIds'] as $item1) {
                    $model->alarmIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
