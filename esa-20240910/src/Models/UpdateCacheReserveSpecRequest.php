<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateCacheReserveSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable auto payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example esa-cr-9tuv*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $targetQuotaGb;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'chargeType' => 'ChargeType',
        'instanceId' => 'InstanceId',
        'targetQuotaGb' => 'TargetQuotaGb',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->targetQuotaGb) {
            $res['TargetQuotaGb'] = $this->targetQuotaGb;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCacheReserveSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TargetQuotaGb'])) {
            $model->targetQuotaGb = $map['TargetQuotaGb'];
        }

        return $model;
    }
}
