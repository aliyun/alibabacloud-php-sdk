<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveStreamMonitorResponseBody extends Model
{
    /**
     * @description The ID of the monitoring session.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $monitorId;

    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0d-f228-4a64-af62-20e91b9676b3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorId' => 'MonitorId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveStreamMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
