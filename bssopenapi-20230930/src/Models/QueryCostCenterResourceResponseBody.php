<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceResponseBody\costCenterResourceDtoList;
use AlibabaCloud\Tea\Model;

class QueryCostCenterResourceResponseBody extends Model
{
    /**
     * @var costCenterResourceDtoList[]
     */
    public $costCenterResourceDtoList;

    /**
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @description This parameter is required.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 79EE7556-0CFD-44EB-9CD6-B3B526E3A85F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'costCenterResourceDtoList' => 'CostCenterResourceDtoList',
        'maxResults' => 'MaxResults',
        'metadata' => 'Metadata',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterResourceDtoList) {
            $res['CostCenterResourceDtoList'] = [];
            if (null !== $this->costCenterResourceDtoList && \is_array($this->costCenterResourceDtoList)) {
                $n = 0;
                foreach ($this->costCenterResourceDtoList as $item) {
                    $res['CostCenterResourceDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return QueryCostCenterResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterResourceDtoList'])) {
            if (!empty($map['CostCenterResourceDtoList'])) {
                $model->costCenterResourceDtoList = [];
                $n = 0;
                foreach ($map['CostCenterResourceDtoList'] as $item) {
                    $model->costCenterResourceDtoList[$n++] = null !== $item ? costCenterResourceDtoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
