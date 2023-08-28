<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody\todoCards;
use AlibabaCloud\Tea\Model;

class QueryOrgTodoTasksResponseBody extends Model
{
    /**
     * @example 15
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var todoCards[]
     */
    public $todoCards;
    protected $_name = [
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'todoCards' => 'todoCards',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->todoCards) {
            $res['todoCards'] = [];
            if (null !== $this->todoCards && \is_array($this->todoCards)) {
                $n = 0;
                foreach ($this->todoCards as $item) {
                    $res['todoCards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrgTodoTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['todoCards'])) {
            if (!empty($map['todoCards'])) {
                $model->todoCards = [];
                $n                = 0;
                foreach ($map['todoCards'] as $item) {
                    $model->todoCards[$n++] = null !== $item ? todoCards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
