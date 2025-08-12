<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeActiveMetricRuleListRequest extends Model
{
    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
            $model->product = $map['Product'];
        }

        return $model;
    }
}
