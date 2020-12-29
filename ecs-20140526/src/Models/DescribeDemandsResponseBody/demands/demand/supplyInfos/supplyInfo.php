<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos;

use AlibabaCloud\Tea\Model;

class supplyInfo extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $supplyEndTime;

    /**
     * @var string
     */
    public $supplyStatus;

    /**
     * @var string
     */
    public $supplyStartTime;
    protected $_name = [
        'amount'          => 'Amount',
        'supplyEndTime'   => 'SupplyEndTime',
        'supplyStatus'    => 'SupplyStatus',
        'supplyStartTime' => 'SupplyStartTime',
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
        if (null !== $this->supplyStatus) {
            $res['SupplyStatus'] = $this->supplyStatus;
        }
        if (null !== $this->supplyStartTime) {
            $res['SupplyStartTime'] = $this->supplyStartTime;
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
        if (isset($map['SupplyStatus'])) {
            $model->supplyStatus = $map['SupplyStatus'];
        }
        if (isset($map['SupplyStartTime'])) {
            $model->supplyStartTime = $map['SupplyStartTime'];
        }

        return $model;
    }
}
