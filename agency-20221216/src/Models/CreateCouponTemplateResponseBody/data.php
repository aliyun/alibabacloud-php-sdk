<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\CreateCouponTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $costBearer;

    /**
     * @var int
     */
    public $couponTemplateID;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireddate;

    /**
     * @var string[]
     */
    public $productType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $vailddate;

    /**
     * @var string
     */
    public $vaildperioddays;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'costBearer' => 'CostBearer',
        'couponTemplateID' => 'CouponTemplateID',
        'createTime' => 'CreateTime',
        'expireddate' => 'Expireddate',
        'productType' => 'ProductType',
        'status' => 'Status',
        'templateName' => 'TemplateName',
        'vailddate' => 'Vailddate',
        'vaildperioddays' => 'Vaildperioddays',
        'validUntil' => 'ValidUntil',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->productType)) {
            Model::validateArray($this->productType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }

        if (null !== $this->costBearer) {
            $res['CostBearer'] = $this->costBearer;
        }

        if (null !== $this->couponTemplateID) {
            $res['CouponTemplateID'] = $this->couponTemplateID;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireddate) {
            $res['Expireddate'] = $this->expireddate;
        }

        if (null !== $this->productType) {
            if (\is_array($this->productType)) {
                $res['ProductType'] = [];
                $n1 = 0;
                foreach ($this->productType as $item1) {
                    $res['ProductType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->vailddate) {
            $res['Vailddate'] = $this->vailddate;
        }

        if (null !== $this->vaildperioddays) {
            $res['Vaildperioddays'] = $this->vaildperioddays;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }

        if (isset($map['CostBearer'])) {
            $model->costBearer = $map['CostBearer'];
        }

        if (isset($map['CouponTemplateID'])) {
            $model->couponTemplateID = $map['CouponTemplateID'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Expireddate'])) {
            $model->expireddate = $map['Expireddate'];
        }

        if (isset($map['ProductType'])) {
            if (!empty($map['ProductType'])) {
                $model->productType = [];
                $n1 = 0;
                foreach ($map['ProductType'] as $item1) {
                    $model->productType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Vailddate'])) {
            $model->vailddate = $map['Vailddate'];
        }

        if (isset($map['Vaildperioddays'])) {
            $model->vaildperioddays = $map['Vaildperioddays'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
