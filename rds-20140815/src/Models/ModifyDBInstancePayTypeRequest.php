<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstancePayTypeRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-bp1842vmucoa5w874
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The billing method of the instance. The value is fixed as **Prepaid**, which indicates the subscription billing method.
     *
     * This parameter is required.
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The renewal cycle of the instance.
     *
     *   **Year**
     *   **Month**
     *
     * This parameter is required.
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
     * @description The subscription duration of the instance. Valid values:
     *
     *   If you set the **Period** parameter to **Year**, the value of the **UsedTime** parameter ranges from 1 to 5.
     *   If you set the **Period** parameter to **Month**, the value of the **UsedTime** parameter ranges from 1 to 11.
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
