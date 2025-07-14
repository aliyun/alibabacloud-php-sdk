<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsResponseBody\vscs;
use AlibabaCloud\Tea\Model;

class ListVscsResponseBody extends Model
{
    /**
     * @description No response is returned. The TotalCount parameter is used.
     *
     * @example 0
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token. It can be used in the next request to retrieve a new page of results. If this parameter is empty, no next page exists.
     *
     * This parameter is required.
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 03668372-18FF-5959-98D9-6B36A4643C7A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of VSCs.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The VSCs.
     *
     * @var vscs[]
     */
    public $vscs;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vscs' => 'Vscs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->vscs) {
            $res['Vscs'] = [];
            if (null !== $this->vscs && \is_array($this->vscs)) {
                $n = 0;
                foreach ($this->vscs as $item) {
                    $res['Vscs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVscsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Vscs'])) {
            if (!empty($map['Vscs'])) {
                $model->vscs = [];
                $n = 0;
                foreach ($map['Vscs'] as $item) {
                    $model->vscs[$n++] = null !== $item ? vscs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
