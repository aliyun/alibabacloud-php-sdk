<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody\quotaApplicationTemplates\period;

class quotaApplicationTemplates extends Model
{
    /**
     * @var float[]
     */
    public $applicableRange;

    /**
     * @var string
     */
    public $applicableType;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var mixed[]
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
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var period
     */
    public $period;

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
    public $quotaDescription;

    /**
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'applicableRange' => 'ApplicableRange',
        'applicableType' => 'ApplicableType',
        'desireValue' => 'DesireValue',
        'dimensions' => 'Dimensions',
        'effectiveTime' => 'EffectiveTime',
        'envLanguage' => 'EnvLanguage',
        'expireTime' => 'ExpireTime',
        'id' => 'Id',
        'noticeType' => 'NoticeType',
        'period' => 'Period',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory' => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaName' => 'QuotaName',
    ];

    public function validate()
    {
        if (\is_array($this->applicableRange)) {
            Model::validateArray($this->applicableRange);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (null !== $this->period) {
            $this->period->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicableRange) {
            if (\is_array($this->applicableRange)) {
                $res['ApplicableRange'] = [];
                $n1 = 0;
                foreach ($this->applicableRange as $item1) {
                    $res['ApplicableRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicableType) {
            $res['ApplicableType'] = $this->applicableType;
        }

        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['Dimensions'][$key1] = $value1;
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

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableRange'])) {
            if (!empty($map['ApplicableRange'])) {
                $model->applicableRange = [];
                $n1 = 0;
                foreach ($map['ApplicableRange'] as $item1) {
                    $model->applicableRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicableType'])) {
            $model->applicableType = $map['ApplicableType'];
        }

        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                foreach ($map['Dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
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
