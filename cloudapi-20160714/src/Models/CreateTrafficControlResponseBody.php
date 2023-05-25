<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficControlResponseBody extends Model
{
    /**
     * @description Creates a custom throttling policy.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @description *   This API is intended for API providers.
     *   Throttling policies must be bound to APIs to take effect. After a policy is bound to an API, it goes into effect on that API immediately.
     *   The QPS limit on this operation is 50 per user.
     *
     * @example tf123456
     *
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
