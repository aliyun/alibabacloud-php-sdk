<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody\quotaBatchApplications\auditStatusVos;
use AlibabaCloud\Tea\Model;

class quotaBatchApplications extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @description The time when the quota increase application was submitted. The value is displayed in UTC.
     *
     * @example 2022-09-23T02:38:18Z
     *
     * @var string
     */
    public $applyTime;

    /**
     * @description The number of applications in different approval states.
     *
     * @var auditStatusVos[]
     */
    public $auditStatusVos;

    /**
     * @description The ID of the quota application batch.
     *
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @description The requested value of the quota.
     *
     * @example 105
     *
     * @var float
     */
    public $desireValue;

    /**
     * @description The quota dimensions.
     *
     * Format: {"regionId":"cn-hangzhou"}.
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @description The start time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2023-05-22T16:00:00Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The end time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2024-05-14T02:08:56Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example vpc
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The quota ID.
     *
     * @example q_fhoz4k
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The quota type. Valid values:
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
     * @var string
     */
    public $reason;
    protected $_name = [
        'aliyunUids'              => 'AliyunUids',
        'applyTime'               => 'ApplyTime',
        'auditStatusVos'          => 'AuditStatusVos',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'desireValue'             => 'DesireValue',
        'dimensions'              => 'Dimensions',
        'effectiveTime'           => 'EffectiveTime',
        'expireTime'              => 'ExpireTime',
        'productCode'             => 'ProductCode',
        'quotaActionCode'         => 'QuotaActionCode',
        'quotaCategory'           => 'QuotaCategory',
        'reason'                  => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUids) {
            $res['AliyunUids'] = $this->aliyunUids;
        }
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }
        if (null !== $this->auditStatusVos) {
            $res['AuditStatusVos'] = [];
            if (null !== $this->auditStatusVos && \is_array($this->auditStatusVos)) {
                $n = 0;
                foreach ($this->auditStatusVos as $item) {
                    $res['AuditStatusVos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
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
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaBatchApplications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = $map['AliyunUids'];
            }
        }
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }
        if (isset($map['AuditStatusVos'])) {
            if (!empty($map['AuditStatusVos'])) {
                $model->auditStatusVos = [];
                $n                     = 0;
                foreach ($map['AuditStatusVos'] as $item) {
                    $model->auditStatusVos[$n++] = null !== $item ? auditStatusVos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
