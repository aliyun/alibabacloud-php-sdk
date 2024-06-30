<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemRequest\dimensions;
use AlibabaCloud\Tea\Model;

class ModifyTemplateQuotaItemRequest extends Model
{
    /**
     * @example 804
     *
     * @var float
     */
    public $desireValue;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @example 2021-01-19T09:25:56Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @example 2021-01-20T09:25:56Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description This parameter is required.
     *
     * @example 1****
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $noticeType;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;

    /**
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
        'id'              => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return ModifyTemplateQuotaItemRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
