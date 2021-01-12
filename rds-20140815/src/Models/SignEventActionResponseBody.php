<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SignEventActionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventRcpt;
    protected $_name = [
        'requestId' => 'RequestId',
        'eventId'   => 'EventId',
        'eventRcpt' => 'EventRcpt',
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
        if (null !== $this->eventRcpt) {
            $res['EventRcpt'] = $this->eventRcpt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SignEventActionResponseBody
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
        if (isset($map['EventRcpt'])) {
            $model->eventRcpt = $map['EventRcpt'];
        }

        return $model;
    }
}
