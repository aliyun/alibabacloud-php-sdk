<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AssociateHaVipRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example havip-5p14t****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @description This parameter is required.
     *
     * @example i-50c4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example EnsInstance
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'haVipId'      => 'HaVipId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }
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
     * @return AssociateHaVipRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
