<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicRequest\tag;

class CreateTopicRequest extends Model
{
    /**
     * @var bool
     */
    public $enableLogging;

    /**
     * @var bool
     */
    public $enableSSE;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var int
     */
    public $maxMessageSize;

    /**
     * @var string
     */
    public $sseAlgorithm;

    /**
     * @var string
     */
    public $sseType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicType;
    protected $_name = [
        'enableLogging' => 'EnableLogging',
        'enableSSE' => 'EnableSSE',
        'kmsKeyId' => 'KmsKeyId',
        'maxMessageSize' => 'MaxMessageSize',
        'sseAlgorithm' => 'SseAlgorithm',
        'sseType' => 'SseType',
        'tag' => 'Tag',
        'topicName' => 'TopicName',
        'topicType' => 'TopicType',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableLogging) {
            $res['EnableLogging'] = $this->enableLogging;
        }

        if (null !== $this->enableSSE) {
            $res['EnableSSE'] = $this->enableSSE;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->maxMessageSize) {
            $res['MaxMessageSize'] = $this->maxMessageSize;
        }

        if (null !== $this->sseAlgorithm) {
            $res['SseAlgorithm'] = $this->sseAlgorithm;
        }

        if (null !== $this->sseType) {
            $res['SseType'] = $this->sseType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
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
        if (isset($map['EnableLogging'])) {
            $model->enableLogging = $map['EnableLogging'];
        }

        if (isset($map['EnableSSE'])) {
            $model->enableSSE = $map['EnableSSE'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }

        if (isset($map['MaxMessageSize'])) {
            $model->maxMessageSize = $map['MaxMessageSize'];
        }

        if (isset($map['SseAlgorithm'])) {
            $model->sseAlgorithm = $map['SseAlgorithm'];
        }

        if (isset($map['SseType'])) {
            $model->sseType = $map['SseType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }

        return $model;
    }
}
