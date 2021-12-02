<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficMirrorSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trafficMirrorSessionId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'trafficMirrorSessionId' => 'TrafficMirrorSessionId',
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
        if (null !== $this->trafficMirrorSessionId) {
            $res['TrafficMirrorSessionId'] = $this->trafficMirrorSessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficMirrorSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficMirrorSessionId'])) {
            $model->trafficMirrorSessionId = $map['TrafficMirrorSessionId'];
        }

        return $model;
    }
}
