<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynRequest\deliveryItemDetailDTOS;

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

    public function validate()
    {
        if (\is_array($this->deliveryItemDetailDTOS)) {
            Model::validateArray($this->deliveryItemDetailDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->deliveryItemDetailDTOS) {
            if (\is_array($this->deliveryItemDetailDTOS)) {
                $res['deliveryItemDetailDTOS'] = [];
                $n1 = 0;
                foreach ($this->deliveryItemDetailDTOS as $item1) {
                    $res['deliveryItemDetailDTOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['deliveryItemDetailDTOS'])) {
            if (!empty($map['deliveryItemDetailDTOS'])) {
                $model->deliveryItemDetailDTOS = [];
                $n1 = 0;
                foreach ($map['deliveryItemDetailDTOS'] as $item1) {
                    $model->deliveryItemDetailDTOS[$n1++] = deliveryItemDetailDTOS::fromMap($item1);
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
