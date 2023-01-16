<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class IndexFileMetaResponseBody extends Model
{
    /**
     * @example 30F-1D8FxFzDXKJH9YQdve4CjR****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 6E93D6C9-5AC0-49F9-914D-E02678D3****
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
     * @return IndexFileMetaResponseBody
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
