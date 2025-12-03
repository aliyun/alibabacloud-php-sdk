<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceNewConnectionsResponseBody\instanceNewConnections;

class DescribeInstanceNewConnectionsResponseBody extends Model
{
    /**
     * @var instanceNewConnections
     */
    public $instanceNewConnections;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceNewConnections' => 'InstanceNewConnections',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceNewConnections) {
            $this->instanceNewConnections->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceNewConnections) {
            $res['InstanceNewConnections'] = null !== $this->instanceNewConnections ? $this->instanceNewConnections->toArray($noStream) : $this->instanceNewConnections;
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
        if (isset($map['InstanceNewConnections'])) {
            $model->instanceNewConnections = instanceNewConnections::fromMap($map['InstanceNewConnections']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
