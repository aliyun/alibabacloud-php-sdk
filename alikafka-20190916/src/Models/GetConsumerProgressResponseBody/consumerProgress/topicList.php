<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList;

class topicList extends Model
{
    /**
     * @var topicList[]
     */
    public $topicList;
    protected $_name = [
        'topicList' => 'TopicList',
    ];

    public function validate()
    {
        if (\is_array($this->topicList)) {
            Model::validateArray($this->topicList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicList) {
            if (\is_array($this->topicList)) {
                $res['TopicList'] = [];
                $n1 = 0;
                foreach ($this->topicList as $item1) {
                    $res['TopicList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopicList'])) {
            if (!empty($map['TopicList'])) {
                $model->topicList = [];
                $n1 = 0;
                foreach ($map['TopicList'] as $item1) {
                    $model->topicList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
