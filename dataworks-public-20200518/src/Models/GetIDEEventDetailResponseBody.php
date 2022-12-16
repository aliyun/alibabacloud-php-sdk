<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;
use AlibabaCloud\Tea\Model;

class GetIDEEventDetailResponseBody extends Model
{
    /**
     * @var eventDetail
     */
    public $eventDetail;

    /**
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventDetail' => 'EventDetail',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDetail) {
            $res['EventDetail'] = null !== $this->eventDetail ? $this->eventDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIDEEventDetailResponseBody
     */
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
