<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponseBody\data\customerInvoiceList;

use AlibabaCloud\Tea\Model;

class customerInvoice extends Model
{
    /**
     * @var int
     */
    public $adjustType;

    /**
     * @var string
     */
    public $bank;

    /**
     * @var string
     */
    public $bankNo;

    /**
     * @var int
     */
    public $customerType;

    /**
     * @var string
     */
    public $defaultRemark;

    /**
     * @var int
     */
    public $endCycle;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var int
     */
    public $issueType;

    /**
     * @var string
     */
    public $operatingLicenseAddress;

    /**
     * @var string
     */
    public $operatingLicensePhone;

    /**
     * @var string
     */
    public $registerNo;

    /**
     * @var int
     */
    public $startCycle;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taxationLicense;

    /**
     * @var int
     */
    public $taxpayerType;

    /**
     * @var string
     */
    public $titleChangeInstructions;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userId;

    /**
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
