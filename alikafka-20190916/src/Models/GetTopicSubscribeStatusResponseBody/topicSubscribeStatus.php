<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class topicSubscribeStatus extends Model
{
    /**
     * @var string[]
     */
    public $consumerGroups;

    /**
     * @example topic_api_1681624879908
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerGroups' => 'ConsumerGroups',
        'topic'          => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroups) {
            $res['ConsumerGroups'] = $this->consumerGroups;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topicSubscribeStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroups'])) {
            if (!empty($map['ConsumerGroups'])) {
                $model->consumerGroups = $map['ConsumerGroups'];
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
