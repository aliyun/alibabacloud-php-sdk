<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTopicRequest extends Model
{
    /**
     * @description Specifies whether to enable the logging feature. Valid values:
     *
     *   True
     *   False (default)
     *
     * @example true
     *
     * @var bool
     */
    public $enableLogging;

    /**
     * @description The maximum length of the message that is sent to the topic. Valid values: 1024 to 65536. Unit: bytes. Default value: 65536.
     *
     * @example 10240
     *
     * @var int
     */
    public $maxMessageSize;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The name of the topic that you want to create.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'enableLogging'  => 'EnableLogging',
        'maxMessageSize' => 'MaxMessageSize',
        'tag'            => 'Tag',
        'topicName'      => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableLogging) {
            $res['EnableLogging'] = $this->enableLogging;
        }
        if (null !== $this->maxMessageSize) {
            $res['MaxMessageSize'] = $this->maxMessageSize;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicRequest
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
