<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnassociateHaVipRequest extends Model
{
    /**
     * @description The ID of the HAVIP that you want to disassociate.
     *
     * This parameter is required.
     *
     * @example havip-5p14t****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @description The ID of the ENS instance or ENI that you want to disassociate from the HAVIP.
     *
     * This parameter is required.
     *
     * @example i-5ecpqvk****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'haVipId' => 'HaVipId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassociateHaVipRequest
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

        return $model;
    }
}
