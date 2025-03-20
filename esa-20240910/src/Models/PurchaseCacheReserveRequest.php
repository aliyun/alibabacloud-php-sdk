<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurchaseCacheReserveRequest extends Model
{
    /**
     * @description Whether to automatically pay. The default value is false.
     * - true: Automatically pay.
     * - false: Do not automatically pay.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Whether to auto-renew:
     * - true: Auto-renew.
     * - false: Do not auto-renew.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Billing type
     * - PREPAY: Prepaid.
     * - POSTPAY: Postpaid.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Cache retention region
     * - HK: Hong Kong, China
     * - CN-beijing: Mainland China - Beijing
     *
     * @example HK
     *
     * @var string
     */
    public $crRegion;

    /**
     * @description Purchase period (unit: month).
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description Cache retention specification (unit: GB).
     *
     * @example 512000
     *
     * @var int
     */
    public $quotaGb;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'crRegion' => 'CrRegion',
        'period' => 'Period',
        'quotaGb' => 'QuotaGb',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->crRegion) {
            $res['CrRegion'] = $this->crRegion;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->quotaGb) {
            $res['QuotaGb'] = $this->quotaGb;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseCacheReserveRequest
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CrRegion'])) {
            $model->crRegion = $map['CrRegion'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['QuotaGb'])) {
            $model->quotaGb = $map['QuotaGb'];
        }

        return $model;
    }
}
