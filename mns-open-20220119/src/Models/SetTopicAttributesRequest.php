<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class SetTopicAttributesRequest extends Model
{
    /**
     * @description Specifies whether to enable the log management feature. Valid values:
     *
     *   true: enabled.
     *   false: disabled. Default value: false.
     *
     * @example True
     *
     * @var bool
     */
    public $enableLogging;

    /**
     * @description The maximum length of the message that is sent to the topic. Valid values: 1024 to 65536. Unit: bytes. Default value: 65536.
     *
     * @example 65536
     *
     * @var int
     */
    public $maxMessageSize;

    /**
     * @description The name of the topic.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'enableLogging' => 'EnableLogging',
        'maxMessageSize' => 'MaxMessageSize',
        'topicName' => 'TopicName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableLogging) {
            $res['EnableLogging'] = $this->enableLogging;
        }
        if (null !== $this->maxMessageSize) {
            $res['MaxMessageSize'] = $this->maxMessageSize;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetTopicAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableLogging'])) {
            $model->enableLogging = $map['EnableLogging'];
        }
        if (isset($map['MaxMessageSize'])) {
            $model->maxMessageSize = $map['MaxMessageSize'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
