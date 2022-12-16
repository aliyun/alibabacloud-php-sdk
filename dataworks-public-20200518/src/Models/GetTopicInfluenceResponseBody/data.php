<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody\data\influences;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var influences[]
     */
    public $influences;

    /**
     * @example 1234
     *
     * @var int
     */
    public $topicId;
    protected $_name = [
        'influences' => 'Influences',
        'topicId'    => 'TopicId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->influences) {
            $res['Influences'] = [];
            if (null !== $this->influences && \is_array($this->influences)) {
                $n = 0;
                foreach ($this->influences as $item) {
                    $res['Influences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['Influences'])) {
            if (!empty($map['Influences'])) {
                $model->influences = [];
                $n                 = 0;
                foreach ($map['Influences'] as $item) {
                    $model->influences[$n++] = null !== $item ? influences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
