<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress;

use AlibabaCloud\Tea\Model;

class topicList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList[]
     */
    public $topicList;
    protected $_name = [
        'topicList' => 'TopicList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicList) {
            $res['TopicList'] = [];
            if (null !== $this->topicList && \is_array($this->topicList)) {
                $n = 0;
                foreach ($this->topicList as $item) {
                    $res['TopicList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicList'])) {
            if (!empty($map['TopicList'])) {
                $model->topicList = [];
                $n                = 0;
                foreach ($map['TopicList'] as $item) {
                    $model->topicList[$n++] = null !== $item ? \AlibabaCloud\SDK\Alikafka\V20181015\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
