<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveMetricRuleListRequest extends Model
{
    /**
     * @description The abbreviation of the cloud service that supports initiative alert rules.
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveMetricRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
