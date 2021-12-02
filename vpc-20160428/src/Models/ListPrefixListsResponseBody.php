<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody\prefixLists;
use AlibabaCloud\Tea\Model;

class ListPrefixListsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var prefixLists[]
     */
    public $prefixLists;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
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
