<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesResponseBody\memories;
use AlibabaCloud\Tea\Model;

class ListMemoriesResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var memories[]
     */
    public $memories;

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
     * @example 105
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example llm-us9hjmt32nysdm5v
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'maxResults'  => 'maxResults',
        'memories'    => 'memories',
        'nextToken'   => 'nextToken',
        'requestId'   => 'requestId',
        'totalCount'  => 'totalCount',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->memories) {
            $res['memories'] = [];
            if (null !== $this->memories && \is_array($this->memories)) {
                $n = 0;
                foreach ($this->memories as $item) {
                    $res['memories'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMemoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['memories'])) {
            if (!empty($map['memories'])) {
                $model->memories = [];
                $n               = 0;
                foreach ($map['memories'] as $item) {
                    $model->memories[$n++] = null !== $item ? memories::fromMap($item) : $item;
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
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
