<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateTemplateQuotaItemRequest\dimensions;
use AlibabaCloud\Tea\Model;

class CreateTemplateQuotaItemRequest extends Model
{
    /**
     * @description The requested value of the quota.
     *
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
     * @description The start time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * > If you leave this parameter empty, the quota takes effect immediately.
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
     * @description The end time of the validity period of the quota. Specify the value in UTC. This parameter is valid only if you set the QuotaCategory parameter to WhiteListLabel.
     *
     * > If you leave this parameter empty, no end time is specified.
     * @example 2021-01-20T09:25:56Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Specifies whether to send a notification about the application result. Valid values:
     *
     *   0 (default value): no
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
     * @description The quota type. Valid values:
     *
     *   CommonQuota: general quota
     *   WhiteListLabel: privilege
     *   FlowControl: API rate limit
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;
    protected $_name = [
        'desireValue'     => 'DesireValue',
        'dimensions'      => 'Dimensions',
        'effectiveTime'   => 'EffectiveTime',
        'envLanguage'     => 'EnvLanguage',
        'expireTime'      => 'ExpireTime',
        'noticeType'      => 'NoticeType',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory'   => 'QuotaCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateQuotaItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
