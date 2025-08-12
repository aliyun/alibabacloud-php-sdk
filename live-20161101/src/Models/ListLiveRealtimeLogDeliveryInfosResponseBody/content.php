<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponseBody\content\realtimeLogDeliveryInfos;

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
        if (\is_array($this->realtimeLogDeliveryInfos)) {
            Model::validateArray($this->realtimeLogDeliveryInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realtimeLogDeliveryInfos) {
            if (\is_array($this->realtimeLogDeliveryInfos)) {
                $res['RealtimeLogDeliveryInfos'] = [];
                $n1 = 0;
                foreach ($this->realtimeLogDeliveryInfos as $item1) {
                    $res['RealtimeLogDeliveryInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RealtimeLogDeliveryInfos'])) {
            if (!empty($map['RealtimeLogDeliveryInfos'])) {
                $model->realtimeLogDeliveryInfos = [];
                $n1 = 0;
                foreach ($map['RealtimeLogDeliveryInfos'] as $item1) {
                    $model->realtimeLogDeliveryInfos[$n1] = realtimeLogDeliveryInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
