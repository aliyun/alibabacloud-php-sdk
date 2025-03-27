<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances;

class DescribeProductInstancesResponseBody extends Model
{
    /**
     * @var productInstances[]
     */
    public $productInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'productInstances' => 'ProductInstances',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->productInstances)) {
            Model::validateArray($this->productInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productInstances) {
            if (\is_array($this->productInstances)) {
                $res['ProductInstances'] = [];
                $n1 = 0;
                foreach ($this->productInstances as $item1) {
                    $res['ProductInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ProductInstances'])) {
            if (!empty($map['ProductInstances'])) {
                $model->productInstances = [];
                $n1 = 0;
                foreach ($map['ProductInstances'] as $item1) {
                    $model->productInstances[$n1++] = productInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
