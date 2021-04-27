<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody\data\list_\eventInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var eventInfo[]
     */
    public $eventInfo;
    protected $_name = [
        'eventInfo' => 'EventInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventInfo) {
            $res['EventInfo'] = [];
            if (null !== $this->eventInfo && \is_array($this->eventInfo)) {
                $n = 0;
                foreach ($this->eventInfo as $item) {
                    $res['EventInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventInfo'])) {
            if (!empty($map['EventInfo'])) {
                $model->eventInfo = [];
                $n                = 0;
                foreach ($map['EventInfo'] as $item) {
                    $model->eventInfo[$n++] = null !== $item ? eventInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
