<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcMPUEventSubResponseBody\subInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcMPUEventSubResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the subscription.
     *
     * @var subInfo
     */
    public $subInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'subInfo' => 'SubInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subInfo) {
            $res['SubInfo'] = null !== $this->subInfo ? $this->subInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcMPUEventSubResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubInfo'])) {
            $model->subInfo = subInfo::fromMap($map['SubInfo']);
        }

        return $model;
    }
}
