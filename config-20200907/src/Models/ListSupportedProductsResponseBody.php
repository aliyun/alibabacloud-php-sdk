<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody\products;
use AlibabaCloud\Tea\Model;

class ListSupportedProductsResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned for a single request. Valid values: 1 to 500.
     *
     * @example 100
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example D3AjqMNSy0ls7zBNCf3a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The cloud services that are supported by Cloud Config.
     *
     * @var products[]
     */
    public $products;

    /**
     * @description The request ID.
     *
     * @example 610B0276-ABEE-57DF-9C13-C2324FADA9D7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'products'   => 'Products',
        'requestId'  => 'RequestId',
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
        if (null !== $this->products) {
            $res['Products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['Products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSupportedProductsResponseBody
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
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n               = 0;
                foreach ($map['Products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
