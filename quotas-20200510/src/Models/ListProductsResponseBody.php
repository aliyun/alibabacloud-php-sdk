<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponseBody\productInfo;
use AlibabaCloud\Tea\Model;

class ListProductsResponseBody extends Model
{
    /**
     * @description The maximum number of records returned for the query.
     *
     * @example 4
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to mark the location where the query is ended. An empty value indicates that all the data is queried.
     *
     * @example 4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information of the cloud service.
     *
     * @var productInfo[]
     */
    public $productInfo;

    /**
     * @description The ID of the request.
     *
     * @example 1DA9C136-11BC-4C39-ADC6-B86276128072
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of records returned for the query.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'productInfo' => 'ProductInfo',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->productInfo) {
            $res['ProductInfo'] = [];
            if (null !== $this->productInfo && \is_array($this->productInfo)) {
                $n = 0;
                foreach ($this->productInfo as $item) {
                    $res['ProductInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListProductsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProductInfo'])) {
            if (!empty($map['ProductInfo'])) {
                $model->productInfo = [];
                $n                  = 0;
                foreach ($map['ProductInfo'] as $item) {
                    $model->productInfo[$n++] = null !== $item ? productInfo::fromMap($item) : $item;
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
