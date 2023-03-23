<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceNewConnectionsResponseBody\instanceNewConnections;
use AlibabaCloud\Tea\Model;

class DescribeInstanceNewConnectionsResponseBody extends Model
{
    /**
     * @description The list of new connections in the instance.
     *
     * @var instanceNewConnections
     */
    public $instanceNewConnections;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceNewConnections' => 'InstanceNewConnections',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNewConnections) {
            $res['InstanceNewConnections'] = null !== $this->instanceNewConnections ? $this->instanceNewConnections->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceNewConnections'])) {
            $model->instanceNewConnections = instanceNewConnections::fromMap($map['InstanceNewConnections']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
