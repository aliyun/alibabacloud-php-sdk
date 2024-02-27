<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetMonthlyBillResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The link to download CSV file, please use HTTP Protocol.
     *
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $billLinkCSV;

    /**
     * @description The link to download XLSX file, please use HTTP Protocol.
     *
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $billLinkXLSX;

    /**
     * @description Same as inserted parameter BillOwner.
     *
     * @example 1
     *
     * @var string
     */
    public $billOwner;

    /**
     * @description Same as inserted parameter BillType.
     *
     * @example MonthlyInvoice
     *
     * @var string
     */
    public $billType;

    /**
     * @description The URL to download invoice.
     *
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $invoiceLink;

    /**
     * @description It states the existence of refund invoice. </br>
     * Candidate Values: True/False
     * @example True
     *
     * @var bool
     */
    public $refundInvoiceFlag;

    /**
     * @description The URL to download refund invoice.
     *
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $refundInvoiceLink;

    /**
     * @description Spending Time, refer to the exact time of costuming.
     *
     * @example 20221201
     *
     * @var string
     */
    public $spendingTime;
    protected $_name = [
        'billLinkCSV'       => 'BillLinkCSV',
        'billLinkXLSX'      => 'BillLinkXLSX',
        'billOwner'         => 'BillOwner',
        'billType'          => 'BillType',
        'invoiceLink'       => 'InvoiceLink',
        'refundInvoiceFlag' => 'RefundInvoiceFlag',
        'refundInvoiceLink' => 'RefundInvoiceLink',
        'spendingTime'      => 'SpendingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billLinkCSV) {
            $res['BillLinkCSV'] = $this->billLinkCSV;
        }
        if (null !== $this->billLinkXLSX) {
            $res['BillLinkXLSX'] = $this->billLinkXLSX;
        }
        if (null !== $this->billOwner) {
            $res['BillOwner'] = $this->billOwner;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->invoiceLink) {
            $res['InvoiceLink'] = $this->invoiceLink;
        }
        if (null !== $this->refundInvoiceFlag) {
            $res['RefundInvoiceFlag'] = $this->refundInvoiceFlag;
        }
        if (null !== $this->refundInvoiceLink) {
            $res['RefundInvoiceLink'] = $this->refundInvoiceLink;
        }
        if (null !== $this->spendingTime) {
            $res['SpendingTime'] = $this->spendingTime;
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
        if (isset($map['BillLinkCSV'])) {
            $model->billLinkCSV = $map['BillLinkCSV'];
        }
        if (isset($map['BillLinkXLSX'])) {
            $model->billLinkXLSX = $map['BillLinkXLSX'];
        }
        if (isset($map['BillOwner'])) {
            $model->billOwner = $map['BillOwner'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['InvoiceLink'])) {
            $model->invoiceLink = $map['InvoiceLink'];
        }
        if (isset($map['RefundInvoiceFlag'])) {
            $model->refundInvoiceFlag = $map['RefundInvoiceFlag'];
        }
        if (isset($map['RefundInvoiceLink'])) {
            $model->refundInvoiceLink = $map['RefundInvoiceLink'];
        }
        if (isset($map['SpendingTime'])) {
            $model->spendingTime = $map['SpendingTime'];
        }

        return $model;
    }
}
