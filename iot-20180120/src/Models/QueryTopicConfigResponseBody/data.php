<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicConfigResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicConfigResponseBody\data\topicConfigInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicConfigInfo) {
            $res['TopicConfigInfo'] = [];
            if (null !== $this->topicConfigInfo && \is_array($this->topicConfigInfo)) {
                $n = 0;
                foreach ($this->topicConfigInfo as $item) {
                    $res['TopicConfigInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicConfigInfo'])) {
            if (!empty($map['TopicConfigInfo'])) {
                $model->topicConfigInfo = [];
                $n                      = 0;
                foreach ($map['TopicConfigInfo'] as $item) {
                    $model->topicConfigInfo[$n++] = null !== $item ? topicConfigInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
