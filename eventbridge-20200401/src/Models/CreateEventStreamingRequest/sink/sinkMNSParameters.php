<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\isBase64Encode;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters\queueName;
use AlibabaCloud\Tea\Model;

class sinkMNSParameters extends Model
{
    /**
     * @description The message content.
     *
     * @var body
     */
    public $body;

    /**
     * @description Specifies whether to enable Base64 encoding.
     *
     * @var isBase64Encode
     */
    public $isBase64Encode;

    /**
     * @description The information about the MNS queue.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->isBase64Encode) {
            $res['IsBase64Encode'] = null !== $this->isBase64Encode ? $this->isBase64Encode->toMap() : null;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = null !== $this->queueName ? $this->queueName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkMNSParameters
     */
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
