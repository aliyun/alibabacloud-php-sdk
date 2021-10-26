<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponseBody\callLatencys;
use AlibabaCloud\Tea\Model;

class DescribeApiLatencyDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var callLatencys
     */
    public $callLatencys;
    protected $_name = [
        'requestId'    => 'RequestId',
        'callLatencys' => 'CallLatencys',
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
        if (null !== $this->callLatencys) {
            $res['CallLatencys'] = null !== $this->callLatencys ? $this->callLatencys->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CallLatencys'])) {
            $model->callLatencys = callLatencys::fromMap($map['CallLatencys']);
        }

        return $model;
    }
}
