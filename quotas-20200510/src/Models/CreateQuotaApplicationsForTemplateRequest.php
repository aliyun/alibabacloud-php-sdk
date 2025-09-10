<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateRequest\dimensions;

class CreateQuotaApplicationsForTemplateRequest extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $envLanguage;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $noticeType;

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
    public $quotaCategory;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'aliyunUids' => 'AliyunUids',
        'desireValue' => 'DesireValue',
        'dimensions' => 'Dimensions',
        'effectiveTime' => 'EffectiveTime',
        'envLanguage' => 'EnvLanguage',
        'expireTime' => 'ExpireTime',
        'noticeType' => 'NoticeType',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory' => 'QuotaCategory',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunUids)) {
            Model::validateArray($this->aliyunUids);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUids) {
            if (\is_array($this->aliyunUids)) {
                $res['AliyunUids'] = [];
                $n1 = 0;
                foreach ($this->aliyunUids as $item1) {
                    $res['AliyunUids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = [];
                $n1 = 0;
                foreach ($map['AliyunUids'] as $item1) {
                    $model->aliyunUids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
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
