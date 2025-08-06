<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesResponseBody\reservedInstanceIdSets;

class ModifyReservedInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reservedInstanceIdSets
     */
    public $reservedInstanceIdSets;
    protected $_name = [
        'requestId' => 'RequestId',
        'reservedInstanceIdSets' => 'ReservedInstanceIdSets',
    ];

    public function validate()
    {
        if (null !== $this->reservedInstanceIdSets) {
            $this->reservedInstanceIdSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->reservedInstanceIdSets) {
            $res['ReservedInstanceIdSets'] = null !== $this->reservedInstanceIdSets ? $this->reservedInstanceIdSets->toArray($noStream) : $this->reservedInstanceIdSets;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ReservedInstanceIdSets'])) {
            $model->reservedInstanceIdSets = reservedInstanceIdSets::fromMap($map['ReservedInstanceIdSets']);
        }

        return $model;
    }
}
