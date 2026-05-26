<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponseBody\data\result\checkoutInfo;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponseBody\data\result\items;

class result extends Model
{
    /**
     * @var checkoutInfo
     */
    public $checkoutInfo;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'checkoutInfo' => 'CheckoutInfo',
        'items' => 'Items',
    ];

    public function validate()
    {
        if (null !== $this->checkoutInfo) {
            $this->checkoutInfo->validate();
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkoutInfo) {
            $res['CheckoutInfo'] = null !== $this->checkoutInfo ? $this->checkoutInfo->toArray($noStream) : $this->checkoutInfo;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckoutInfo'])) {
            $model->checkoutInfo = checkoutInfo::fromMap($map['CheckoutInfo']);
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
