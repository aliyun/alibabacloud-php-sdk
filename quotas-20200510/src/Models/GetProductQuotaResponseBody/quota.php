<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\period;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\quotaItems;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota\usageMetric;
use AlibabaCloud\Tea\Model;

class quota extends Model
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
     * @description The range of the quota value.
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
     * @example continuous
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
     * @description The quota dimension. Format: `{"regionId":"Region"}`.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @description The start time of the validity period of the quota. Specify the value in UTC.
     *
     * @example 2022-09-28T06:06:00Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The end time of the validity period of the quota. Specify the value in UTC.
     *
     * @example 2022-09-29T06:06:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the quota is a global quota. Valid values:
     *
     *   true: The quota is shared in all regions.
     *   false: The quota is independently used in a region.
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
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the quota.
     *
     * @example acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/
     *
     * @var string
     */
    public $quotaArn;

    /**
     * @description The type of the quota. Valid values:
     *
     *   CommonQuota: general quota
     *   FlowControl: API rate limit
     *   WhiteListLabel: whitelist quota
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The description of the quota.
     *
     * @example The maximum number of security groups that can be owned by the current account
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The details of the quotas.
     *
     * @var quotaItems[]
     */
    public $quotaItems;

    /**
     * @description The name of the quota.
     *
     * @example Maximum Number of Security Groups
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The type of the quota. Valid values:
     *
     *   privilege
     *   normal (default value)
     *
     * @example normal
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description The unit of the new quota value.
     *
     * > The unit of each quota is unique.** For example, the quota whose ID is `q_cbdch3` represents the maximum number of Container Service for Kubernetes (ACK) clusters. The unit of this quota is clusters. The quota whose ID is `q_security-groups` represents the maximum number of security groups. The unit of this quota is security groups.
     * @example Count
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The range of the quota value.
     *
     * @var float[]
     */
    public $supportedRange;

    /**
     * @description The value of the quota.
     *
     * @example 801
     *
     * @var float
     */
    public $totalQuota;

    /**
     * @description The used quota.
     *
     * @example 26
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
     *   supportTicketRequired: The quota can be increased only by submitting a ticket.
     *
     * @example limitReached
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
     * @return quota
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
