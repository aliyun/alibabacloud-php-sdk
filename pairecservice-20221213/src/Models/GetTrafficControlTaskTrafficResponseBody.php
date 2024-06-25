<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTrafficInfo;
use AlibabaCloud\Tea\Model;

class GetTrafficControlTaskTrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficControlTaskTrafficInfo
     */
    public $trafficControlTaskTrafficInfo;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'trafficControlTaskTrafficInfo' => 'TrafficControlTaskTrafficInfo',
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
        if (null !== $this->trafficControlTaskTrafficInfo) {
            $res['TrafficControlTaskTrafficInfo'] = null !== $this->trafficControlTaskTrafficInfo ? $this->trafficControlTaskTrafficInfo->toMap() : null;
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
        if (isset($map['TrafficControlTaskTrafficInfo'])) {
            $model->trafficControlTaskTrafficInfo = trafficControlTaskTrafficInfo::fromMap($map['TrafficControlTaskTrafficInfo']);
        }

        return $model;
    }
}
