<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsResponseBody\userGroupsMappings;

class ListUserGroupsMappingsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userGroupsMappings[]
     */
    public $userGroupsMappings;
    protected $_name = [
        'hasMore' => 'HasMore',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'userGroupsMappings' => 'UserGroupsMappings',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupsMappings)) {
            Model::validateArray($this->userGroupsMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userGroupsMappings)) {
                $res['UserGroupsMappings'] = [];
                $n1 = 0;
                foreach ($this->userGroupsMappings as $item1) {
                    $res['UserGroupsMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['UserGroupsMappings'] as $item1) {
                    $model->userGroupsMappings[$n1++] = userGroupsMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
