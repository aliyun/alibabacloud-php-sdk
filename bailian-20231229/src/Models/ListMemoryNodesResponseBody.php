<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponseBody\memoryNodes;
use AlibabaCloud\Tea\Model;

class ListMemoryNodesResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var memoryNodes[]
     */
    public $memoryNodes;

    /**
     * @example dc270401186b433f975d7e1faaa34e0e
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 6a71f2d9-f1c9-913b-818b-114029103cad
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
        'maxResults' => 'maxResults',
        'memoryNodes' => 'memoryNodes',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->memoryNodes) {
            $res['memoryNodes'] = [];
            if (null !== $this->memoryNodes && \is_array($this->memoryNodes)) {
                $n = 0;
                foreach ($this->memoryNodes as $item) {
                    $res['memoryNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMemoryNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['memoryNodes'])) {
            if (!empty($map['memoryNodes'])) {
                $model->memoryNodes = [];
                $n = 0;
                foreach ($map['memoryNodes'] as $item) {
                    $model->memoryNodes[$n++] = null !== $item ? memoryNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
