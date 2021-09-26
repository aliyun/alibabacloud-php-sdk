<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $productId;
    protected $_name = [
        'lang'      => 'Lang',
        'productId' => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
