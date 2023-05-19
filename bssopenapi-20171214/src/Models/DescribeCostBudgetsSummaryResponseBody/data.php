<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The site of the host.
     *
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The data that is returned.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The maximum number of entries that are returned.
     *
     * @example 5
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6NH0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostId'     => 'HostId',
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
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
