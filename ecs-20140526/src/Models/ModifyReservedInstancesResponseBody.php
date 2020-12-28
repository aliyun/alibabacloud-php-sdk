<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyReservedInstancesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $reservedInstanceIdSets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reservedInstanceIdSets' => 'ReservedInstanceIdSets',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceIdSets) {
            $res['ReservedInstanceIdSets'] = $this->reservedInstanceIdSets;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ReservedInstanceIdSets'])) {
            if (!empty($map['ReservedInstanceIdSets'])) {
                $model->reservedInstanceIdSets = $map['ReservedInstanceIdSets'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
