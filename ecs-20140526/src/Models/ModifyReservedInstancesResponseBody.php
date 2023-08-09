<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesResponseBody\reservedInstanceIdSets;
use AlibabaCloud\Tea\Model;

class ModifyReservedInstancesResponseBody extends Model
{
    /**
     * @description Details about the reserved instance.
     *
     * @example ED9E4A5F-FF4D-4C96-BE80-6B4227060DD7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the reserved instance.
     *
     * @var reservedInstanceIdSets
     */
    public $reservedInstanceIdSets;
    protected $_name = [
        'requestId'              => 'RequestId',
        'reservedInstanceIdSets' => 'ReservedInstanceIdSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedInstanceIdSets) {
            $res['ReservedInstanceIdSets'] = null !== $this->reservedInstanceIdSets ? $this->reservedInstanceIdSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReservedInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservedInstanceIdSets'])) {
            $model->reservedInstanceIdSets = reservedInstanceIdSets::fromMap($map['ReservedInstanceIdSets']);
        }

        return $model;
    }
}
