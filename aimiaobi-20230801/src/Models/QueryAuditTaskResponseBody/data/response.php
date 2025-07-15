<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response\payload;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return response
     */
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
