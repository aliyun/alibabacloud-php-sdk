<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes;

use AlibabaCloud\Dara\Model;

class reservedInstanceRenewAttribute extends Model
{
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $renewalStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
