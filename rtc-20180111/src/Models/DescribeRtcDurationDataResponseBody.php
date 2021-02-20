<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcDurationDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var durationDataPerInterval
     */
    public $durationDataPerInterval;
    protected $_name = [
        'requestId'               => 'RequestId',
        'durationDataPerInterval' => 'DurationDataPerInterval',
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
        if (null !== $this->durationDataPerInterval) {
            $res['DurationDataPerInterval'] = null !== $this->durationDataPerInterval ? $this->durationDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcDurationDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DurationDataPerInterval'])) {
            $model->durationDataPerInterval = durationDataPerInterval::fromMap($map['DurationDataPerInterval']);
        }

        return $model;
    }
}
