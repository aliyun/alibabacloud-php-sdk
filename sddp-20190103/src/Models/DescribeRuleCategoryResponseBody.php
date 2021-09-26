<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponseBody\productList;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponseBody\ruleList;
use AlibabaCloud\Tea\Model;

class DescribeRuleCategoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @var productList[]
     */
    public $productList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ruleList'    => 'RuleList',
        'productList' => 'ProductList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productList) {
            $res['ProductList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['ProductList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleCategoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['ProductList'] as $item) {
                    $model->productList[$n++] = null !== $item ? productList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
