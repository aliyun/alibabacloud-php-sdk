<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas\period;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas\quotaItems;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas\usageMetric;
use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @description Indicates whether the quota is adjustable. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $adjustable;

    /**
     * @description N/A
     *
     * @var float[]
     */
    public $applicableRange;

    /**
     * @description The type of the adjustable value. Valid values:
     *
     *   continuous
     *   discontinuous
     *
     * @example discontinuous
     *
     * @var string
     */
    public $applicableType;

    /**
     * @description The reason for submitting a quota increase request.
     *
     * @example The business xxx is expected to grow by 50%.
     *
     * @var string
     */
    public $applyReasonTips;

    /**
     * @description Indicates whether the system shows the used value of the quota. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $consumable;

    /**
     * @description The quota dimensions. Format: `{"regionId":"Region"}`.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @description The start time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2022-09-28T06:07:00Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The end time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2022-09-29T06:07:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the quota is a global quota. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $globalQuota;

    /**
     * @description The calculation cycle of the quota.
     *
     * @var period
     */
    public $period;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example ecs-spec
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The quota ID.
     *
     * @example ecs.g5.2xlarge
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the quota.
     *
     * @example acs:quotas:cn-hangzhou:107992689699****:quota/ecs/ecs.g5.2xlarge/postpaid/vpc/cn-hangzhou/instancetype/cn-hangzhou-i
     *
     * @var string
     */
    public $quotaArn;

    /**
     * @description The type of the quota. Valid values:
     *
     *   CommonQuota: general quota
     *   FlowControl: API rate limit
     *   WhiteListLabel: privilege
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The description of the quota.
     *
     * @example ecs.g5.2xlarge
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The details of the quota.
     *
     * @var quotaItems[]
     */
    public $quotaItems;

    /**
     * @description The quota name.
     *
     * @example ecs.g5.2xlarge
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The type of the quota. Valid values:
     *
     *   privilege
     *   normal
     *
     * @example privilege
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description The unit of the quota.
     *
     * @example AMOUNT
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description N/A
     *
     * @var float[]
     */
    public $supportedRange;

    /**
     * @description The quota value.
     *
     * @example 200
     *
     * @var float
     */
    public $totalQuota;

    /**
     * @description The quota usage.
     *
     * @example 1
     *
     * @var float
     */
    public $totalUsage;

    /**
     * @description The reason why the quota is not adjustable. Valid values:
     *
     *   nonactivated: The service is not activated.
     *   applicationProcess: The application is being processed.
     *   limitReached: The quota limit is reached.
     *
     * @example applicationProcess
     *
     * @var string
     */
    public $unadjustableDetail;

    /**
     * @var usageMetric
     */
    public $usageMetric;
    protected $_name = [
        'adjustable'         => 'Adjustable',
        'applicableRange'    => 'ApplicableRange',
        'applicableType'     => 'ApplicableType',
        'applyReasonTips'    => 'ApplyReasonTips',
        'consumable'         => 'Consumable',
        'dimensions'         => 'Dimensions',
        'effectiveTime'      => 'EffectiveTime',
        'expireTime'         => 'ExpireTime',
        'globalQuota'        => 'GlobalQuota',
        'period'             => 'Period',
        'productCode'        => 'ProductCode',
        'quotaActionCode'    => 'QuotaActionCode',
        'quotaArn'           => 'QuotaArn',
        'quotaCategory'      => 'QuotaCategory',
        'quotaDescription'   => 'QuotaDescription',
        'quotaItems'         => 'QuotaItems',
        'quotaName'          => 'QuotaName',
        'quotaType'          => 'QuotaType',
        'quotaUnit'          => 'QuotaUnit',
        'supportedRange'     => 'SupportedRange',
        'totalQuota'         => 'TotalQuota',
        'totalUsage'         => 'TotalUsage',
        'unadjustableDetail' => 'UnadjustableDetail',
        'usageMetric'        => 'UsageMetric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustable) {
            $res['Adjustable'] = $this->adjustable;
        }
        if (null !== $this->applicableRange) {
            $res['ApplicableRange'] = $this->applicableRange;
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
            $res['Dimensions'] = $this->dimensions;
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
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
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
            $res['QuotaItems'] = [];
            if (null !== $this->quotaItems && \is_array($this->quotaItems)) {
                $n = 0;
                foreach ($this->quotaItems as $item) {
                    $res['QuotaItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SupportedRange'] = $this->supportedRange;
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
            $res['UsageMetric'] = null !== $this->usageMetric ? $this->usageMetric->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adjustable'])) {
            $model->adjustable = $map['Adjustable'];
        }
        if (isset($map['ApplicableRange'])) {
            if (!empty($map['ApplicableRange'])) {
                $model->applicableRange = $map['ApplicableRange'];
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
            $model->dimensions = $map['Dimensions'];
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
                $n                 = 0;
                foreach ($map['QuotaItems'] as $item) {
                    $model->quotaItems[$n++] = null !== $item ? quotaItems::fromMap($item) : $item;
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
                $model->supportedRange = $map['SupportedRange'];
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
