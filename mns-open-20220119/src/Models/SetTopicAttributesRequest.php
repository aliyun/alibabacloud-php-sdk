<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class SetTopicAttributesRequest extends Model
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
     * @var string
     */
    public $topicName;
    protected $_name = [
        'enableLogging' => 'EnableLogging',
        'enableSSE' => 'EnableSSE',
        'kmsKeyId' => 'KmsKeyId',
        'maxMessageSize' => 'MaxMessageSize',
        'sseAlgorithm' => 'SseAlgorithm',
        'sseType' => 'SseType',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
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

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
