<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AssociateEnsEipAddressRequest extends Model
{
    /**
     * @example eip-5sc1sgcrsrwgwdvx44hru3p63
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example lb-5saivuir6b1mupxjfbhmk1xkb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example SlbInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $standby;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'standby'      => 'Standby',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->standby) {
            $res['Standby'] = $this->standby;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateEnsEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Standby'])) {
            $model->standby = $map['Standby'];
        }

        return $model;
    }
}
