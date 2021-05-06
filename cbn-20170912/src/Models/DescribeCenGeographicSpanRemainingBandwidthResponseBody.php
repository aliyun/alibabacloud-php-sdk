<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenGeographicSpanRemainingBandwidthResponseBody extends Model
{
    /**
     * @var int
     */
    public $remainingBandwidth;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remainingBandwidth' => 'RemainingBandwidth',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainingBandwidth) {
            $res['RemainingBandwidth'] = $this->remainingBandwidth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RemainingBandwidth'])) {
            $model->remainingBandwidth = $map['RemainingBandwidth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
