<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressConnectTrafficQosRequest;

use AlibabaCloud\Tea\Model;

class removeInstanceList extends Model
{
    /**
     * @description The ID of the associated instance.
     *
     * @example pc-bp1j37am632492qzw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the associated instance. Set the value to **PHYSICALCONNECTION**.
     *
     * @example PHYSICALCONNECTION
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
