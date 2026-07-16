<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPostpaidSitePlansResponseBody;

use AlibabaCloud\Dara\Model;

class planInfo extends Model
{
    /**
     * @var string
     */
    public $billingMethod;

    /**
     * @var string
     */
    public $billingMode;

    /**
     * @var string
     */
    public $coverages;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planNameCn;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $saleStatus;

    /**
     * @var string
     */
    public $siteQuota;
    protected $_name = [
        'billingMethod' => 'BillingMethod',
        'billingMode' => 'BillingMode',
        'coverages' => 'Coverages',
        'planName' => 'PlanName',
        'planNameCn' => 'PlanNameCn',
        'planType' => 'PlanType',
        'saleStatus' => 'SaleStatus',
        'siteQuota' => 'SiteQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMethod) {
            $res['BillingMethod'] = $this->billingMethod;
        }

        if (null !== $this->billingMode) {
            $res['BillingMode'] = $this->billingMode;
        }

        if (null !== $this->coverages) {
            $res['Coverages'] = $this->coverages;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->planNameCn) {
            $res['PlanNameCn'] = $this->planNameCn;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->saleStatus) {
            $res['SaleStatus'] = $this->saleStatus;
        }

        if (null !== $this->siteQuota) {
            $res['SiteQuota'] = $this->siteQuota;
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
        if (isset($map['BillingMethod'])) {
            $model->billingMethod = $map['BillingMethod'];
        }

        if (isset($map['BillingMode'])) {
            $model->billingMode = $map['BillingMode'];
        }

        if (isset($map['Coverages'])) {
            $model->coverages = $map['Coverages'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['PlanNameCn'])) {
            $model->planNameCn = $map['PlanNameCn'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['SaleStatus'])) {
            $model->saleStatus = $map['SaleStatus'];
        }

        if (isset($map['SiteQuota'])) {
            $model->siteQuota = $map['SiteQuota'];
        }

        return $model;
    }
}
