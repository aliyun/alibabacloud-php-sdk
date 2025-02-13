<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody\todoCards;

class QueryOrgTodoTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (\is_array($this->todoCards)) {
            Model::validateArray($this->todoCards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->todoCards) {
            if (\is_array($this->todoCards)) {
                $res['todoCards'] = [];
                $n1               = 0;
                foreach ($this->todoCards as $item1) {
                    $res['todoCards'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['todoCards'])) {
            if (!empty($map['todoCards'])) {
                $model->todoCards = [];
                $n1               = 0;
                foreach ($map['todoCards'] as $item1) {
                    $model->todoCards[$n1++] = todoCards::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
