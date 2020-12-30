<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryResponseBody\alarmHistoryList\emrAlarmHistory;
use AlibabaCloud\Tea\Model;

class alarmHistoryList extends Model
{
    /**
     * @var emrAlarmHistory[]
     */
    public $emrAlarmHistory;
    protected $_name = [
        'emrAlarmHistory' => 'EmrAlarmHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrAlarmHistory) {
            $res['EmrAlarmHistory'] = [];
            if (null !== $this->emrAlarmHistory && \is_array($this->emrAlarmHistory)) {
                $n = 0;
                foreach ($this->emrAlarmHistory as $item) {
                    $res['EmrAlarmHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrAlarmHistory'])) {
            if (!empty($map['EmrAlarmHistory'])) {
                $model->emrAlarmHistory = [];
                $n                      = 0;
                foreach ($map['EmrAlarmHistory'] as $item) {
                    $model->emrAlarmHistory[$n++] = null !== $item ? emrAlarmHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
