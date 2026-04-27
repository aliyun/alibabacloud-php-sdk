<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategyBindingItemsResponseBody\forwardStrategyBindingItemsList;

class ListForwardStrategyBindingItemsResponseBody extends Model
{
    /**
     * @var forwardStrategyBindingItemsList[]
     */
    public $forwardStrategyBindingItemsList;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardStrategyBindingItemsList' => 'ForwardStrategyBindingItemsList',
        'itemType' => 'ItemType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardStrategyBindingItemsList)) {
            Model::validateArray($this->forwardStrategyBindingItemsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardStrategyBindingItemsList) {
            if (\is_array($this->forwardStrategyBindingItemsList)) {
                $res['ForwardStrategyBindingItemsList'] = [];
                $n1 = 0;
                foreach ($this->forwardStrategyBindingItemsList as $item1) {
                    $res['ForwardStrategyBindingItemsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ForwardStrategyBindingItemsList'])) {
            if (!empty($map['ForwardStrategyBindingItemsList'])) {
                $model->forwardStrategyBindingItemsList = [];
                $n1 = 0;
                foreach ($map['ForwardStrategyBindingItemsList'] as $item1) {
                    $model->forwardStrategyBindingItemsList[$n1] = forwardStrategyBindingItemsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
