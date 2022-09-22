<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody\qosGroupInfo\networkInterfaceIds;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody\qosGroupInfo\qosGroup;
use AlibabaCloud\Tea\Model;

class qosGroupInfo extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var networkInterfaceIds
     */
    public $networkInterfaceIds;

    /**
     * @var qosGroup
     */
    public $qosGroup;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'qosGroup'            => 'QosGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = null !== $this->networkInterfaceIds ? $this->networkInterfaceIds->toMap() : null;
        }
        if (null !== $this->qosGroup) {
            $res['QosGroup'] = null !== $this->qosGroup ? $this->qosGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosGroupInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIds = networkInterfaceIds::fromMap($map['NetworkInterfaceIds']);
        }
        if (isset($map['QosGroup'])) {
            $model->qosGroup = qosGroup::fromMap($map['QosGroup']);
        }

        return $model;
    }
}
