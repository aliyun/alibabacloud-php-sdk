<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceNewConnectionsResponseBody\instanceNewConnections;
use AlibabaCloud\Tea\Model;

class DescribeInstanceNewConnectionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceNewConnections
     */
    public $instanceNewConnections;
    protected $_name = [
        'requestId'              => 'RequestId',
        'instanceNewConnections' => 'InstanceNewConnections',
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
        if (null !== $this->instanceNewConnections) {
            $res['InstanceNewConnections'] = null !== $this->instanceNewConnections ? $this->instanceNewConnections->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceNewConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceNewConnections'])) {
            $model->instanceNewConnections = instanceNewConnections::fromMap($map['InstanceNewConnections']);
        }

        return $model;
    }
}
