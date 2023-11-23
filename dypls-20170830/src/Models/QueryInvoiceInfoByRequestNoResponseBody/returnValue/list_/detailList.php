<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_\detailList\sourceList;
use AlibabaCloud\Tea\Model;

class detailList extends Model
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
    public $cargoName;

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
     * @var float
     */
    public $excludingTaxUnitPrice;

    /**
     * @var int
     */
    public $invoiceDetailId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $model;

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
    public $sign;

    /**
     * @var sourceList[]
     */
    public $sourceList;

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
        'cargoName'                  => 'CargoName',
        'discountAmount'             => 'DiscountAmount',
        'discountTaxAmount'          => 'DiscountTaxAmount',
        'encryptProps'               => 'EncryptProps',
        'excludingTaxAmount'         => 'ExcludingTaxAmount',
        'excludingTaxDiscountAmount' => 'ExcludingTaxDiscountAmount',
        'excludingTaxRedAmount'      => 'ExcludingTaxRedAmount',
        'excludingTaxRemainAmount'   => 'ExcludingTaxRemainAmount',
        'excludingTaxUnitPrice'      => 'ExcludingTaxUnitPrice',
        'invoiceDetailId'            => 'InvoiceDetailId',
        'language'                   => 'Language',
        'model'                      => 'Model',
        'quantity'                   => 'Quantity',
        'quantityUnit'               => 'QuantityUnit',
        'redAmount'                  => 'RedAmount',
        'relatedId'                  => 'RelatedId',
        'remainAmount'               => 'RemainAmount',
        'sign'                       => 'Sign',
        'sourceList'                 => 'SourceList',
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
        if (null !== $this->cargoName) {
            $res['CargoName'] = $this->cargoName;
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
        if (null !== $this->excludingTaxUnitPrice) {
            $res['ExcludingTaxUnitPrice'] = $this->excludingTaxUnitPrice;
        }
        if (null !== $this->invoiceDetailId) {
            $res['InvoiceDetailId'] = $this->invoiceDetailId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
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
     * @return detailList
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
        if (isset($map['CargoName'])) {
            $model->cargoName = $map['CargoName'];
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
        if (isset($map['ExcludingTaxUnitPrice'])) {
            $model->excludingTaxUnitPrice = $map['ExcludingTaxUnitPrice'];
        }
        if (isset($map['InvoiceDetailId'])) {
            $model->invoiceDetailId = $map['InvoiceDetailId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
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
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
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
