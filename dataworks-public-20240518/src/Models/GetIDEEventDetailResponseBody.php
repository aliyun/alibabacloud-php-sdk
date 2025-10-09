<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail;

class GetIDEEventDetailResponseBody extends Model
{
    /**
     * @var eventDetail
     */
    public $eventDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventDetail' => 'EventDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eventDetail) {
            $this->eventDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventDetail) {
            $res['EventDetail'] = null !== $this->eventDetail ? $this->eventDetail->toArray($noStream) : $this->eventDetail;
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
        if (isset($map['EventDetail'])) {
            $model->eventDetail = eventDetail::fromMap($map['EventDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
