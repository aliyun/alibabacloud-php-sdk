<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponseBody\result\messageList;
use AlibabaCloud\Tea\Model;

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
        'hasMore'     => 'HasMore',
        'messageList' => 'MessageList',
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
        if (null !== $this->messageList) {
            $res['MessageList'] = [];
            if (null !== $this->messageList && \is_array($this->messageList)) {
                $n = 0;
                foreach ($this->messageList as $item) {
                    $res['MessageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n                  = 0;
                foreach ($map['MessageList'] as $item) {
                    $model->messageList[$n++] = null !== $item ? messageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
