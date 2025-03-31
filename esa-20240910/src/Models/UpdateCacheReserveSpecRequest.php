<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCacheReserveSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $targetQuotaGb;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'chargeType' => 'ChargeType',
        'instanceId' => 'InstanceId',
        'targetQuotaGb' => 'TargetQuotaGb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
