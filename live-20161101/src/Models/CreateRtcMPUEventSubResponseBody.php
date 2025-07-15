<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRtcMPUEventSubResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the subscription.
     *
     * @example Sub-******9799B2C4500******
     *
     * @var string
     */
    public $subId;
    protected $_name = [
        'requestId' => 'RequestId',
        'subId' => 'SubId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRtcMPUEventSubResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        return $model;
    }
}
