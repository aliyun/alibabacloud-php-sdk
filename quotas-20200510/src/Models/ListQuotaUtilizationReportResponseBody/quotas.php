<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponseBody\quotas\flowControlAlgo;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponseBody\quotas\usageMetric;

class quotas extends Model
{
    /**
     * @var bool
     */
    public $adjustable;

    /**
     * @var bool
     */
    public $consumable;

    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var flowControlAlgo
     */
    public $flowControlAlgo;

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
     * @var string
     */
    public $quotaName;

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

    /**
     * @var float
     */
    public $utilization;

    /**
     * @var string
     */
    public $utilizationStatus;
    protected $_name = [
        'adjustable' => 'Adjustable',
        'consumable' => 'Consumable',
        'dimensions' => 'Dimensions',
        'flowControlAlgo' => 'FlowControlAlgo',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaArn' => 'QuotaArn',
        'quotaCategory' => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaName' => 'QuotaName',
        'totalQuota' => 'TotalQuota',
        'totalUsage' => 'TotalUsage',
        'unadjustableDetail' => 'UnadjustableDetail',
        'usageMetric' => 'UsageMetric',
        'utilization' => 'Utilization',
        'utilizationStatus' => 'UtilizationStatus',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (null !== $this->flowControlAlgo) {
            $this->flowControlAlgo->validate();
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

        if (null !== $this->flowControlAlgo) {
            $res['FlowControlAlgo'] = null !== $this->flowControlAlgo ? $this->flowControlAlgo->toArray($noStream) : $this->flowControlAlgo;
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

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
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

        if (null !== $this->utilization) {
            $res['Utilization'] = $this->utilization;
        }

        if (null !== $this->utilizationStatus) {
            $res['UtilizationStatus'] = $this->utilizationStatus;
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

        if (isset($map['FlowControlAlgo'])) {
            $model->flowControlAlgo = flowControlAlgo::fromMap($map['FlowControlAlgo']);
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

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
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

        if (isset($map['Utilization'])) {
            $model->utilization = $map['Utilization'];
        }

        if (isset($map['UtilizationStatus'])) {
            $model->utilizationStatus = $map['UtilizationStatus'];
        }

        return $model;
    }
}
