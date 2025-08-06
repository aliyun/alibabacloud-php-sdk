<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children;

class GetSpaceDirectoriesResponseBody extends Model
{
    /**
     * @var children[]
     */
    public $children;

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
    protected $_name = [
        'children' => 'children',
        'hasMore' => 'hasMore',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1] = children::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
