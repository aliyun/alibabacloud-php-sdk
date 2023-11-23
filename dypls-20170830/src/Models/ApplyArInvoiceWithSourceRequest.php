<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest\address;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest\customer;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest\sourceList;
use AlibabaCloud\Tea\Model;

class ApplyArInvoiceWithSourceRequest extends Model
{
    /**
     * @var address
     */
    public $address;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $applier;

    /**
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var customer
     */
    public $customer;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var float
     */
    public $excludingTaxAmount;

    /**
     * @var string
     */
    public $inputType;

    /**
     * @var string
     */
    public $invoiceType;

    /**
     * @var bool
     */
    public $isMerged;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $ouCode;

    /**
     * @var string
     */
    public $purchaserBankInfo;

    /**
     * @var string
     */
    public $purchaserContactInfo;

    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @var string
     */
    public $requestNo;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var sourceList[]
     */
    public $sourceList;

    /**
     * @var float
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'address'              => 'Address',
        'amount'               => 'Amount',
        'appCode'              => 'AppCode',
        'applier'              => 'Applier',
        'applyDate'            => 'ApplyDate',
        'currencyCode'         => 'CurrencyCode',
        'customer'             => 'Customer',
        'encryptProps'         => 'EncryptProps',
        'excludingTaxAmount'   => 'ExcludingTaxAmount',
        'inputType'            => 'InputType',
        'invoiceType'          => 'InvoiceType',
        'isMerged'             => 'IsMerged',
        'language'             => 'Language',
        'materialType'         => 'MaterialType',
        'memo'                 => 'Memo',
        'ouCode'               => 'OuCode',
        'purchaserBankInfo'    => 'PurchaserBankInfo',
        'purchaserContactInfo' => 'PurchaserContactInfo',
        'purchaserName'        => 'PurchaserName',
        'purchaserTaxNo'       => 'PurchaserTaxNo',
        'requestNo'            => 'RequestNo',
        'sign'                 => 'Sign',
        'siteId'               => 'SiteId',
        'sourceList'           => 'SourceList',
        'taxAmount'            => 'TaxAmount',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->applier) {
            $res['Applier'] = $this->applier;
        }
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->excludingTaxAmount) {
            $res['ExcludingTaxAmount'] = $this->excludingTaxAmount;
        }
        if (null !== $this->inputType) {
            $res['InputType'] = $this->inputType;
        }
        if (null !== $this->invoiceType) {
            $res['InvoiceType'] = $this->invoiceType;
        }
        if (null !== $this->isMerged) {
            $res['IsMerged'] = $this->isMerged;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->ouCode) {
            $res['OuCode'] = $this->ouCode;
        }
        if (null !== $this->purchaserBankInfo) {
            $res['PurchaserBankInfo'] = $this->purchaserBankInfo;
        }
        if (null !== $this->purchaserContactInfo) {
            $res['PurchaserContactInfo'] = $this->purchaserContactInfo;
        }
        if (null !== $this->purchaserName) {
            $res['PurchaserName'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['PurchaserTaxNo'] = $this->purchaserTaxNo;
        }
        if (null !== $this->requestNo) {
            $res['RequestNo'] = $this->requestNo;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->sourceList) {
            $res['SourceList'] = [];
            if (null !== $this->sourceList && \is_array($this->sourceList)) {
                $n = 0;
                foreach ($this->sourceList as $item) {
                    $res['SourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taxAmount) {
            $res['TaxAmount'] = $this->taxAmount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyArInvoiceWithSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Applier'])) {
            $model->applier = $map['Applier'];
        }
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }
        if (isset($map['Customer'])) {
            $model->customer = customer::fromMap($map['Customer']);
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['ExcludingTaxAmount'])) {
            $model->excludingTaxAmount = $map['ExcludingTaxAmount'];
        }
        if (isset($map['InputType'])) {
            $model->inputType = $map['InputType'];
        }
        if (isset($map['InvoiceType'])) {
            $model->invoiceType = $map['InvoiceType'];
        }
        if (isset($map['IsMerged'])) {
            $model->isMerged = $map['IsMerged'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['OuCode'])) {
            $model->ouCode = $map['OuCode'];
        }
        if (isset($map['PurchaserBankInfo'])) {
            $model->purchaserBankInfo = $map['PurchaserBankInfo'];
        }
        if (isset($map['PurchaserContactInfo'])) {
            $model->purchaserContactInfo = $map['PurchaserContactInfo'];
        }
        if (isset($map['PurchaserName'])) {
            $model->purchaserName = $map['PurchaserName'];
        }
        if (isset($map['PurchaserTaxNo'])) {
            $model->purchaserTaxNo = $map['PurchaserTaxNo'];
        }
        if (isset($map['RequestNo'])) {
            $model->requestNo = $map['RequestNo'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SourceList'])) {
            if (!empty($map['SourceList'])) {
                $model->sourceList = [];
                $n                 = 0;
                foreach ($map['SourceList'] as $item) {
                    $model->sourceList[$n++] = null !== $item ? sourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaxAmount'])) {
            $model->taxAmount = $map['TaxAmount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
