<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RenewCloudPhoneNodesRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the auto-renewal feature.
     *
     * Valid values:
     *
     *   true: enables the auto-renewal feature. In this case, the system automatically renews the instance upon expiration.
     *   false (default): disables the auto-renewal feature. In this case, you need to manually renew the instance upon expiration.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The cloud phone matrix IDs.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The subscription duration. The unit is specified by `PeriodUnit`. Valid values:
     *
     *   When `PeriodUnit` is set to **year**: 1.
     *   When `PeriodUnit` is set to **month**: 1, 2, 3, and 6.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * Valid values:
     *
     *   Month (default)
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'nodeIds' => 'NodeIds',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewCloudPhoneNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
