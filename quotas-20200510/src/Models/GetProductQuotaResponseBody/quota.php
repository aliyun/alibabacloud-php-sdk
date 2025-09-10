<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\period;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\quotaItems;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\usageMetric;

class quota extends Model
{
    /**
     * @var bool
     */
    public $adjustable;

    /**
     * @var float[]
     */
    public $applicableRange;

    /**
     * @var string
     */
    public $applicableType;

    /**
     * @var string
     */
    public $applyReasonTips;

    /**
     * @var bool
     */
    public $consumable;

    /**
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $globalQuota;

    /**
     * @var period
     */
    public $period;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $quotaArn;

    /**
     * @var string
     */
    public $quotaCategory;

    /**
     * @var string
     */
    public $quotaDescription;

    /**
     * @var quotaItems[]
     */
    public $quotaItems;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var string
     */
    public $quotaUnit;

    /**
     * @var float[]
     */
    public $supportedRange;

    /**
     * @var float
     */
    public $totalQuota;

    /**
     * @var float
     */
    public $totalUsage;

    /**
     * @var string
     */
    public $unadjustableDetail;

    /**
     * @var usageMetric
     */
    public $usageMetric;
    protected $_name = [
        'adjustable' => 'Adjustable',
        'applicableRange' => 'ApplicableRange',
        'applicableType' => 'ApplicableType',
        'applyReasonTips' => 'ApplyReasonTips',
        'consumable' => 'Consumable',
        'dimensions' => 'Dimensions',
        'effectiveTime' => 'EffectiveTime',
        'expireTime' => 'ExpireTime',
        'globalQuota' => 'GlobalQuota',
        'period' => 'Period',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaArn' => 'QuotaArn',
        'quotaCategory' => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaItems' => 'QuotaItems',
        'quotaName' => 'QuotaName',
        'quotaType' => 'QuotaType',
        'quotaUnit' => 'QuotaUnit',
        'supportedRange' => 'SupportedRange',
        'totalQuota' => 'TotalQuota',
        'totalUsage' => 'TotalUsage',
        'unadjustableDetail' => 'UnadjustableDetail',
        'usageMetric' => 'UsageMetric',
    ];

    public function validate()
    {
        if (\is_array($this->applicableRange)) {
            Model::validateArray($this->applicableRange);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (null !== $this->period) {
            $this->period->validate();
        }
        if (\is_array($this->quotaItems)) {
            Model::validateArray($this->quotaItems);
        }
        if (\is_array($this->supportedRange)) {
            Model::validateArray($this->supportedRange);
        }
        if (null !== $this->usageMetric) {
            $this->usageMetric->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustable) {
            $res['Adjustable'] = $this->adjustable;
        }

        if (null !== $this->applicableRange) {
            if (\is_array($this->applicableRange)) {
                $res['ApplicableRange'] = [];
                $n1 = 0;
                foreach ($this->applicableRange as $item1) {
                    $res['ApplicableRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicableType) {
            $res['ApplicableType'] = $this->applicableType;
        }

        if (null !== $this->applyReasonTips) {
            $res['ApplyReasonTips'] = $this->applyReasonTips;
        }

        if (null !== $this->consumable) {
            $res['Consumable'] = $this->consumable;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['Dimensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->globalQuota) {
            $res['GlobalQuota'] = $this->globalQuota;
        }

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        if (null !== $this->quotaArn) {
            $res['QuotaArn'] = $this->quotaArn;
        }

        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }

        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }

        if (null !== $this->quotaItems) {
            if (\is_array($this->quotaItems)) {
                $res['QuotaItems'] = [];
                $n1 = 0;
                foreach ($this->quotaItems as $item1) {
                    $res['QuotaItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }

        if (null !== $this->supportedRange) {
            if (\is_array($this->supportedRange)) {
                $res['SupportedRange'] = [];
                $n1 = 0;
                foreach ($this->supportedRange as $item1) {
                    $res['SupportedRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->totalUsage) {
            $res['TotalUsage'] = $this->totalUsage;
        }

        if (null !== $this->unadjustableDetail) {
            $res['UnadjustableDetail'] = $this->unadjustableDetail;
        }

        if (null !== $this->usageMetric) {
            $res['UsageMetric'] = null !== $this->usageMetric ? $this->usageMetric->toArray($noStream) : $this->usageMetric;
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
        if (isset($map['Adjustable'])) {
            $model->adjustable = $map['Adjustable'];
        }

        if (isset($map['ApplicableRange'])) {
            if (!empty($map['ApplicableRange'])) {
                $model->applicableRange = [];
                $n1 = 0;
                foreach ($map['ApplicableRange'] as $item1) {
                    $model->applicableRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicableType'])) {
            $model->applicableType = $map['ApplicableType'];
        }

        if (isset($map['ApplyReasonTips'])) {
            $model->applyReasonTips = $map['ApplyReasonTips'];
        }

        if (isset($map['Consumable'])) {
            $model->consumable = $map['Consumable'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                foreach ($map['Dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GlobalQuota'])) {
            $model->globalQuota = $map['GlobalQuota'];
        }

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        if (isset($map['QuotaArn'])) {
            $model->quotaArn = $map['QuotaArn'];
        }

        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }

        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }

        if (isset($map['QuotaItems'])) {
            if (!empty($map['QuotaItems'])) {
                $model->quotaItems = [];
                $n1 = 0;
                foreach ($map['QuotaItems'] as $item1) {
                    $model->quotaItems[$n1] = quotaItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }

        if (isset($map['SupportedRange'])) {
            if (!empty($map['SupportedRange'])) {
                $model->supportedRange = [];
                $n1 = 0;
                foreach ($map['SupportedRange'] as $item1) {
                    $model->supportedRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['TotalUsage'])) {
            $model->totalUsage = $map['TotalUsage'];
        }

        if (isset($map['UnadjustableDetail'])) {
            $model->unadjustableDetail = $map['UnadjustableDetail'];
        }

        if (isset($map['UsageMetric'])) {
            $model->usageMetric = usageMetric::fromMap($map['UsageMetric']);
        }

        return $model;
    }
}
