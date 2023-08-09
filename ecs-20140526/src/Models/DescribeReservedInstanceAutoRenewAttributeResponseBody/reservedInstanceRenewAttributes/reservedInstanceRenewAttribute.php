<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes;

use AlibabaCloud\Tea\Model;

class reservedInstanceRenewAttribute extends Model
{
    /**
     * @description The auto-renewal duration.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The unit of the auto-renewal duration.
     *
     * Valid values: Year and Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The auto-renewal status of the reserved instance. Valid values:
     *
     *   AutoRenewal: The reserved instance is automatically renewed.
     *   Normal: You must manually renew the reserved instance.
     *
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description The ID of the reserved instance.
     *
     * @example ecsri-ajdfaj****
     *
     * @var string
     */
    public $reservedInstanceId;
    protected $_name = [
        'duration'           => 'Duration',
        'periodUnit'         => 'PeriodUnit',
        'renewalStatus'      => 'RenewalStatus',
        'reservedInstanceId' => 'ReservedInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstanceRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }

        return $model;
    }
}
