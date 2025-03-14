<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DowngradeAndroidInstanceGroupRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances that you want to delete.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @description Specifies whether to enable the auto-payment feature. Default value: false.
     *
     * Valid values:
     *
     *   true: enables the auto-payment feature. Ensure your account has sufficient balance to use this feature.
     *   false: disables the auto-payment feature. This requires manual payment each time you place an order.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the instance group.
     *
     * This parameter is required.
     *
     * @example ag-cuv4scs4obxhs****
     *
     * @var string
     */
    public $instanceGroupId;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'autoPay' => 'AutoPay',
        'instanceGroupId' => 'InstanceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DowngradeAndroidInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        return $model;
    }
}
