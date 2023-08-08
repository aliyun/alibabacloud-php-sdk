<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficMarkingPolicyResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0876E54E-3E36-5C31-89F0-9EE8A9266F9A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the traffic marking policy.
     *
     * @example tm-u9nxup5kww5po8****
     *
     * @var string
     */
    public $trafficMarkingPolicyId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'trafficMarkingPolicyId' => 'TrafficMarkingPolicyId',
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
        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficMarkingPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }

        return $model;
    }
}
