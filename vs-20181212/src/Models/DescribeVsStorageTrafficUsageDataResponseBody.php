<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataResponseBody\trafficUsage;
use AlibabaCloud\Tea\Model;

class DescribeVsStorageTrafficUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficUsage
     */
    public $trafficUsage;
    protected $_name = [
        'requestId'    => 'RequestId',
        'trafficUsage' => 'TrafficUsage',
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
        if (null !== $this->trafficUsage) {
            $res['TrafficUsage'] = null !== $this->trafficUsage ? $this->trafficUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsStorageTrafficUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficUsage'])) {
            $model->trafficUsage = trafficUsage::fromMap($map['TrafficUsage']);
        }

        return $model;
    }
}
