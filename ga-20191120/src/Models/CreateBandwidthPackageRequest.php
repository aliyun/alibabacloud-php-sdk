<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateBandwidthPackageRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @var int
     */
    public $ratio;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @var string
     */
    public $cbnGeographicRegionIdB;

    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'regionId'               => 'RegionId',
        'bandwidth'              => 'Bandwidth',
        'duration'               => 'Duration',
        'pricingCycle'           => 'PricingCycle',
        'autoPay'                => 'AutoPay',
        'clientToken'            => 'ClientToken',
        'type'                   => 'Type',
        'bandwidthType'          => 'BandwidthType',
        'autoUseCoupon'          => 'AutoUseCoupon',
        'ratio'                  => 'Ratio',
        'billingType'            => 'BillingType',
        'chargeType'             => 'ChargeType',
        'cbnGeographicRegionIdA' => 'CbnGeographicRegionIdA',
        'cbnGeographicRegionIdB' => 'CbnGeographicRegionIdB',
        'promotionOptionNo'      => 'PromotionOptionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cbnGeographicRegionIdA) {
            $res['CbnGeographicRegionIdA'] = $this->cbnGeographicRegionIdA;
        }
        if (null !== $this->cbnGeographicRegionIdB) {
            $res['CbnGeographicRegionIdB'] = $this->cbnGeographicRegionIdB;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBandwidthPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CbnGeographicRegionIdA'])) {
            $model->cbnGeographicRegionIdA = $map['CbnGeographicRegionIdA'];
        }
        if (isset($map['CbnGeographicRegionIdB'])) {
            $model->cbnGeographicRegionIdB = $map['CbnGeographicRegionIdB'];
        }
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        return $model;
    }
}
