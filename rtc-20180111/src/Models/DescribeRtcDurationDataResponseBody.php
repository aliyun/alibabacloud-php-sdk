<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval;

class DescribeRtcDurationDataResponseBody extends Model
{
    /**
     * @var durationDataPerInterval
     */
    public $durationDataPerInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'durationDataPerInterval' => 'DurationDataPerInterval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->durationDataPerInterval) {
            $this->durationDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationDataPerInterval) {
            $res['DurationDataPerInterval'] = null !== $this->durationDataPerInterval ? $this->durationDataPerInterval->toArray($noStream) : $this->durationDataPerInterval;
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
        if (isset($map['DurationDataPerInterval'])) {
            $model->durationDataPerInterval = durationDataPerInterval::fromMap($map['DurationDataPerInterval']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
