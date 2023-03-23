<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceSlbConnectResponseBody\instanceSlbConnect;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSlbConnectResponseBody extends Model
{
    /**
     * @description The list of concurrent connections in the instance.
     *
     * @var instanceSlbConnect
     */
    public $instanceSlbConnect;

    /**
     * @description The ID of the request.
     *
     * @example E7FE7172-AA75-5880-B6F7-C00893E9BC06
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSlbConnect' => 'InstanceSlbConnect',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSlbConnect) {
            $res['InstanceSlbConnect'] = null !== $this->instanceSlbConnect ? $this->instanceSlbConnect->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceSlbConnect'])) {
            $model->instanceSlbConnect = instanceSlbConnect::fromMap($map['InstanceSlbConnect']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
