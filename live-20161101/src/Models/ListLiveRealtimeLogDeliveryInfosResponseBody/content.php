<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponseBody\content\realtimeLogDeliveryInfos;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var realtimeLogDeliveryInfos[]
     */
    public $realtimeLogDeliveryInfos;
    protected $_name = [
        'realtimeLogDeliveryInfos' => 'RealtimeLogDeliveryInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realtimeLogDeliveryInfos) {
            $res['RealtimeLogDeliveryInfos'] = [];
            if (null !== $this->realtimeLogDeliveryInfos && \is_array($this->realtimeLogDeliveryInfos)) {
                $n = 0;
                foreach ($this->realtimeLogDeliveryInfos as $item) {
                    $res['RealtimeLogDeliveryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RealtimeLogDeliveryInfos'])) {
            if (!empty($map['RealtimeLogDeliveryInfos'])) {
                $model->realtimeLogDeliveryInfos = [];
                $n                               = 0;
                foreach ($map['RealtimeLogDeliveryInfos'] as $item) {
                    $model->realtimeLogDeliveryInfos[$n++] = null !== $item ? realtimeLogDeliveryInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
