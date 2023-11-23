<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateRequest\dimensions;
use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationsForTemplateRequest extends Model
{
    /**
     * @description The Alibaba Cloud accounts for which the quotas are applied.
     *
     * >  For more information about the members of a resource directory, see [Query all the members in a resource directory](~~604207~~).
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @description The requested value of the quota.
     *
     * >  Applications are reviewed by the technical support team of each Alibaba Cloud service. To increase the success rate of your application, you must specify a reasonable quota value and detailed reasons when you submit the application.
     * @example 12
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
     * @description The start time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * >  If you do not specify a start time, the value is the time when the quota application is submitted.
     * @example 2021-01-19T09:25:56Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The language of the notification about the application result. Valid values:
     *
     *   zh (default): Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @description The end time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * >  If you do not specify an end time, the value is 99 years after the start time of the validity period.
     * @example 2021-01-20T09:25:56Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Specifies whether to send a notification about the application result. Valid values:
     *
     *   0 (default): no
     *   3: yes
     *
     * @example 0
     *
     * @var int
     */
    public $noticeType;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * >  For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
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
     * @description The quota type. Valid values:
     *
     *   CommonQuota (default): general quota
     *   FlowControl: API rate limit
     *   WhiteListLabel: privilege
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The reason for the quota application.
     *
     * >  Applications are reviewed by the technical support team of each Alibaba Cloud service. To increase the success rate of your application, you must specify a reasonable quota value and detailed reasons when you submit the application.
     * @example Scale Out
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'aliyunUids'      => 'AliyunUids',
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
        if (null !== $this->aliyunUids) {
            $res['AliyunUids'] = $this->aliyunUids;
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
     * @return CreateQuotaApplicationsForTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = $map['AliyunUids'];
            }
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
