<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationResponseBody\utilizations;

use AlibabaCloud\Tea\Model;

class utilization extends Model
{
    /**
     * @var string
     */
    public $reservedInstanceId;

    /**
     * @var string
     */
    public $utilization;
    protected $_name = [
        'reservedInstanceId' => 'ReservedInstanceId',
        'utilization'        => 'Utilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->utilization) {
            $res['Utilization'] = $this->utilization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return utilization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['Utilization'])) {
            $model->utilization = $map['Utilization'];
        }

        return $model;
    }
}
