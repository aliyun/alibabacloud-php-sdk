<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionTrafficResponseBody\trafficPerSecond;
use AlibabaCloud\Tea\Model;

class DescribeRegionTrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficPerSecond
     */
    public $trafficPerSecond;
    protected $_name = [
        'requestId'        => 'RequestId',
        'trafficPerSecond' => 'TrafficPerSecond',
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
        if (null !== $this->trafficPerSecond) {
            $res['TrafficPerSecond'] = null !== $this->trafficPerSecond ? $this->trafficPerSecond->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficPerSecond'])) {
            $model->trafficPerSecond = trafficPerSecond::fromMap($map['TrafficPerSecond']);
        }

        return $model;
    }
}
