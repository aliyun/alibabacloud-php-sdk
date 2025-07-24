<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header;
use AlibabaCloud\Tea\Model;

class AiSearchResponseBody extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @example {"header":{"eventId":"6f617de0-204f-406f-a9be-34779c06d498","event":"on_common_search_start","responseTime":120},"payload":"","requestId":"715d01a0-de7e-42c3-abca-b901fcd79b39"}
     *
     * @var string
     */
    public $payload;

    /**
     * @description Id of the request
     *
     * @example ECB2144C-E277-5434-80E6-12D26678D364
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header' => 'header',
        'payload' => 'payload',
        'requestId' => 'requestId',
    ];

    public function validate() {}

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
     * @return AiSearchResponseBody
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
