<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;

use AlibabaCloud\Tea\Model;

class invoiceInfo extends Model
{
    /**
     * @var string
     */
    public $buyerAdd;

    /**
     * @var string
     */
    public $buyerBankAcc;

    /**
     * @var string
     */
    public $buyerBankAdd;

    /**
     * @var string
     */
    public $buyerPhone;

    /**
     * @var string
     */
    public $buyerTaxNum;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $deliveryArea;

    /**
     * @var string
     */
    public $deliveryCity;

    /**
     * @var string
     */
    public $deliveryProvince;

    /**
     * @var string
     */
    public $deliveryStreet;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $invoiceMaterial;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var string
     */
    public $receiverPhone;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'buyerAdd'         => 'buyer_add',
        'buyerBankAcc'     => 'buyer_bank_acc',
        'buyerBankAdd'     => 'buyer_bank_add',
        'buyerPhone'       => 'buyer_phone',
        'buyerTaxNum'      => 'buyer_tax_num',
        'deliveryAddress'  => 'delivery_address',
        'deliveryArea'     => 'delivery_area',
        'deliveryCity'     => 'delivery_city',
        'deliveryProvince' => 'delivery_province',
        'deliveryStreet'   => 'delivery_street',
        'email'            => 'email',
        'invoiceMaterial'  => 'invoice_material',
        'invoiceTitle'     => 'invoice_title',
        'invoiceType'      => 'invoice_type',
        'receiverName'     => 'receiver_name',
        'receiverPhone'    => 'receiver_phone',
        'remark'           => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerAdd) {
            $res['buyer_add'] = $this->buyerAdd;
        }
        if (null !== $this->buyerBankAcc) {
            $res['buyer_bank_acc'] = $this->buyerBankAcc;
        }
        if (null !== $this->buyerBankAdd) {
            $res['buyer_bank_add'] = $this->buyerBankAdd;
        }
        if (null !== $this->buyerPhone) {
            $res['buyer_phone'] = $this->buyerPhone;
        }
        if (null !== $this->buyerTaxNum) {
            $res['buyer_tax_num'] = $this->buyerTaxNum;
        }
        if (null !== $this->deliveryAddress) {
            $res['delivery_address'] = $this->deliveryAddress;
        }
        if (null !== $this->deliveryArea) {
            $res['delivery_area'] = $this->deliveryArea;
        }
        if (null !== $this->deliveryCity) {
            $res['delivery_city'] = $this->deliveryCity;
        }
        if (null !== $this->deliveryProvince) {
            $res['delivery_province'] = $this->deliveryProvince;
        }
        if (null !== $this->deliveryStreet) {
            $res['delivery_street'] = $this->deliveryStreet;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->invoiceMaterial) {
            $res['invoice_material'] = $this->invoiceMaterial;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }
        if (null !== $this->receiverName) {
            $res['receiver_name'] = $this->receiverName;
        }
        if (null !== $this->receiverPhone) {
            $res['receiver_phone'] = $this->receiverPhone;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoiceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buyer_add'])) {
            $model->buyerAdd = $map['buyer_add'];
        }
        if (isset($map['buyer_bank_acc'])) {
            $model->buyerBankAcc = $map['buyer_bank_acc'];
        }
        if (isset($map['buyer_bank_add'])) {
            $model->buyerBankAdd = $map['buyer_bank_add'];
        }
        if (isset($map['buyer_phone'])) {
            $model->buyerPhone = $map['buyer_phone'];
        }
        if (isset($map['buyer_tax_num'])) {
            $model->buyerTaxNum = $map['buyer_tax_num'];
        }
        if (isset($map['delivery_address'])) {
            $model->deliveryAddress = $map['delivery_address'];
        }
        if (isset($map['delivery_area'])) {
            $model->deliveryArea = $map['delivery_area'];
        }
        if (isset($map['delivery_city'])) {
            $model->deliveryCity = $map['delivery_city'];
        }
        if (isset($map['delivery_province'])) {
            $model->deliveryProvince = $map['delivery_province'];
        }
        if (isset($map['delivery_street'])) {
            $model->deliveryStreet = $map['delivery_street'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['invoice_material'])) {
            $model->invoiceMaterial = $map['invoice_material'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }
        if (isset($map['receiver_name'])) {
            $model->receiverName = $map['receiver_name'];
        }
        if (isset($map['receiver_phone'])) {
            $model->receiverPhone = $map['receiver_phone'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
