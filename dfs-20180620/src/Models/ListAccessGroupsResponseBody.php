<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessGroupsResponseBody\accessGroups;
use AlibabaCloud\Tea\Model;

class ListAccessGroupsResponseBody extends Model
{
    /**
     * @var accessGroups[]
     */
    public $accessGroups;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example 55C5FFD6-BF99-41BD-9C66-FFF39189****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessGroups' => 'AccessGroups',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroups) {
            $res['AccessGroups'] = [];
            if (null !== $this->accessGroups && \is_array($this->accessGroups)) {
                $n = 0;
                foreach ($this->accessGroups as $item) {
                    $res['AccessGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListAccessGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroups'])) {
            if (!empty($map['AccessGroups'])) {
                $model->accessGroups = [];
                $n = 0;
                foreach ($map['AccessGroups'] as $item) {
                    $model->accessGroups[$n++] = null !== $item ? accessGroups::fromMap($item) : $item;
                }
            }
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
