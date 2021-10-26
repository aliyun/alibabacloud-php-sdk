<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropConnectionsResponseBody\instanceDropConnections;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDropConnectionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceDropConnections
     */
    public $instanceDropConnections;
    protected $_name = [
        'requestId'               => 'RequestId',
        'instanceDropConnections' => 'InstanceDropConnections',
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
        if (null !== $this->instanceDropConnections) {
            $res['InstanceDropConnections'] = null !== $this->instanceDropConnections ? $this->instanceDropConnections->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDropConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceDropConnections'])) {
            $model->instanceDropConnections = instanceDropConnections::fromMap($map['InstanceDropConnections']);
        }

        return $model;
    }
}
