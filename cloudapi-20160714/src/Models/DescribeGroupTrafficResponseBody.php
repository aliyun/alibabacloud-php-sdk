<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficResponseBody\trafficPerSecond;

class DescribeGroupTrafficResponseBody extends Model
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
        'requestId' => 'RequestId',
        'trafficPerSecond' => 'TrafficPerSecond',
    ];

    public function validate()
    {
        if (null !== $this->trafficPerSecond) {
            $this->trafficPerSecond->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficPerSecond) {
            $res['TrafficPerSecond'] = null !== $this->trafficPerSecond ? $this->trafficPerSecond->toArray($noStream) : $this->trafficPerSecond;
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

        if (isset($map['TrafficPerSecond'])) {
            $model->trafficPerSecond = trafficPerSecond::fromMap($map['TrafficPerSecond']);
        }

        return $model;
    }
}
