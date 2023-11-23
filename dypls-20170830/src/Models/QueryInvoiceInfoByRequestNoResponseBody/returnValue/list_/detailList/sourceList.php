<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\detailList;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\detailList\sourceList\customer;
use AlibabaCloud\Tea\Model;

class sourceList extends Model
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
     * @var float
     */
    public $billAmount;

    /**
     * @var string
     */
    public $billDomain;

    /**
     * @var string
     */
    public $billNo;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var int
     */
    public $blueSourceId;

    /**
     * @var bool
     */
    public $canMerge;

    /**
     * @var string
     */
    public $cargoName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var customer
     */
    public $customer;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var float
     */
    public $discountTaxAmount;

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
    public $excludingTaxDiscountAmount;

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
    public $gmtBill;

    /**
     * @var string
     */
    public $gmtBillEnd;

    /**
     * @var string
     */
    public $gmtBillStart;

    /**
     * @var string
     */
    public $gmtBuild;

    /**
     * @var string
     */
    public $isApply;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $majorBillNo;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $ouCode;

    /**
     * @var string
     */
    public $parentCategory;

    /**
     * @var string
     */
    public $productDomain;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var float
     */
    public $quantity;

    /**
     * @var string
     */
    public $quantityUnit;

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
    public $revenueType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var float
     */
    public $taxAmount;

    /**
     * @var float
     */
    public $taxRate;

    /**
     * @var float
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'amount'                     => 'Amount',
        'appCode'                    => 'AppCode',
        'billAmount'                 => 'BillAmount',
        'billDomain'                 => 'BillDomain',
        'billNo'                     => 'BillNo',
        'billType'                   => 'BillType',
        'blueSourceId'               => 'BlueSourceId',
        'canMerge'                   => 'CanMerge',
        'cargoName'                  => 'CargoName',
        'category'                   => 'Category',
        'companyName'                => 'CompanyName',
        'currencyCode'               => 'CurrencyCode',
        'customer'                   => 'Customer',
        'discountAmount'             => 'DiscountAmount',
        'discountTaxAmount'          => 'DiscountTaxAmount',
        'encryptProps'               => 'EncryptProps',
        'excludingTaxAmount'         => 'ExcludingTaxAmount',
        'excludingTaxDiscountAmount' => 'ExcludingTaxDiscountAmount',
        'excludingTaxRedAmount'      => 'ExcludingTaxRedAmount',
        'excludingTaxRemainAmount'   => 'ExcludingTaxRemainAmount',
        'gmtBill'                    => 'GmtBill',
        'gmtBillEnd'                 => 'GmtBillEnd',
        'gmtBillStart'               => 'GmtBillStart',
        'gmtBuild'                   => 'GmtBuild',
        'isApply'                    => 'IsApply',
        'language'                   => 'Language',
        'majorBillNo'                => 'MajorBillNo',
        'model'                      => 'Model',
        'ouCode'                     => 'OuCode',
        'parentCategory'             => 'ParentCategory',
        'productDomain'              => 'ProductDomain',
        'productId'                  => 'ProductId',
        'productName'                => 'ProductName',
        'quantity'                   => 'Quantity',
        'quantityUnit'               => 'QuantityUnit',
        'redAmount'                  => 'RedAmount',
        'relatedId'                  => 'RelatedId',
        'remainAmount'               => 'RemainAmount',
        'revenueType'                => 'RevenueType',
        'serviceName'                => 'ServiceName',
        'sign'                       => 'Sign',
        'siteId'                     => 'SiteId',
        'sourceId'                   => 'SourceId',
        'taxAmount'                  => 'TaxAmount',
        'taxRate'                    => 'TaxRate',
        'unitPrice'                  => 'UnitPrice',
        'uuid'                       => 'Uuid',
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
        if (null !== $this->billAmount) {
            $res['BillAmount'] = $this->billAmount;
        }
        if (null !== $this->billDomain) {
            $res['BillDomain'] = $this->billDomain;
        }
        if (null !== $this->billNo) {
            $res['BillNo'] = $this->billNo;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->blueSourceId) {
            $res['BlueSourceId'] = $this->blueSourceId;
        }
        if (null !== $this->canMerge) {
            $res['CanMerge'] = $this->canMerge;
        }
        if (null !== $this->cargoName) {
            $res['CargoName'] = $this->cargoName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->discountTaxAmount) {
            $res['DiscountTaxAmount'] = $this->discountTaxAmount;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->excludingTaxAmount) {
            $res['ExcludingTaxAmount'] = $this->excludingTaxAmount;
        }
        if (null !== $this->excludingTaxDiscountAmount) {
            $res['ExcludingTaxDiscountAmount'] = $this->excludingTaxDiscountAmount;
        }
        if (null !== $this->excludingTaxRedAmount) {
            $res['ExcludingTaxRedAmount'] = $this->excludingTaxRedAmount;
        }
        if (null !== $this->excludingTaxRemainAmount) {
            $res['ExcludingTaxRemainAmount'] = $this->excludingTaxRemainAmount;
        }
        if (null !== $this->gmtBill) {
            $res['GmtBill'] = $this->gmtBill;
        }
        if (null !== $this->gmtBillEnd) {
            $res['GmtBillEnd'] = $this->gmtBillEnd;
        }
        if (null !== $this->gmtBillStart) {
            $res['GmtBillStart'] = $this->gmtBillStart;
        }
        if (null !== $this->gmtBuild) {
            $res['GmtBuild'] = $this->gmtBuild;
        }
        if (null !== $this->isApply) {
            $res['IsApply'] = $this->isApply;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->majorBillNo) {
            $res['MajorBillNo'] = $this->majorBillNo;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->ouCode) {
            $res['OuCode'] = $this->ouCode;
        }
        if (null !== $this->parentCategory) {
            $res['ParentCategory'] = $this->parentCategory;
        }
        if (null !== $this->productDomain) {
            $res['ProductDomain'] = $this->productDomain;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->quantityUnit) {
            $res['QuantityUnit'] = $this->quantityUnit;
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
        if (null !== $this->revenueType) {
            $res['RevenueType'] = $this->revenueType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->taxAmount) {
            $res['TaxAmount'] = $this->taxAmount;
        }
        if (null !== $this->taxRate) {
            $res['TaxRate'] = $this->taxRate;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceList
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
        if (isset($map['BillAmount'])) {
            $model->billAmount = $map['BillAmount'];
        }
        if (isset($map['BillDomain'])) {
            $model->billDomain = $map['BillDomain'];
        }
        if (isset($map['BillNo'])) {
            $model->billNo = $map['BillNo'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['BlueSourceId'])) {
            $model->blueSourceId = $map['BlueSourceId'];
        }
        if (isset($map['CanMerge'])) {
            $model->canMerge = $map['CanMerge'];
        }
        if (isset($map['CargoName'])) {
            $model->cargoName = $map['CargoName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }
        if (isset($map['Customer'])) {
            $model->customer = customer::fromMap($map['Customer']);
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['DiscountTaxAmount'])) {
            $model->discountTaxAmount = $map['DiscountTaxAmount'];
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['ExcludingTaxAmount'])) {
            $model->excludingTaxAmount = $map['ExcludingTaxAmount'];
        }
        if (isset($map['ExcludingTaxDiscountAmount'])) {
            $model->excludingTaxDiscountAmount = $map['ExcludingTaxDiscountAmount'];
        }
        if (isset($map['ExcludingTaxRedAmount'])) {
            $model->excludingTaxRedAmount = $map['ExcludingTaxRedAmount'];
        }
        if (isset($map['ExcludingTaxRemainAmount'])) {
            $model->excludingTaxRemainAmount = $map['ExcludingTaxRemainAmount'];
        }
        if (isset($map['GmtBill'])) {
            $model->gmtBill = $map['GmtBill'];
        }
        if (isset($map['GmtBillEnd'])) {
            $model->gmtBillEnd = $map['GmtBillEnd'];
        }
        if (isset($map['GmtBillStart'])) {
            $model->gmtBillStart = $map['GmtBillStart'];
        }
        if (isset($map['GmtBuild'])) {
            $model->gmtBuild = $map['GmtBuild'];
        }
        if (isset($map['IsApply'])) {
            $model->isApply = $map['IsApply'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MajorBillNo'])) {
            $model->majorBillNo = $map['MajorBillNo'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OuCode'])) {
            $model->ouCode = $map['OuCode'];
        }
        if (isset($map['ParentCategory'])) {
            $model->parentCategory = $map['ParentCategory'];
        }
        if (isset($map['ProductDomain'])) {
            $model->productDomain = $map['ProductDomain'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['QuantityUnit'])) {
            $model->quantityUnit = $map['QuantityUnit'];
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
        if (isset($map['RevenueType'])) {
            $model->revenueType = $map['RevenueType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['TaxAmount'])) {
            $model->taxAmount = $map['TaxAmount'];
        }
        if (isset($map['TaxRate'])) {
            $model->taxRate = $map['TaxRate'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
