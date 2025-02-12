<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceSlbConnectResponseBody\instanceSlbConnect;

class DescribeInstanceSlbConnectResponseBody extends Model
{
    /**
     * @var instanceSlbConnect
     */
    public $instanceSlbConnect;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSlbConnect' => 'InstanceSlbConnect',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceSlbConnect) {
            $this->instanceSlbConnect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSlbConnect) {
            $res['InstanceSlbConnect'] = null !== $this->instanceSlbConnect ? $this->instanceSlbConnect->toArray($noStream) : $this->instanceSlbConnect;
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
        if (isset($map['InstanceSlbConnect'])) {
            $model->instanceSlbConnect = instanceSlbConnect::fromMap($map['InstanceSlbConnect']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
