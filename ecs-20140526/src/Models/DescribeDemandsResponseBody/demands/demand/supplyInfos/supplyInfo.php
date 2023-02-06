<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos;

use AlibabaCloud\Tea\Model;

class supplyInfo extends Model
{
    /**
     * @description The number of delivered instances.
     *
     * @example 30
     *
     * @var int
     */
    public $amount;

    /**
     * @description The end time when the filed resources are delivered and available. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-03-03T15:00:00Z
     *
     * @var string
     */
    public $supplyEndTime;

    /**
     * @description The start time when the filed resources are delivered and available. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-03-01T14:00:00Z
     *
     * @var string
     */
    public $supplyStartTime;

    /**
     * @description The delivery status of the filed resource. Valid values:
     *
     *   Delivered: The filed resource is delivered.
     *   Delivering: The filed resource is being delivered.
     *
     * @example Delivering
     *
     * @var string
     */
    public $supplyStatus;
    protected $_name = [
        'amount'          => 'Amount',
        'supplyEndTime'   => 'SupplyEndTime',
        'supplyStartTime' => 'SupplyStartTime',
        'supplyStatus'    => 'SupplyStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->supplyEndTime) {
            $res['SupplyEndTime'] = $this->supplyEndTime;
        }
        if (null !== $this->supplyStartTime) {
            $res['SupplyStartTime'] = $this->supplyStartTime;
        }
        if (null !== $this->supplyStatus) {
            $res['SupplyStatus'] = $this->supplyStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['SupplyEndTime'])) {
            $model->supplyEndTime = $map['SupplyEndTime'];
        }
        if (isset($map['SupplyStartTime'])) {
            $model->supplyStartTime = $map['SupplyStartTime'];
        }
        if (isset($map['SupplyStatus'])) {
            $model->supplyStatus = $map['SupplyStatus'];
        }

        return $model;
    }
}
