<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficControlTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trafficControlTargetId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'trafficControlTargetId' => 'TrafficControlTargetId',
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
        if (null !== $this->trafficControlTargetId) {
            $res['TrafficControlTargetId'] = $this->trafficControlTargetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficControlTargetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlTargetId'])) {
            $model->trafficControlTargetId = $map['TrafficControlTargetId'];
        }

        return $model;
    }
}
