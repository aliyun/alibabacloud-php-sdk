<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenGeographicSpanRemainingBandwidthResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $remainingBandwidth;
    protected $_name = [
        'requestId'          => 'RequestId',
        'remainingBandwidth' => 'RemainingBandwidth',
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
        if (null !== $this->remainingBandwidth) {
            $res['RemainingBandwidth'] = $this->remainingBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RemainingBandwidth'])) {
            $model->remainingBandwidth = $map['RemainingBandwidth'];
        }

        return $model;
    }
}
