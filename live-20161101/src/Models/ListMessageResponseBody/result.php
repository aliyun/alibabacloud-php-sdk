<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponseBody\result\messageList;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var messageList[]
     */
    public $messageList;
    protected $_name = [
        'hasMore' => 'HasMore',
        'messageList' => 'MessageList',
    ];

    public function validate()
    {
        if (\is_array($this->messageList)) {
            Model::validateArray($this->messageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->messageList) {
            if (\is_array($this->messageList)) {
                $res['MessageList'] = [];
                $n1 = 0;
                foreach ($this->messageList as $item1) {
                    $res['MessageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n1 = 0;
                foreach ($map['MessageList'] as $item1) {
                    $model->messageList[$n1] = messageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
