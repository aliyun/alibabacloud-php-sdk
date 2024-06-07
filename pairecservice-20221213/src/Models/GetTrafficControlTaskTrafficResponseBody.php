<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTraffic;
use AlibabaCloud\Tea\Model;

class GetTrafficControlTaskTrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficControlTaskTraffic
     */
    public $trafficControlTaskTraffic;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'trafficControlTaskTraffic' => 'TrafficControlTaskTraffic',
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
        if (null !== $this->trafficControlTaskTraffic) {
            $res['TrafficControlTaskTraffic'] = null !== $this->trafficControlTaskTraffic ? $this->trafficControlTaskTraffic->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrafficControlTaskTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlTaskTraffic'])) {
            $model->trafficControlTaskTraffic = trafficControlTaskTraffic::fromMap($map['TrafficControlTaskTraffic']);
        }

        return $model;
    }
}
