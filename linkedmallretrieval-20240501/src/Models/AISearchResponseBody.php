<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models\AISearchResponseBody\header;
use AlibabaCloud\Tea\Model;

class AISearchResponseBody extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @var string
     */
    public $payload;

    /**
     * @example D016A23D-738A-5209-A91A-6145845C5A23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header'    => 'header',
        'payload'   => 'payload',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['payload'] = $this->payload;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AISearchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }
        if (isset($map['payload'])) {
            $model->payload = $map['payload'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
