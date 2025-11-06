<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO\alarmVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO\alarmVO\alarmDetails\alarmDetail;

class alarmDetails extends Model
{
    /**
     * @var alarmDetail[]
     */
    public $alarmDetail;
    protected $_name = [
        'alarmDetail' => 'AlarmDetail',
    ];

    public function validate()
    {
        if (\is_array($this->alarmDetail)) {
            Model::validateArray($this->alarmDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmDetail) {
            if (\is_array($this->alarmDetail)) {
                $res['AlarmDetail'] = [];
                $n1 = 0;
                foreach ($this->alarmDetail as $item1) {
                    $res['AlarmDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlarmDetail'])) {
            if (!empty($map['AlarmDetail'])) {
                $model->alarmDetail = [];
                $n1 = 0;
                foreach ($map['AlarmDetail'] as $item1) {
                    $model->alarmDetail[$n1] = alarmDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
