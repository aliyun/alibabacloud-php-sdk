<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody\prefixLists;
use AlibabaCloud\Tea\Model;

class ListPrefixListsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If a value is returned for **NextToken**, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information about the prefix lists.
     *
     * @var prefixLists[]
     */
    public $prefixLists;

    /**
     * @description The ID of the request.
     *
     * @example DF72F7BB-5DFA-529C-887E-B0BB70D89C4F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'prefixLists' => 'PrefixLists',
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
        if (null !== $this->prefixLists) {
            $res['PrefixLists'] = [];
            if (null !== $this->prefixLists && \is_array($this->prefixLists)) {
                $n = 0;
                foreach ($this->prefixLists as $item) {
                    $res['PrefixLists'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPrefixListsResponseBody
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
        if (isset($map['PrefixLists'])) {
            if (!empty($map['PrefixLists'])) {
                $model->prefixLists = [];
                $n                  = 0;
                foreach ($map['PrefixLists'] as $item) {
                    $model->prefixLists[$n++] = null !== $item ? prefixLists::fromMap($item) : $item;
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
