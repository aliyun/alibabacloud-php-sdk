<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceSlbConnectResponseBody\instanceSlbConnect;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSlbConnectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceSlbConnect
     */
    public $instanceSlbConnect;
    protected $_name = [
        'requestId'          => 'RequestId',
        'instanceSlbConnect' => 'InstanceSlbConnect',
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
        if (null !== $this->instanceSlbConnect) {
            $res['InstanceSlbConnect'] = null !== $this->instanceSlbConnect ? $this->instanceSlbConnect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSlbConnectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceSlbConnect'])) {
            $model->instanceSlbConnect = instanceSlbConnect::fromMap($map['InstanceSlbConnect']);
        }

        return $model;
    }
}
