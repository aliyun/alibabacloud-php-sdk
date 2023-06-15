<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstancePayTypeRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-bp1842vmucoa5w874
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   Postpaid: pay-as-you-go
     *   Prepaid: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription method of the instance. This parameter must be specified when PayType is set to Prepaid.
     *
     *   Year
     *   Month
     *
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Valid values when Period is set to Year: 1 to 9. Valid values when Period is set to Month: 1, 2, and 3.
     *
     * @example 2
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'payType'         => 'PayType',
        'period'          => 'Period',
        'resourceOwnerId' => 'ResourceOwnerId',
        'usedTime'        => 'UsedTime',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
