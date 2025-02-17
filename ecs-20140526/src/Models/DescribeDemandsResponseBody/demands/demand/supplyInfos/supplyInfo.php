<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos;

use AlibabaCloud\Dara\Model;

class supplyInfo extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $privatePoolId;
    /**
     * @var string
     */
    public $supplyEndTime;
    /**
     * @var string
     */
    public $supplyStartTime;
    /**
     * @var string
     */
    public $supplyStatus;
    protected $_name = [
        'amount'          => 'Amount',
        'privatePoolId'   => 'PrivatePoolId',
        'supplyEndTime'   => 'SupplyEndTime',
        'supplyStartTime' => 'SupplyStartTime',
        'supplyStatus'    => 'SupplyStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->privatePoolId) {
            $res['PrivatePoolId'] = $this->privatePoolId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['PrivatePoolId'])) {
            $model->privatePoolId = $map['PrivatePoolId'];
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
