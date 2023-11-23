<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryEffectiveInvoiceListByBillNosResponseBody\returnValue;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $aliCompany;

    /**
     * @var int
     */
    public $aliId;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var float
     */
    public $buildAmount;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $invoiceNo;

    /**
     * @var string
     */
    public $invoiceStatus;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $orderItemNo;

    /**
     * @var string
     */
    public $parentContractNo;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $taxRegisgerNo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliCompany'       => 'AliCompany',
        'aliId'            => 'AliId',
        'amount'           => 'Amount',
        'appCode'          => 'AppCode',
        'buildAmount'      => 'BuildAmount',
        'category'         => 'Category',
        'encryptProps'     => 'EncryptProps',
        'invoiceNo'        => 'InvoiceNo',
        'invoiceStatus'    => 'InvoiceStatus',
        'invoiceTitle'     => 'InvoiceTitle',
        'language'         => 'Language',
        'orderItemNo'      => 'OrderItemNo',
        'parentContractNo' => 'ParentContractNo',
        'sign'             => 'Sign',
        'site'             => 'Site',
        'taxRegisgerNo'    => 'TaxRegisgerNo',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliCompany) {
            $res['AliCompany'] = $this->aliCompany;
        }
        if (null !== $this->aliId) {
            $res['AliId'] = $this->aliId;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->buildAmount) {
            $res['BuildAmount'] = $this->buildAmount;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceStatus) {
            $res['InvoiceStatus'] = $this->invoiceStatus;
        }
        if (null !== $this->invoiceTitle) {
            $res['InvoiceTitle'] = $this->invoiceTitle;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->orderItemNo) {
            $res['OrderItemNo'] = $this->orderItemNo;
        }
        if (null !== $this->parentContractNo) {
            $res['ParentContractNo'] = $this->parentContractNo;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->taxRegisgerNo) {
            $res['TaxRegisgerNo'] = $this->taxRegisgerNo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliCompany'])) {
            $model->aliCompany = $map['AliCompany'];
        }
        if (isset($map['AliId'])) {
            $model->aliId = $map['AliId'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['BuildAmount'])) {
            $model->buildAmount = $map['BuildAmount'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['InvoiceStatus'])) {
            $model->invoiceStatus = $map['InvoiceStatus'];
        }
        if (isset($map['InvoiceTitle'])) {
            $model->invoiceTitle = $map['InvoiceTitle'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OrderItemNo'])) {
            $model->orderItemNo = $map['OrderItemNo'];
        }
        if (isset($map['ParentContractNo'])) {
            $model->parentContractNo = $map['ParentContractNo'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['TaxRegisgerNo'])) {
            $model->taxRegisgerNo = $map['TaxRegisgerNo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
