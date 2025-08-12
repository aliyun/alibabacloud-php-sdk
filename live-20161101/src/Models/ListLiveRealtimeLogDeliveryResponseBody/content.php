<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponseBody\content\realtimeLogDeliveryInfo;

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
        if (\is_array($this->realtimeLogDeliveryInfo)) {
            Model::validateArray($this->realtimeLogDeliveryInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realtimeLogDeliveryInfo) {
            if (\is_array($this->realtimeLogDeliveryInfo)) {
                $res['RealtimeLogDeliveryInfo'] = [];
                $n1 = 0;
                foreach ($this->realtimeLogDeliveryInfo as $item1) {
                    $res['RealtimeLogDeliveryInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RealtimeLogDeliveryInfo'])) {
            if (!empty($map['RealtimeLogDeliveryInfo'])) {
                $model->realtimeLogDeliveryInfo = [];
                $n1 = 0;
                foreach ($map['RealtimeLogDeliveryInfo'] as $item1) {
                    $model->realtimeLogDeliveryInfo[$n1] = realtimeLogDeliveryInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
