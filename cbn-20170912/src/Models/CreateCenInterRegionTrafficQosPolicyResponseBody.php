<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateCenInterRegionTrafficQosPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trafficQosPolicyId;
    protected $_name = [
        'requestId' => 'RequestId',
        'trafficQosPolicyId' => 'TrafficQosPolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        return $model;
    }
}
