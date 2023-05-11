<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSubTopicResponseBody;

use AlibabaCloud\Tea\Model;

class topicList extends Model
{
    /**
     * @description The time when the device subscribed to a topic. Unit: milliseconds.
     *
     * @example 1662039965873
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The name of the topic.
     *
     * @example /hf768****\/device1/user/test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
