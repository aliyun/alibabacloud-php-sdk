<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCommissionableProductsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actualStartMonth;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $eligibleForCommission;

    /**
     * @var string
     */
    public $eligibleForDiscount;

    /**
     * @var string
     */
    public $endMonth;

    /**
     * @var string
     */
    public $productCampaign;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $sevenCoreProducts;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'actualStartMonth' => 'ActualStartMonth',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'eligibleForCommission' => 'EligibleForCommission',
        'eligibleForDiscount' => 'EligibleForDiscount',
        'endMonth' => 'EndMonth',
        'productCampaign' => 'ProductCampaign',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'sevenCoreProducts' => 'SevenCoreProducts',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualStartMonth) {
            $res['ActualStartMonth'] = $this->actualStartMonth;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->eligibleForCommission) {
            $res['EligibleForCommission'] = $this->eligibleForCommission;
        }

        if (null !== $this->eligibleForDiscount) {
            $res['EligibleForDiscount'] = $this->eligibleForDiscount;
        }

        if (null !== $this->endMonth) {
            $res['EndMonth'] = $this->endMonth;
        }

        if (null !== $this->productCampaign) {
            $res['ProductCampaign'] = $this->productCampaign;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->sevenCoreProducts) {
            $res['SevenCoreProducts'] = $this->sevenCoreProducts;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActualStartMonth'])) {
            $model->actualStartMonth = $map['ActualStartMonth'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['EligibleForCommission'])) {
            $model->eligibleForCommission = $map['EligibleForCommission'];
        }

        if (isset($map['EligibleForDiscount'])) {
            $model->eligibleForDiscount = $map['EligibleForDiscount'];
        }

        if (isset($map['EndMonth'])) {
            $model->endMonth = $map['EndMonth'];
        }

        if (isset($map['ProductCampaign'])) {
            $model->productCampaign = $map['ProductCampaign'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['SevenCoreProducts'])) {
            $model->sevenCoreProducts = $map['SevenCoreProducts'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
