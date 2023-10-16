<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\SearchTmOnsalesResponseBody;

use AlibabaCloud\Tea\Model;

class trademarks extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productDesc;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'classification'     => 'Classification',
        'icon'               => 'Icon',
        'orderPrice'         => 'OrderPrice',
        'partnerCode'        => 'PartnerCode',
        'productCode'        => 'ProductCode',
        'productDesc'        => 'ProductDesc',
        'registrationNumber' => 'RegistrationNumber',
        'status'             => 'Status',
        'trademarkName'      => 'TrademarkName',
        'uid'                => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
