<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product;

class data extends Model
{
    /**
     * @var product
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
        if (null !== $this->product) {
            $this->product->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = null !== $this->product ? $this->product->toArray($noStream) : $this->product;
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
        if (isset($map['Product'])) {
            $model->product = product::fromMap($map['Product']);
        }

        return $model;
    }
}
