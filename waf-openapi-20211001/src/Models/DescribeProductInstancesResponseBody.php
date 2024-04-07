<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances;
use AlibabaCloud\Tea\Model;

class DescribeProductInstancesResponseBody extends Model
{
    /**
     * @description The information about the instances.
     *
     * @var productInstances[]
     */
    public $productInstances;

    /**
     * @description The ID of the request.
     *
     * @example FDCBAE1E-2B3F-5C13-AD20-844B9473****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'productInstances' => 'ProductInstances',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productInstances) {
            $res['ProductInstances'] = [];
            if (null !== $this->productInstances && \is_array($this->productInstances)) {
                $n = 0;
                foreach ($this->productInstances as $item) {
                    $res['ProductInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeProductInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductInstances'])) {
            if (!empty($map['ProductInstances'])) {
                $model->productInstances = [];
                $n                       = 0;
                foreach ($map['ProductInstances'] as $item) {
                    $model->productInstances[$n++] = null !== $item ? productInstances::fromMap($item) : $item;
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
