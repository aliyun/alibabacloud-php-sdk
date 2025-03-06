<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropConnectionsResponseBody\instanceDropConnections;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDropConnectionsResponseBody extends Model
{
    /**
     * @description The list of dropped connections in the instance.
     *
     * @var instanceDropConnections
     */
    public $instanceDropConnections;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BA984
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDropConnections' => 'InstanceDropConnections',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDropConnections) {
            $res['InstanceDropConnections'] = null !== $this->instanceDropConnections ? $this->instanceDropConnections->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceDropConnections'])) {
            $model->instanceDropConnections = instanceDropConnections::fromMap($map['InstanceDropConnections']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
