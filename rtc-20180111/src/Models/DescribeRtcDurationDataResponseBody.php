<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcDurationDataResponseBody extends Model
{
    /**
     * @var durationDataPerInterval
     */
    public $durationDataPerInterval;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'durationDataPerInterval' => 'DurationDataPerInterval',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationDataPerInterval) {
            $res['DurationDataPerInterval'] = null !== $this->durationDataPerInterval ? $this->durationDataPerInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DurationDataPerInterval'])) {
            $model->durationDataPerInterval = durationDataPerInterval::fromMap($map['DurationDataPerInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
