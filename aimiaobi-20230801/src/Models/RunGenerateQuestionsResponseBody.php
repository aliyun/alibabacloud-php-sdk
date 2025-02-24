<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunGenerateQuestionsResponseBody\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunGenerateQuestionsResponseBody\payload;

class RunGenerateQuestionsResponseBody extends Model
{
    /**
     * @var header
     */
    public $header;
    /**
     * @var payload
     */
    public $payload;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header'    => 'Header',
        'payload'   => 'Payload',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
