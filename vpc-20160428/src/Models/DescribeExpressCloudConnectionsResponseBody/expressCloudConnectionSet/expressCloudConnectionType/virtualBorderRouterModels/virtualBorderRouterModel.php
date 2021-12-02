<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponseBody\expressCloudConnectionSet\expressCloudConnectionType\virtualBorderRouterModels;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterModel extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $physicalConnectionId;
    protected $_name = [
        'accessPointId'        => 'AccessPointId',
        'instanceId'           => 'InstanceId',
        'physicalConnectionId' => 'PhysicalConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        return $model;
    }
}
