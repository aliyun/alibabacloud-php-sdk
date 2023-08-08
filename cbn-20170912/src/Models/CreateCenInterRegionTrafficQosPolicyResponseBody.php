<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenInterRegionTrafficQosPolicyResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6DF9A765-BCD2-5C7E-8C32-C35C8A361A39
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-eczzew0v1kzrb5****
     *
     * @var string
     */
    public $trafficQosPolicyId;
    protected $_name = [
        'requestId'          => 'RequestId',
        'trafficQosPolicyId' => 'TrafficQosPolicyId',
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
        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenInterRegionTrafficQosPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        return $model;
    }
}
