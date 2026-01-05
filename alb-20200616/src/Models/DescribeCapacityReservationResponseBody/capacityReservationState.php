<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\DescribeCapacityReservationResponseBody;

use AlibabaCloud\Dara\Model;

class capacityReservationState extends Model
{
    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var float
     */
    public $effectiveCapacityUnits;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'availabilityZone' => 'AvailabilityZone',
        'effectiveCapacityUnits' => 'EffectiveCapacityUnits',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }

        if (null !== $this->effectiveCapacityUnits) {
            $res['EffectiveCapacityUnits'] = $this->effectiveCapacityUnits;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }

        if (isset($map['EffectiveCapacityUnits'])) {
            $model->effectiveCapacityUnits = $map['EffectiveCapacityUnits'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
