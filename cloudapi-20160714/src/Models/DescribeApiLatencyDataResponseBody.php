<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponseBody\callLatencys;
use AlibabaCloud\Tea\Model;

class DescribeApiLatencyDataResponseBody extends Model
{
    /**
     * @description The returned information about API call latency. It is an array consisting of MonitorItem data.
     *
     * @var callLatencys
     */
    public $callLatencys;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ001
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callLatencys' => 'CallLatencys',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callLatencys) {
            $res['CallLatencys'] = null !== $this->callLatencys ? $this->callLatencys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiLatencyDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallLatencys'])) {
            $model->callLatencys = callLatencys::fromMap($map['CallLatencys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
