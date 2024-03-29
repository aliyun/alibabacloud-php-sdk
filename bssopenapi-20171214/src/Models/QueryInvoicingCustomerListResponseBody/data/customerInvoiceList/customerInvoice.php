<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data\customerInvoiceList;

use AlibabaCloud\Tea\Model;

class customerInvoice extends Model
{
    /**
     * @description The type of invoice that was changed to.
     *
     * @example 1
     *
     * @var int
     */
    public $adjustType;

    /**
     * @description The bank that issues the invoice.
     *
     * @example Test Bank
     *
     * @var string
     */
    public $bank;

    /**
     * @description The bank account number.
     *
     * @example 389576348573296349853476
     *
     * @var string
     */
    public $bankNo;

    /**
     * @description The authentication type of Alipay. Valid values:
     *
     *   1: individual
     *   2: company
     *
     * @example 1
     *
     * @var int
     */
    public $customerType;

    /**
     * @description The default note that is attached when the title is specified.
     *
     * @example PO Code: 12984554
     *
     * @var string
     */
    public $defaultRemark;

    /**
     * @description The time when the payment ended.
     *
     * @example 202003
     *
     * @var int
     */
    public $endCycle;

    /**
     * @description The time when the invoice was created. The time was in the yyyy-mm-dd hh:mm:ss format.
     *
     * @example 2018-09-07 15:26:20
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The ID of the invoice.
     *
     * @example 239875502738
     *
     * @var int
     */
    public $id;

    /**
     * @description The company name in the invoice title.
     *
     * @example Test Company
     *
     * @var string
     */
    public $invoiceTitle;

    /**
     * @description The type of issue.
     *
     * @example 1
     *
     * @var int
     */
    public $issueType;

    /**
     * @description The address of the business license.
     *
     * @example XXX, XXX district, XXX city, XXX province
     *
     * @var string
     */
    public $operatingLicenseAddress;

    /**
     * @description The phone number of the business license.
     *
     * @example 138xxxxxxxx
     *
     * @var string
     */
    public $operatingLicensePhone;

    /**
     * @description The tax registration number.
     *
     * @example 21343245342534
     *
     * @var string
     */
    public $registerNo;

    /**
     * @description The time when the payment started.
     *
     * @example 202002
     *
     * @var int
     */
    public $startCycle;

    /**
     * @description The status of the invoice title.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The path and file name of the scanned copy of the tax registration certificate.
     *
     * @example taxationLicense.jpg
     *
     * @var string
     */
    public $taxationLicense;

    /**
     * @description The type of the taxpayer. Valid values:
     *
     *   1: general taxpayer
     *   2: special taxpayer
     *
     * @example 1
     *
     * @var int
     */
    public $taxpayerType;

    /**
     * @description The instruction document of the invoice title change.
     *
     * @example instruction.doc
     *
     * @var string
     */
    public $titleChangeInstructions;

    /**
     * @description The type of the invoice. Valid values:
     *
     *   0: plain value-added tax (VAT) invoice
     *   1: special VAT invoice
     *
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description The ID of the user.
     *
     * @example 34565465675
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example testNick
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'adjustType'              => 'AdjustType',
        'bank'                    => 'Bank',
        'bankNo'                  => 'BankNo',
        'customerType'            => 'CustomerType',
        'defaultRemark'           => 'DefaultRemark',
        'endCycle'                => 'EndCycle',
        'gmtCreate'               => 'GmtCreate',
        'id'                      => 'Id',
        'invoiceTitle'            => 'InvoiceTitle',
        'issueType'               => 'IssueType',
        'operatingLicenseAddress' => 'OperatingLicenseAddress',
        'operatingLicensePhone'   => 'OperatingLicensePhone',
        'registerNo'              => 'RegisterNo',
        'startCycle'              => 'StartCycle',
        'status'                  => 'Status',
        'taxationLicense'         => 'TaxationLicense',
        'taxpayerType'            => 'TaxpayerType',
        'titleChangeInstructions' => 'TitleChangeInstructions',
        'type'                    => 'Type',
        'userId'                  => 'UserId',
        'userNick'                => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustType) {
            $res['AdjustType'] = $this->adjustType;
        }
        if (null !== $this->bank) {
            $res['Bank'] = $this->bank;
        }
        if (null !== $this->bankNo) {
            $res['BankNo'] = $this->bankNo;
        }
        if (null !== $this->customerType) {
            $res['CustomerType'] = $this->customerType;
        }
        if (null !== $this->defaultRemark) {
            $res['DefaultRemark'] = $this->defaultRemark;
        }
        if (null !== $this->endCycle) {
            $res['EndCycle'] = $this->endCycle;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->invoiceTitle) {
            $res['InvoiceTitle'] = $this->invoiceTitle;
        }
        if (null !== $this->issueType) {
            $res['IssueType'] = $this->issueType;
        }
        if (null !== $this->operatingLicenseAddress) {
            $res['OperatingLicenseAddress'] = $this->operatingLicenseAddress;
        }
        if (null !== $this->operatingLicensePhone) {
            $res['OperatingLicensePhone'] = $this->operatingLicensePhone;
        }
        if (null !== $this->registerNo) {
            $res['RegisterNo'] = $this->registerNo;
        }
        if (null !== $this->startCycle) {
            $res['StartCycle'] = $this->startCycle;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taxationLicense) {
            $res['TaxationLicense'] = $this->taxationLicense;
        }
        if (null !== $this->taxpayerType) {
            $res['TaxpayerType'] = $this->taxpayerType;
        }
        if (null !== $this->titleChangeInstructions) {
            $res['TitleChangeInstructions'] = $this->titleChangeInstructions;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerInvoice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustType'])) {
            $model->adjustType = $map['AdjustType'];
        }
        if (isset($map['Bank'])) {
            $model->bank = $map['Bank'];
        }
        if (isset($map['BankNo'])) {
            $model->bankNo = $map['BankNo'];
        }
        if (isset($map['CustomerType'])) {
            $model->customerType = $map['CustomerType'];
        }
        if (isset($map['DefaultRemark'])) {
            $model->defaultRemark = $map['DefaultRemark'];
        }
        if (isset($map['EndCycle'])) {
            $model->endCycle = $map['EndCycle'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InvoiceTitle'])) {
            $model->invoiceTitle = $map['InvoiceTitle'];
        }
        if (isset($map['IssueType'])) {
            $model->issueType = $map['IssueType'];
        }
        if (isset($map['OperatingLicenseAddress'])) {
            $model->operatingLicenseAddress = $map['OperatingLicenseAddress'];
        }
        if (isset($map['OperatingLicensePhone'])) {
            $model->operatingLicensePhone = $map['OperatingLicensePhone'];
        }
        if (isset($map['RegisterNo'])) {
            $model->registerNo = $map['RegisterNo'];
        }
        if (isset($map['StartCycle'])) {
            $model->startCycle = $map['StartCycle'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaxationLicense'])) {
            $model->taxationLicense = $map['TaxationLicense'];
        }
        if (isset($map['TaxpayerType'])) {
            $model->taxpayerType = $map['TaxpayerType'];
        }
        if (isset($map['TitleChangeInstructions'])) {
            $model->titleChangeInstructions = $map['TitleChangeInstructions'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
