<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response\payload;

class response extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'header' => 'Header',
        'payload' => 'Payload',
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

        return $model;
    }
}
