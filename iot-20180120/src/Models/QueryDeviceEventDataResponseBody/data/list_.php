<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody\data\list_\eventInfo;

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
        if (\is_array($this->eventInfo)) {
            Model::validateArray($this->eventInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventInfo) {
            if (\is_array($this->eventInfo)) {
                $res['EventInfo'] = [];
                $n1 = 0;
                foreach ($this->eventInfo as $item1) {
                    $res['EventInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventInfo'])) {
            if (!empty($map['EventInfo'])) {
                $model->eventInfo = [];
                $n1 = 0;
                foreach ($map['EventInfo'] as $item1) {
                    $model->eventInfo[$n1] = eventInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
