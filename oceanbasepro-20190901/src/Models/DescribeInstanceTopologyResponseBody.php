<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

class DescribeInstanceTopologyResponseBody extends Model
{
    /**
     * @var instanceTopology
     */
    public $instanceTopology;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTopology' => 'InstanceTopology',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceTopology) {
            $this->instanceTopology->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTopology) {
            $res['InstanceTopology'] = null !== $this->instanceTopology ? $this->instanceTopology->toArray($noStream) : $this->instanceTopology;
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
        if (isset($map['InstanceTopology'])) {
            $model->instanceTopology = instanceTopology::fromMap($map['InstanceTopology']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
