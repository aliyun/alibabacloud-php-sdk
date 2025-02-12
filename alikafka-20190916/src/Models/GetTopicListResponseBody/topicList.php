<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO;

class topicList extends Model
{
    /**
     * @var topicVO[]
     */
    public $topicVO;
    protected $_name = [
        'topicVO' => 'TopicVO',
    ];

    public function validate()
    {
        if (\is_array($this->topicVO)) {
            Model::validateArray($this->topicVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicVO) {
            if (\is_array($this->topicVO)) {
                $res['TopicVO'] = [];
                $n1             = 0;
                foreach ($this->topicVO as $item1) {
                    $res['TopicVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopicVO'])) {
            if (!empty($map['TopicVO'])) {
                $model->topicVO = [];
                $n1             = 0;
                foreach ($map['TopicVO'] as $item1) {
                    $model->topicVO[$n1++] = topicVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
