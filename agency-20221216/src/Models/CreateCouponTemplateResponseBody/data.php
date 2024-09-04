<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\CreateCouponTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Custom
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @example Partner
     *
     * @var string
     */
    public $costBearer;

    /**
     * @example 111111
     *
     * @var int
     */
    public $couponTemplateID;

    /**
     * @example 2024-04-02 16:15:31
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-01-01
     *
     * @var string
     */
    public $expireddate;

    /**
     * @var string[]
     */
    public $productType;

    /**
     * @example APPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example 2024-01-01
     *
     * @var string
     */
    public $vailddate;

    /**
     * @example 1
     *
     * @var string
     */
    public $vaildperioddays;

    /**
     * @example Validity Duration
     *
     * @var string
     */
    public $validUntil;

    /**
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'costBearer'         => 'CostBearer',
        'couponTemplateID'   => 'CouponTemplateID',
        'createTime'         => 'CreateTime',
        'expireddate'        => 'Expireddate',
        'productType'        => 'ProductType',
        'status'             => 'Status',
        'templateName'       => 'TemplateName',
        'vailddate'          => 'Vailddate',
        'vaildperioddays'    => 'Vaildperioddays',
        'validUntil'         => 'ValidUntil',
        'value'              => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ProductType'] = $this->productType;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->productType = $map['ProductType'];
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
