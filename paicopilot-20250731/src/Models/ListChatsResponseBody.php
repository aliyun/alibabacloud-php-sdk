<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;

class ListChatsResponseBody extends Model
{
    /**
     * @var Chat[]
     */
    public $chats;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'chats' => 'Chats',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->chats)) {
            Model::validateArray($this->chats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chats) {
            if (\is_array($this->chats)) {
                $res['Chats'] = [];
                $n1 = 0;
                foreach ($this->chats as $item1) {
                    $res['Chats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Chats'])) {
            if (!empty($map['Chats'])) {
                $model->chats = [];
                $n1 = 0;
                foreach ($map['Chats'] as $item1) {
                    $model->chats[$n1] = Chat::fromMap($item1);
                    ++$n1;
                }
            }
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
