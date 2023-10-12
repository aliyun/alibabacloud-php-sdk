<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock;
use AlibabaCloud\Tea\Model;

class ListIpBlocksResponseBody extends Model
{
    /**
     * @var ipBlock[]
     */
    public $ipBlock;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ipBlock'    => 'IpBlock',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipBlock) {
            $res['IpBlock'] = [];
            if (null !== $this->ipBlock && \is_array($this->ipBlock)) {
                $n = 0;
                foreach ($this->ipBlock as $item) {
                    $res['IpBlock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpBlocksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpBlock'])) {
            if (!empty($map['IpBlock'])) {
                $model->ipBlock = [];
                $n              = 0;
                foreach ($map['IpBlock'] as $item) {
                    $model->ipBlock[$n++] = null !== $item ? ipBlock::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
