<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetIpsetsBandwidthLimitResponseBody extends Model
{
    /**
     * @example ShareBandwidth
     *
     * @var string
     */
    public $bandwidthAllocationType;

    /**
     * @example 20
     *
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthAllocationType' => 'BandwidthAllocationType',
        'bandwidthLimit'          => 'BandwidthLimit',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthAllocationType) {
            $res['BandwidthAllocationType'] = $this->bandwidthAllocationType;
        }
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpsetsBandwidthLimitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthAllocationType'])) {
            $model->bandwidthAllocationType = $map['BandwidthAllocationType'];
        }
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
