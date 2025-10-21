<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\UpdateTopicRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateTopicRequest\bodyData\topicExampleInfoList;

class bodyData extends Model
{
    /**
     * @var topicExampleInfoList[]
     */
    public $topicExampleInfoList;
    protected $_name = [
        'topicExampleInfoList' => 'TopicExampleInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->topicExampleInfoList)) {
            Model::validateArray($this->topicExampleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicExampleInfoList) {
            if (\is_array($this->topicExampleInfoList)) {
                $res['TopicExampleInfoList'] = [];
                $n1 = 0;
                foreach ($this->topicExampleInfoList as $item1) {
                    $res['TopicExampleInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopicExampleInfoList'])) {
            if (!empty($map['TopicExampleInfoList'])) {
                $model->topicExampleInfoList = [];
                $n1 = 0;
                foreach ($map['TopicExampleInfoList'] as $item1) {
                    $model->topicExampleInfoList[$n1] = topicExampleInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
