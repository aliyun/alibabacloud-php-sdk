<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction\sections;

use AlibabaCloud\Tea\Model;

class productItems extends Model
{
    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $productRetailerId;
    protected $_name = [
        'productRetailerId' => 'ProductRetailerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productRetailerId) {
            $res['ProductRetailerId'] = $this->productRetailerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductRetailerId'])) {
            $model->productRetailerId = $map['ProductRetailerId'];
        }

        return $model;
    }
}
