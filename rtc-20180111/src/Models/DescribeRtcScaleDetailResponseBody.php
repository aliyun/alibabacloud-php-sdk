<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleDetailResponseBody\scale;
use AlibabaCloud\Tea\Model;

class DescribeRtcScaleDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scale[]
     */
    public $scale;
    protected $_name = [
        'requestId' => 'RequestId',
        'scale'     => 'Scale',
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
        if (null !== $this->scale) {
            $res['Scale'] = [];
            if (null !== $this->scale && \is_array($this->scale)) {
                $n = 0;
                foreach ($this->scale as $item) {
                    $res['Scale'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcScaleDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scale'])) {
            if (!empty($map['Scale'])) {
                $model->scale = [];
                $n            = 0;
                foreach ($map['Scale'] as $item) {
                    $model->scale[$n++] = null !== $item ? scale::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
