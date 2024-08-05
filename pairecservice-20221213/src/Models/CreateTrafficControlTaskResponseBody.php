<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficControlTaskResponseBody extends Model
{
    /**
     * @example 42391E6D-822C-58F8-9F7E-D991BB86D6AD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
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
     * @return CreateTrafficControlTaskResponseBody
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
