<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWriteToneGenerationResponseBody\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWriteToneGenerationResponseBody\payload;
use AlibabaCloud\Tea\Model;

class RunWriteToneGenerationResponseBody extends Model
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
     * @example FB698445-61DA-5361-BF73-1C5F1157E888
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header' => 'Header',
        'payload' => 'Payload',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunWriteToneGenerationResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
