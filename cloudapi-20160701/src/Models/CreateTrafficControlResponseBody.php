<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficControlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trafficControlId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'trafficControlId' => 'TrafficControlId',
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
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficControlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }

        return $model;
    }
}
