<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesResponseBody\layer7CCRules;

class DescribeLayer7CCRulesResponseBody extends Model
{
    /**
     * @var layer7CCRules[]
     */
    public $layer7CCRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'layer7CCRules' => 'Layer7CCRules',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->layer7CCRules)) {
            Model::validateArray($this->layer7CCRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layer7CCRules) {
            if (\is_array($this->layer7CCRules)) {
                $res['Layer7CCRules'] = [];
                $n1 = 0;
                foreach ($this->layer7CCRules as $item1) {
                    $res['Layer7CCRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Layer7CCRules'])) {
            if (!empty($map['Layer7CCRules'])) {
                $model->layer7CCRules = [];
                $n1 = 0;
                foreach ($map['Layer7CCRules'] as $item1) {
                    $model->layer7CCRules[$n1++] = layer7CCRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
