<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmHistoryResponseBody\alarmHistoryList\alarmHistory;

class alarmHistoryList extends Model
{
    /**
     * @var alarmHistory[]
     */
    public $alarmHistory;
    protected $_name = [
        'alarmHistory' => 'AlarmHistory',
    ];

    public function validate()
    {
        if (\is_array($this->alarmHistory)) {
            Model::validateArray($this->alarmHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmHistory) {
            if (\is_array($this->alarmHistory)) {
                $res['AlarmHistory'] = [];
                $n1 = 0;
                foreach ($this->alarmHistory as $item1) {
                    $res['AlarmHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlarmHistory'])) {
            if (!empty($map['AlarmHistory'])) {
                $model->alarmHistory = [];
                $n1 = 0;
                foreach ($map['AlarmHistory'] as $item1) {
                    $model->alarmHistory[$n1++] = alarmHistory::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
