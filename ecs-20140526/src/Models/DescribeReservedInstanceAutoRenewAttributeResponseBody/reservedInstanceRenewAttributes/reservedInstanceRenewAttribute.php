<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes;

use AlibabaCloud\Tea\Model;

class reservedInstanceRenewAttribute extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;

    /**
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
