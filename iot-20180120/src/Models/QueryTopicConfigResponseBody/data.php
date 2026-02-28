<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicConfigResponseBody\data\topicConfigInfo;

class data extends Model
{
    /**
     * @var topicConfigInfo[]
     */
    public $topicConfigInfo;
    protected $_name = [
        'topicConfigInfo' => 'TopicConfigInfo',
    ];

    public function validate()
    {
        if (\is_array($this->topicConfigInfo)) {
            Model::validateArray($this->topicConfigInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicConfigInfo) {
            if (\is_array($this->topicConfigInfo)) {
                $res['TopicConfigInfo'] = [];
                $n1 = 0;
                foreach ($this->topicConfigInfo as $item1) {
                    $res['TopicConfigInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopicConfigInfo'])) {
            if (!empty($map['TopicConfigInfo'])) {
                $model->topicConfigInfo = [];
                $n1 = 0;
                foreach ($map['TopicConfigInfo'] as $item1) {
                    $model->topicConfigInfo[$n1] = topicConfigInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
