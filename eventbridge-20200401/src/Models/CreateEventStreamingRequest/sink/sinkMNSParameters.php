<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\isBase64Encode;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\queueName;

class sinkMNSParameters extends Model
{
    /**
     * @var body
     */
    public $body;
    /**
     * @var isBase64Encode
     */
    public $isBase64Encode;
    /**
     * @var queueName
     */
    public $queueName;
    protected $_name = [
        'body'           => 'Body',
        'isBase64Encode' => 'IsBase64Encode',
        'queueName'      => 'QueueName',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->isBase64Encode) {
            $this->isBase64Encode->validate();
        }
        if (null !== $this->queueName) {
            $this->queueName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->isBase64Encode) {
            $res['IsBase64Encode'] = null !== $this->isBase64Encode ? $this->isBase64Encode->toArray($noStream) : $this->isBase64Encode;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = null !== $this->queueName ? $this->queueName->toArray($noStream) : $this->queueName;
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
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['IsBase64Encode'])) {
            $model->isBase64Encode = isBase64Encode::fromMap($map['IsBase64Encode']);
        }

        if (isset($map['QueueName'])) {
            $model->queueName = queueName::fromMap($map['QueueName']);
        }

        return $model;
    }
}
