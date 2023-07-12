<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceSubTopicResponse;

use AlibabaCloud\Tea\Model;

class topicList extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('topicName', $this->topicName, true);
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
