<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList;

use AlibabaCloud\Tea\Model;

class associatedInstanceList extends Model
{
    /**
     * @example pc-bp159zj8zujwy3p07j83e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $instanceProgressing;

    /**
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example PHYSICALCONNECTION
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'instanceProgressing' => 'InstanceProgressing',
        'instanceStatus'      => 'InstanceStatus',
        'instanceType'        => 'InstanceType',
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
        if (null !== $this->instanceProgressing) {
            $res['InstanceProgressing'] = $this->instanceProgressing;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceProgressing'])) {
            $model->instanceProgressing = $map['InstanceProgressing'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
