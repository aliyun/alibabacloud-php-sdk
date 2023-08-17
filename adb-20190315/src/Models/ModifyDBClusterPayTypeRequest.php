<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterPayTypeRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @description The billing method. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription type of the subscription cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis.
     *   **Month**: subscription on a monthly basis.
     *
     * > This parameter must be specified when PayType is set to Prepaid.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The subscription duration of the subscription cluster.
     *
     *   Valid values when Period is set to Year: 1, 2, 3, and 5 (integer).
     *   Valid values when Period is set to Month: 1 to 11 (integer).
     *
     * >
     *
     *   This parameter must be specified when PayType is set to Prepaid.
     *
     *   Longer subscription durations offer more savings. Purchasing a cluster for one year is more cost-effective than purchasing the cluster for 10 or 11 months.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;
    protected $_name = [
        'dbClusterId' => 'DbClusterId',
        'payType'     => 'PayType',
        'period'      => 'Period',
        'usedTime'    => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
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
     * @return ModifyDBClusterPayTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
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
