<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\customer;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\detailList;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\logisticsInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
    public $currencyCode;

    /**
     * @var customer
     */
    public $customer;

    /**
     * @var detailList[]
     */
    public $detailList;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var float
     */
    public $excludingTaxAmount;

    /**
     * @var float
     */
    public $excludingTaxRedAmount;

    /**
     * @var float
     */
    public $excludingTaxRemainAmount;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceDate;

    /**
     * @var int
     */
    public $invoiceId;

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
    public $invoiceType;

    /**
     * @var bool
     */
    public $isRed;

    /**
     * @var bool
     */
    public $isReissue;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $linkInvoiceCode;

    /**
     * @var string
     */
    public $linkInvoiceNo;

    /**
     * @var logisticsInfo
     */
    public $logisticsInfo;

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
     * @var float
     */
    public $redAmount;

    /**
     * @var string
     */
    public $relatedId;

    /**
     * @var float
     */
    public $remainAmount;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var float
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'amount'                   => 'Amount',
        'appCode'                  => 'AppCode',
        'currencyCode'             => 'CurrencyCode',
        'customer'                 => 'Customer',
        'detailList'               => 'DetailList',
        'encryptProps'             => 'EncryptProps',
        'excludingTaxAmount'       => 'ExcludingTaxAmount',
        'excludingTaxRedAmount'    => 'ExcludingTaxRedAmount',
        'excludingTaxRemainAmount' => 'ExcludingTaxRemainAmount',
        'invoiceCode'              => 'InvoiceCode',
        'invoiceDate'              => 'InvoiceDate',
        'invoiceId'                => 'InvoiceId',
        'invoiceNo'                => 'InvoiceNo',
        'invoiceStatus'            => 'InvoiceStatus',
        'invoiceType'              => 'InvoiceType',
        'isRed'                    => 'IsRed',
        'isReissue'                => 'IsReissue',
        'language'                 => 'Language',
        'linkInvoiceCode'          => 'LinkInvoiceCode',
        'linkInvoiceNo'            => 'LinkInvoiceNo',
        'logisticsInfo'            => 'LogisticsInfo',
        'materialType'             => 'MaterialType',
        'memo'                     => 'Memo',
        'ouCode'                   => 'OuCode',
        'purchaserBankInfo'        => 'PurchaserBankInfo',
        'purchaserContactInfo'     => 'PurchaserContactInfo',
        'purchaserName'            => 'PurchaserName',
        'purchaserTaxNo'           => 'PurchaserTaxNo',
        'redAmount'                => 'RedAmount',
        'relatedId'                => 'RelatedId',
        'remainAmount'             => 'RemainAmount',
        'sign'                     => 'Sign',
        'siteId'                   => 'SiteId',
        'taxAmount'                => 'TaxAmount',
        'uuid'                     => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->detailList) {
            $res['DetailList'] = [];
            if (null !== $this->detailList && \is_array($this->detailList)) {
                $n = 0;
                foreach ($this->detailList as $item) {
                    $res['DetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->excludingTaxAmount) {
            $res['ExcludingTaxAmount'] = $this->excludingTaxAmount;
        }
        if (null !== $this->excludingTaxRedAmount) {
            $res['ExcludingTaxRedAmount'] = $this->excludingTaxRedAmount;
        }
        if (null !== $this->excludingTaxRemainAmount) {
            $res['ExcludingTaxRemainAmount'] = $this->excludingTaxRemainAmount;
        }
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDate) {
            $res['InvoiceDate'] = $this->invoiceDate;
        }
        if (null !== $this->invoiceId) {
            $res['InvoiceId'] = $this->invoiceId;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceStatus) {
            $res['InvoiceStatus'] = $this->invoiceStatus;
        }
        if (null !== $this->invoiceType) {
            $res['InvoiceType'] = $this->invoiceType;
        }
        if (null !== $this->isRed) {
            $res['IsRed'] = $this->isRed;
        }
        if (null !== $this->isReissue) {
            $res['IsReissue'] = $this->isReissue;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->linkInvoiceCode) {
            $res['LinkInvoiceCode'] = $this->linkInvoiceCode;
        }
        if (null !== $this->linkInvoiceNo) {
            $res['LinkInvoiceNo'] = $this->linkInvoiceNo;
        }
        if (null !== $this->logisticsInfo) {
            $res['LogisticsInfo'] = null !== $this->logisticsInfo ? $this->logisticsInfo->toMap() : null;
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
        if (null !== $this->redAmount) {
            $res['RedAmount'] = $this->redAmount;
        }
        if (null !== $this->relatedId) {
            $res['RelatedId'] = $this->relatedId;
        }
        if (null !== $this->remainAmount) {
            $res['RemainAmount'] = $this->remainAmount;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }
        if (isset($map['Customer'])) {
            $model->customer = customer::fromMap($map['Customer']);
        }
        if (isset($map['DetailList'])) {
            if (!empty($map['DetailList'])) {
                $model->detailList = [];
                $n                 = 0;
                foreach ($map['DetailList'] as $item) {
                    $model->detailList[$n++] = null !== $item ? detailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['ExcludingTaxAmount'])) {
            $model->excludingTaxAmount = $map['ExcludingTaxAmount'];
        }
        if (isset($map['ExcludingTaxRedAmount'])) {
            $model->excludingTaxRedAmount = $map['ExcludingTaxRedAmount'];
        }
        if (isset($map['ExcludingTaxRemainAmount'])) {
            $model->excludingTaxRemainAmount = $map['ExcludingTaxRemainAmount'];
        }
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceDate'])) {
            $model->invoiceDate = $map['InvoiceDate'];
        }
        if (isset($map['InvoiceId'])) {
            $model->invoiceId = $map['InvoiceId'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['InvoiceStatus'])) {
            $model->invoiceStatus = $map['InvoiceStatus'];
        }
        if (isset($map['InvoiceType'])) {
            $model->invoiceType = $map['InvoiceType'];
        }
        if (isset($map['IsRed'])) {
            $model->isRed = $map['IsRed'];
        }
        if (isset($map['IsReissue'])) {
            $model->isReissue = $map['IsReissue'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LinkInvoiceCode'])) {
            $model->linkInvoiceCode = $map['LinkInvoiceCode'];
        }
        if (isset($map['LinkInvoiceNo'])) {
            $model->linkInvoiceNo = $map['LinkInvoiceNo'];
        }
        if (isset($map['LogisticsInfo'])) {
            $model->logisticsInfo = logisticsInfo::fromMap($map['LogisticsInfo']);
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
        if (isset($map['RedAmount'])) {
            $model->redAmount = $map['RedAmount'];
        }
        if (isset($map['RelatedId'])) {
            $model->relatedId = $map['RelatedId'];
        }
        if (isset($map['RemainAmount'])) {
            $model->remainAmount = $map['RemainAmount'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
