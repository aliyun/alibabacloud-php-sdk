<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest\dimensions;
use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationRequest extends Model
{
    /**
     * @description The mode in which you want the application to be reviewed. Valid values:
     *
     *   Sync: The application is reviewed in a synchronous manner. Quota Center automatically reviews the application. The result is returned immediately after you submit the application. However, the chance of an approval for an application that is reviewed in Sync mode is lower than the chance of an approval for an application that is reviewed in Async mode. The validity period of the new quota value is 1 hour.
     *   Async: The application is reviewed in an asynchronous manner. An Alibaba Cloud support engineer reviews the application. The chance of an approval for an application that is reviewed in Async mode is higher than the chance of an approval for an application that is reviewed in Sync mode. The validity period of the new quota value is one month.
     *
     * > This parameter is available only for ECS Quotas by Instance Type.
     * @example Sync
     *
     * @var string
     */
    public $auditMode;

    /**
     * @description The requested value of the quota.
     *
     * > Applications are reviewed by the technical support team of each Alibaba Cloud service. To increase the success rate of your application, you must specify a reasonable quota value and detailed reasons when you submit an application to increase the value of the quota.
     * @example 804
     *
     * @var float
     */
    public $desireValue;

    /**
     * @description The quota dimensions.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The end time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * > If you do not specify an end time, the default end time is 99 years after the quota application is submitted.
     * @example 2021-01-19T09:25:56Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The language of the quota alert notification. Valid values:
     *
     *   zh (default value): Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @description The start time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * > If you do not specify a start time, the default start time is the time when the quota application is submitted.
     * @example 2021-01-20T09:25:56Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Specifies whether to send a notification about the application result. Valid values:
     *
     *   0 (default value): sends a notification about the application result.
     *   3: A notification about the application result is sent.
     *
     * @example 0
     *
     * @var int
     */
    public $noticeType;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
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
     * @description The type of the quota.
     *
     *   CommonQuota (default value): general quota
     *   FlowControl: API rate limit
     *   WhiteListLabel: whitelist quota
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The reason for the application.
     *
     * > Applications are reviewed by the technical support team of each Alibaba Cloud service. To increase the success rate of your application, you must specify a reasonable quota value and detailed reasons when you submit an application to increase the value of the quota.
     * @example Scale Out
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'auditMode'       => 'AuditMode',
        'desireValue'     => 'DesireValue',
        'dimensions'      => 'Dimensions',
        'effectiveTime'   => 'EffectiveTime',
        'envLanguage'     => 'EnvLanguage',
        'expireTime'      => 'ExpireTime',
        'noticeType'      => 'NoticeType',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory'   => 'QuotaCategory',
        'reason'          => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditMode) {
            $res['AuditMode'] = $this->auditMode;
        }
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
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
     * @return CreateQuotaApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditMode'])) {
            $model->auditMode = $map['AuditMode'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
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
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
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
