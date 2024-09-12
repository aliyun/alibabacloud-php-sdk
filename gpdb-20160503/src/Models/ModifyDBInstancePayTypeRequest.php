<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstancePayTypeRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   Postpaid: pay-as-you-go.
     *   Prepaid: subscription.
     *
     * This parameter is required.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Month
     *   Year
     *
     * This parameter must be specified only when PayType is set to Prepaid.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The subscription duration.
     *
     *   Valid values when Period is set to Month: 1 to 9.
     *   Valid values when Period is set to Year: 1 to 3.
     *
     * This parameter must be specified only when PayType is set to Prepaid.
     * @example 1
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'payType'      => 'PayType',
        'period'       => 'Period',
        'usedTime'     => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstancePayTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
