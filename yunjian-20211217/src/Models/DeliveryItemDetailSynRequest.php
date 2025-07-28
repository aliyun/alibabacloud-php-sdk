<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynRequest\deliveryItemDetailDTOS;
use AlibabaCloud\Tea\Model;

class DeliveryItemDetailSynRequest extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var deliveryItemDetailDTOS[]
     */
    public $deliveryItemDetailDTOS;

    /**
     * @var string
     */
    public $deliveryItemId;

    /**
     * @var string
     */
    public $deliveryPlanId;
    protected $_name = [
        'channel' => 'channel',
        'deliveryItemDetailDTOS' => 'deliveryItemDetailDTOS',
        'deliveryItemId' => 'deliveryItemId',
        'deliveryPlanId' => 'deliveryPlanId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->deliveryItemDetailDTOS) {
            $res['deliveryItemDetailDTOS'] = [];
            if (null !== $this->deliveryItemDetailDTOS && \is_array($this->deliveryItemDetailDTOS)) {
                $n = 0;
                foreach ($this->deliveryItemDetailDTOS as $item) {
                    $res['deliveryItemDetailDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deliveryItemId) {
            $res['deliveryItemId'] = $this->deliveryItemId;
        }
        if (null !== $this->deliveryPlanId) {
            $res['deliveryPlanId'] = $this->deliveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeliveryItemDetailSynRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['deliveryItemDetailDTOS'])) {
            if (!empty($map['deliveryItemDetailDTOS'])) {
                $model->deliveryItemDetailDTOS = [];
                $n = 0;
                foreach ($map['deliveryItemDetailDTOS'] as $item) {
                    $model->deliveryItemDetailDTOS[$n++] = null !== $item ? deliveryItemDetailDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['deliveryItemId'])) {
            $model->deliveryItemId = $map['deliveryItemId'];
        }
        if (isset($map['deliveryPlanId'])) {
            $model->deliveryPlanId = $map['deliveryPlanId'];
        }

        return $model;
    }
}
