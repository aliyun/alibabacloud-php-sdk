<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskSucceededResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $eventId;
    protected $_name = [
        'requestId' => 'RequestId',
        'eventId'   => 'EventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportTaskSucceededResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        return $model;
    }
}
