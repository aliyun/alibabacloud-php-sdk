<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficResponseBody\trafficPerSecond;
use AlibabaCloud\Tea\Model;

class DescribeGroupTrafficResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example EF924FE4-2EDD-4CD3-89EC-34E4708574E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The traffic information per second.
     *
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
     * @return DescribeGroupTrafficResponseBody
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
