<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTrafficInfo;

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
        if (null !== $this->trafficControlTaskTrafficInfo) {
            $this->trafficControlTaskTrafficInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficControlTaskTrafficInfo) {
            $res['TrafficControlTaskTrafficInfo'] = null !== $this->trafficControlTaskTrafficInfo ? $this->trafficControlTaskTrafficInfo->toArray($noStream) : $this->trafficControlTaskTrafficInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
