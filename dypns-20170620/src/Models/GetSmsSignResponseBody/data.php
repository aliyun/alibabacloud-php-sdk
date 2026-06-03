<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsSignResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appUrl;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $businessLicenseCert;

    /**
     * @var string
     */
    public $businessLicenseCertId;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var int
     */
    public $createDate;

    /**
     * @var bool
     */
    public $defaultFlag;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $organizationCodeCert;

    /**
     * @var string
     */
    public $organizationCodeCertId;

    /**
     * @var string
     */
    public $smsSignName;

    /**
     * @var string
     */
    public $smsSignRemark;

    /**
     * @var string
     */
    public $smsSignSource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taxRegistrationCert;

    /**
     * @var string
     */
    public $taxRegistrationCertId;

    /**
     * @var bool
     */
    public $testFlag;
    protected $_name = [
        'appUrl' => 'AppUrl',
        'auditResult' => 'AuditResult',
        'businessLicenseCert' => 'BusinessLicenseCert',
        'businessLicenseCertId' => 'BusinessLicenseCertId',
        'certType' => 'CertType',
        'createDate' => 'CreateDate',
        'defaultFlag' => 'DefaultFlag',
        'orderId' => 'OrderId',
        'organizationCodeCert' => 'OrganizationCodeCert',
        'organizationCodeCertId' => 'OrganizationCodeCertId',
        'smsSignName' => 'SmsSignName',
        'smsSignRemark' => 'SmsSignRemark',
        'smsSignSource' => 'SmsSignSource',
        'status' => 'Status',
        'taxRegistrationCert' => 'TaxRegistrationCert',
        'taxRegistrationCertId' => 'TaxRegistrationCertId',
        'testFlag' => 'TestFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }

        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }

        if (null !== $this->businessLicenseCert) {
            $res['BusinessLicenseCert'] = $this->businessLicenseCert;
        }

        if (null !== $this->businessLicenseCertId) {
            $res['BusinessLicenseCertId'] = $this->businessLicenseCertId;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->defaultFlag) {
            $res['DefaultFlag'] = $this->defaultFlag;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCodeCert) {
            $res['OrganizationCodeCert'] = $this->organizationCodeCert;
        }

        if (null !== $this->organizationCodeCertId) {
            $res['OrganizationCodeCertId'] = $this->organizationCodeCertId;
        }

        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }

        if (null !== $this->smsSignRemark) {
            $res['SmsSignRemark'] = $this->smsSignRemark;
        }

        if (null !== $this->smsSignSource) {
            $res['SmsSignSource'] = $this->smsSignSource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taxRegistrationCert) {
            $res['TaxRegistrationCert'] = $this->taxRegistrationCert;
        }

        if (null !== $this->taxRegistrationCertId) {
            $res['TaxRegistrationCertId'] = $this->taxRegistrationCertId;
        }

        if (null !== $this->testFlag) {
            $res['TestFlag'] = $this->testFlag;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }

        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }

        if (isset($map['BusinessLicenseCert'])) {
            $model->businessLicenseCert = $map['BusinessLicenseCert'];
        }

        if (isset($map['BusinessLicenseCertId'])) {
            $model->businessLicenseCertId = $map['BusinessLicenseCertId'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DefaultFlag'])) {
            $model->defaultFlag = $map['DefaultFlag'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCodeCert'])) {
            $model->organizationCodeCert = $map['OrganizationCodeCert'];
        }

        if (isset($map['OrganizationCodeCertId'])) {
            $model->organizationCodeCertId = $map['OrganizationCodeCertId'];
        }

        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }

        if (isset($map['SmsSignRemark'])) {
            $model->smsSignRemark = $map['SmsSignRemark'];
        }

        if (isset($map['SmsSignSource'])) {
            $model->smsSignSource = $map['SmsSignSource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaxRegistrationCert'])) {
            $model->taxRegistrationCert = $map['TaxRegistrationCert'];
        }

        if (isset($map['TaxRegistrationCertId'])) {
            $model->taxRegistrationCertId = $map['TaxRegistrationCertId'];
        }

        if (isset($map['TestFlag'])) {
            $model->testFlag = $map['TestFlag'];
        }

        return $model;
    }
}
