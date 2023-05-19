<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTopologyResponseBody extends Model
{
    /**
     * @description The number of CPU cores used by the node.
     *
     * @var instanceTopology
     */
    public $instanceTopology;

    /**
     * @description The information about the CPU resources of the node.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTopology' => 'InstanceTopology',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTopology) {
            $res['InstanceTopology'] = null !== $this->instanceTopology ? $this->instanceTopology->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTopologyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTopology'])) {
            $model->instanceTopology = instanceTopology::fromMap($map['InstanceTopology']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
