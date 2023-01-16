<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchIndexFileMetaResponseBody extends Model
{
    /**
     * @example 387-1DAPFFZplUZhuCuhnB6I9H****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 8F93E6D9-5AC0-49F9-914D-E02678A3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventId'   => 'EventId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchIndexFileMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
