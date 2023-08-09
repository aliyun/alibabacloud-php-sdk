<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;
use AlibabaCloud\Tea\Model;

class DescribeBandwidthLimitationResponseBody extends Model
{
    /**
     * @description The maximum public bandwidth.
     *
     * @var bandwidths
     */
    public $bandwidths;

    /**
     * @description Details about the maximum public bandwidth.
     *
     * @example The billing method for network usage. Valid values:
     *
     *   PayByBandwidth
     *   PayByTraffic
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidths' => 'Bandwidths',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidths) {
            $res['Bandwidths'] = null !== $this->bandwidths ? $this->bandwidths->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthLimitationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidths'])) {
            $model->bandwidths = bandwidths::fromMap($map['Bandwidths']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
