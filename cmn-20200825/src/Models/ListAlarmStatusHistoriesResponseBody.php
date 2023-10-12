<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusHistoriesResponseBody\alarmStatusHistories;
use AlibabaCloud\Tea\Model;

class ListAlarmStatusHistoriesResponseBody extends Model
{
    /**
     * @var alarmStatusHistories[]
     */
    public $alarmStatusHistories;

    /**
     * @example 15292160-382F-46F2-B241-95EFB54BA434
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alarmStatusHistories' => 'AlarmStatusHistories',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatusHistories) {
            $res['AlarmStatusHistories'] = [];
            if (null !== $this->alarmStatusHistories && \is_array($this->alarmStatusHistories)) {
                $n = 0;
                foreach ($this->alarmStatusHistories as $item) {
                    $res['AlarmStatusHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmStatusHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatusHistories'])) {
            if (!empty($map['AlarmStatusHistories'])) {
                $model->alarmStatusHistories = [];
                $n                           = 0;
                foreach ($map['AlarmStatusHistories'] as $item) {
                    $model->alarmStatusHistories[$n++] = null !== $item ? alarmStatusHistories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
