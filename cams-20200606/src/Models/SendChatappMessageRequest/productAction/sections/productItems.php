<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction\sections;

use AlibabaCloud\Dara\Model;

class productItems extends Model
{
    /**
     * @var string
     */
    public $productRetailerId;
    protected $_name = [
        'productRetailerId' => 'ProductRetailerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productRetailerId) {
            $res['ProductRetailerId'] = $this->productRetailerId;
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
        if (isset($map['ProductRetailerId'])) {
            $model->productRetailerId = $map['ProductRetailerId'];
        }

        return $model;
    }
}
