<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody\quotaApplicationTemplates\period;
use AlibabaCloud\Tea\Model;

class quotaApplicationTemplates extends Model
{
    /**
     * @description None
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
     * @description The requested value of the quota.
     *
     * @example 802
     *
     * @var float
     */
    public $desireValue;

    /**
     * @description The quota dimensions.
     *
     * Format: {"regionId":"Region"}.
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
     * @description The language of the quota alert notification. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @description The end time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2022-09-29T06:07:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the quota template.
     *
     * @example 1****
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether Quota Center sends a notification about the application result. Valid values:
     *
     *   0: no
     *   3: yes
     *
     * @example 0
     *
     * @var int
     */
    public $noticeType;

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
     * @example The maximum number of security groups that can be created by the current account.
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The name of the quota.
     *
     * @example Maximum Number of Security Groups
     *
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'applicableRange'  => 'ApplicableRange',
        'applicableType'   => 'ApplicableType',
        'desireValue'      => 'DesireValue',
        'dimensions'       => 'Dimensions',
        'effectiveTime'    => 'EffectiveTime',
        'envLanguage'      => 'EnvLanguage',
        'expireTime'       => 'ExpireTime',
        'id'               => 'Id',
        'noticeType'       => 'NoticeType',
        'period'           => 'Period',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaCategory'    => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaName'        => 'QuotaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicableRange) {
            $res['ApplicableRange'] = $this->applicableRange;
        }
        if (null !== $this->applicableType) {
            $res['ApplicableType'] = $this->applicableType;
        }
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->envLanguage) {
            $res['EnvLanguage'] = $this->envLanguage;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
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
        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }
        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaApplicationTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableRange'])) {
            if (!empty($map['ApplicableRange'])) {
                $model->applicableRange = $map['ApplicableRange'];
            }
        }
        if (isset($map['ApplicableType'])) {
            $model->applicableType = $map['ApplicableType'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EnvLanguage'])) {
            $model->envLanguage = $map['EnvLanguage'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
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
        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }
        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        return $model;
    }
}
