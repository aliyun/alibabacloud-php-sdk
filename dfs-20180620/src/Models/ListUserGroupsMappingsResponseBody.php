<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsResponseBody\userGroupsMappings;
use AlibabaCloud\Tea\Model;

class ListUserGroupsMappingsResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example user1
     *
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
     * @var userGroupsMappings[]
     */
    public $userGroupsMappings;
    protected $_name = [
        'hasMore'            => 'HasMore',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'userGroupsMappings' => 'UserGroupsMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userGroupsMappings) {
            $res['UserGroupsMappings'] = [];
            if (null !== $this->userGroupsMappings && \is_array($this->userGroupsMappings)) {
                $n = 0;
                foreach ($this->userGroupsMappings as $item) {
                    $res['UserGroupsMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsMappingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserGroupsMappings'])) {
            if (!empty($map['UserGroupsMappings'])) {
                $model->userGroupsMappings = [];
                $n                         = 0;
                foreach ($map['UserGroupsMappings'] as $item) {
                    $model->userGroupsMappings[$n++] = null !== $item ? userGroupsMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
