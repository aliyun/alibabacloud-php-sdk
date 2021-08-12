<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data\customerInvoiceList;

use AlibabaCloud\Tea\Model;

class customerInvoice extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $adjustType;

    /**
     * @var string
     */
    public $bank;

    /**
     * @var int
     */
    public $startCycle;

    /**
     * @var string
     */
    public $titleChangeInstructions;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $operatingLicenseAddress;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $operatingLicensePhone;

    /**
     * @var int
     */
    public $endCycle;

    /**
     * @var string
     */
    public $defaultRemark;

    /**
     * @var string
     */
    public $taxationLicense;

    /**
     * @var string
     */
    public $registerNo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $taxpayerType;

    /**
     * @var int
     */
    public $customerType;

    /**
     * @var int
     */
    public $issueType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $bankNo;
    protected $_name = [
        'type'                    => 'Type',
        'status'                  => 'Status',
        'adjustType'              => 'AdjustType',
        'bank'                    => 'Bank',
        'startCycle'              => 'StartCycle',
        'titleChangeInstructions' => 'TitleChangeInstructions',
        'userId'                  => 'UserId',
        'operatingLicenseAddress' => 'OperatingLicenseAddress',
        'invoiceTitle'            => 'InvoiceTitle',
        'userNick'                => 'UserNick',
        'operatingLicensePhone'   => 'OperatingLicensePhone',
        'endCycle'                => 'EndCycle',
        'defaultRemark'           => 'DefaultRemark',
        'taxationLicense'         => 'TaxationLicense',
        'registerNo'              => 'RegisterNo',
        'gmtCreate'               => 'GmtCreate',
        'taxpayerType'            => 'TaxpayerType',
        'customerType'            => 'CustomerType',
        'issueType'               => 'IssueType',
        'id'                      => 'Id',
        'bankNo'                  => 'BankNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->adjustType) {
            $res['AdjustType'] = $this->adjustType;
        }
        if (null !== $this->bank) {
            $res['Bank'] = $this->bank;
        }
        if (null !== $this->startCycle) {
            $res['StartCycle'] = $this->startCycle;
        }
        if (null !== $this->titleChangeInstructions) {
            $res['TitleChangeInstructions'] = $this->titleChangeInstructions;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->operatingLicenseAddress) {
            $res['OperatingLicenseAddress'] = $this->operatingLicenseAddress;
        }
        if (null !== $this->invoiceTitle) {
            $res['InvoiceTitle'] = $this->invoiceTitle;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->operatingLicensePhone) {
            $res['OperatingLicensePhone'] = $this->operatingLicensePhone;
        }
        if (null !== $this->endCycle) {
            $res['EndCycle'] = $this->endCycle;
        }
        if (null !== $this->defaultRemark) {
            $res['DefaultRemark'] = $this->defaultRemark;
        }
        if (null !== $this->taxationLicense) {
            $res['TaxationLicense'] = $this->taxationLicense;
        }
        if (null !== $this->registerNo) {
            $res['RegisterNo'] = $this->registerNo;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->taxpayerType) {
            $res['TaxpayerType'] = $this->taxpayerType;
        }
        if (null !== $this->customerType) {
            $res['CustomerType'] = $this->customerType;
        }
        if (null !== $this->issueType) {
            $res['IssueType'] = $this->issueType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->bankNo) {
            $res['BankNo'] = $this->bankNo;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AdjustType'])) {
            $model->adjustType = $map['AdjustType'];
        }
        if (isset($map['Bank'])) {
            $model->bank = $map['Bank'];
        }
        if (isset($map['StartCycle'])) {
            $model->startCycle = $map['StartCycle'];
        }
        if (isset($map['TitleChangeInstructions'])) {
            $model->titleChangeInstructions = $map['TitleChangeInstructions'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OperatingLicenseAddress'])) {
            $model->operatingLicenseAddress = $map['OperatingLicenseAddress'];
        }
        if (isset($map['InvoiceTitle'])) {
            $model->invoiceTitle = $map['InvoiceTitle'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['OperatingLicensePhone'])) {
            $model->operatingLicensePhone = $map['OperatingLicensePhone'];
        }
        if (isset($map['EndCycle'])) {
            $model->endCycle = $map['EndCycle'];
        }
        if (isset($map['DefaultRemark'])) {
            $model->defaultRemark = $map['DefaultRemark'];
        }
        if (isset($map['TaxationLicense'])) {
            $model->taxationLicense = $map['TaxationLicense'];
        }
        if (isset($map['RegisterNo'])) {
            $model->registerNo = $map['RegisterNo'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TaxpayerType'])) {
            $model->taxpayerType = $map['TaxpayerType'];
        }
        if (isset($map['CustomerType'])) {
            $model->customerType = $map['CustomerType'];
        }
        if (isset($map['IssueType'])) {
            $model->issueType = $map['IssueType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['BankNo'])) {
            $model->bankNo = $map['BankNo'];
        }

        return $model;
    }
}
