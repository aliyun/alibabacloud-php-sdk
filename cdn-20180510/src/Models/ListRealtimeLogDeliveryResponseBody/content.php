<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryResponseBody\content\realtimeLogDeliveryInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var realtimeLogDeliveryInfo[]
     */
    public $realtimeLogDeliveryInfo;
    protected $_name = [
        'realtimeLogDeliveryInfo' => 'RealtimeLogDeliveryInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realtimeLogDeliveryInfo) {
            $res['RealtimeLogDeliveryInfo'] = [];
            if (null !== $this->realtimeLogDeliveryInfo && \is_array($this->realtimeLogDeliveryInfo)) {
                $n = 0;
                foreach ($this->realtimeLogDeliveryInfo as $item) {
                    $res['RealtimeLogDeliveryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealtimeLogDeliveryInfo'])) {
            if (!empty($map['RealtimeLogDeliveryInfo'])) {
                $model->realtimeLogDeliveryInfo = [];
                $n                              = 0;
                foreach ($map['RealtimeLogDeliveryInfo'] as $item) {
                    $model->realtimeLogDeliveryInfo[$n++] = null !== $item ? realtimeLogDeliveryInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
