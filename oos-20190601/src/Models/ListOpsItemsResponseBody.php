<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListOpsItemsResponseBody\opsItems;
use AlibabaCloud\Tea\Model;

class ListOpsItemsResponseBody extends Model
{
    /**
     * @description The number of entries returned on each page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that can be used in the next request to retrieve a new page of results.
     *
     * @example gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The list of O\&M items.
     *
     * @var opsItems[]
     */
    public $opsItems;

    /**
     * @description The request ID.
     *
     * @example 113DD533-389C-5F83-9C69-F64D5BAB10B2
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
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'opsItems'   => 'OpsItems',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->opsItems) {
            $res['OpsItems'] = [];
            if (null !== $this->opsItems && \is_array($this->opsItems)) {
                $n = 0;
                foreach ($this->opsItems as $item) {
                    $res['OpsItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListOpsItemsResponseBody
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
        if (isset($map['OpsItems'])) {
            if (!empty($map['OpsItems'])) {
                $model->opsItems = [];
                $n               = 0;
                foreach ($map['OpsItems'] as $item) {
                    $model->opsItems[$n++] = null !== $item ? opsItems::fromMap($item) : $item;
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
