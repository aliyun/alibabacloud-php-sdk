<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneTrafficControlTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trafficControlTaskId;
    protected $_name = [
        'requestId'            => 'RequestId',
        'trafficControlTaskId' => 'TrafficControlTaskId',
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
        if (null !== $this->trafficControlTaskId) {
            $res['TrafficControlTaskId'] = $this->trafficControlTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneTrafficControlTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlTaskId'])) {
            $model->trafficControlTaskId = $map['TrafficControlTaskId'];
        }

        return $model;
    }
}
