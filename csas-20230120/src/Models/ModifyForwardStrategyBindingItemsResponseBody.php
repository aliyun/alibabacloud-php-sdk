<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ModifyForwardStrategyBindingItemsResponseBody\forwardStrategyBindingItems;

class ModifyForwardStrategyBindingItemsResponseBody extends Model
{
    /**
     * @var forwardStrategyBindingItems
     */
    public $forwardStrategyBindingItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardStrategyBindingItems' => 'ForwardStrategyBindingItems',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->forwardStrategyBindingItems) {
            $this->forwardStrategyBindingItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardStrategyBindingItems) {
            $res['ForwardStrategyBindingItems'] = null !== $this->forwardStrategyBindingItems ? $this->forwardStrategyBindingItems->toArray($noStream) : $this->forwardStrategyBindingItems;
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
        if (isset($map['ForwardStrategyBindingItems'])) {
            $model->forwardStrategyBindingItems = forwardStrategyBindingItems::fromMap($map['ForwardStrategyBindingItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
