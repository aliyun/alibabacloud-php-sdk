<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetDistributionProductResult extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var DistributionProduct[]
     */
    public $products;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'products'  => 'products',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['products'] = [];
                $n1              = 0;
                foreach ($this->products as $item1) {
                    $res['products'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n1              = 0;
                foreach ($map['products'] as $item1) {
                    $model->products[$n1++] = DistributionProduct::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
