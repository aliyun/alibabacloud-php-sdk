<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponseBody\productInfo;
use AlibabaCloud\Tea\Model;

class ListProductsResponseBody extends Model
{
    /**
     * @var productInfo[]
     */
    public $productInfo;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'productInfo' => 'ProductInfo',
        'totalCount'  => 'TotalCount',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'maxResults'  => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productInfo) {
            $res['ProductInfo'] = [];
            if (null !== $this->productInfo && \is_array($this->productInfo)) {
                $n = 0;
                foreach ($this->productInfo as $item) {
                    $res['ProductInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductInfo'])) {
            if (!empty($map['ProductInfo'])) {
                $model->productInfo = [];
                $n                  = 0;
                foreach ($map['ProductInfo'] as $item) {
                    $model->productInfo[$n++] = null !== $item ? productInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
