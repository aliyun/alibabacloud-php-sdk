<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data entries.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @example 10000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'items'      => 'Items',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
