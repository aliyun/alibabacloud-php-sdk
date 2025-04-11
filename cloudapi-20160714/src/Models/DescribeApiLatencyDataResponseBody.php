<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponseBody\callLatencys;

class DescribeApiLatencyDataResponseBody extends Model
{
    /**
     * @var callLatencys
     */
    public $callLatencys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callLatencys' => 'CallLatencys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->callLatencys) {
            $this->callLatencys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callLatencys) {
            $res['CallLatencys'] = null !== $this->callLatencys ? $this->callLatencys->toArray($noStream) : $this->callLatencys;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CallLatencys'])) {
            $model->callLatencys = callLatencys::fromMap($map['CallLatencys']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
