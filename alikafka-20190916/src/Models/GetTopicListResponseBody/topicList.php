<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicVO) {
            $res['TopicVO'] = [];
            if (null !== $this->topicVO && \is_array($this->topicVO)) {
                $n = 0;
                foreach ($this->topicVO as $item) {
                    $res['TopicVO'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TopicVO'])) {
            if (!empty($map['TopicVO'])) {
                $model->topicVO = [];
                $n              = 0;
                foreach ($map['TopicVO'] as $item) {
                    $model->topicVO[$n++] = null !== $item ? topicVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
