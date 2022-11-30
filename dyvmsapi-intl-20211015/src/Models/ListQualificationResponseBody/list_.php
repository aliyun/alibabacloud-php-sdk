<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListQualificationResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditTs;

    /**
     * @var string
     */
    public $businessLicenseFileKey;

    /**
     * @var string
     */
    public $commitTs;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $legalId;

    /**
     * @var string
     */
    public $legalLicenseFileKey;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @var string
     */
    public $networkAccessFileKey;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $unifiedCode;

    /**
     * @var string
     */
    public $updateTs;
    protected $_name = [
        'address'                => 'Address',
        'auditRemark'            => 'AuditRemark',
        'auditTs'                => 'AuditTs',
        'businessLicenseFileKey' => 'BusinessLicenseFileKey',
        'commitTs'               => 'CommitTs',
        'companyName'            => 'CompanyName',
        'contactEmail'           => 'ContactEmail',
        'contactName'            => 'ContactName',
        'contactPhone'           => 'ContactPhone',
        'countryId'              => 'CountryId',
        'legalId'                => 'LegalId',
        'legalLicenseFileKey'    => 'LegalLicenseFileKey',
        'legalName'              => 'LegalName',
        'networkAccessFileKey'   => 'NetworkAccessFileKey',
        'qualificationId'        => 'QualificationId',
        'status'                 => 'Status',
        'unifiedCode'            => 'UnifiedCode',
        'updateTs'               => 'UpdateTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }
        if (null !== $this->auditTs) {
            $res['AuditTs'] = $this->auditTs;
        }
        if (null !== $this->businessLicenseFileKey) {
            $res['BusinessLicenseFileKey'] = $this->businessLicenseFileKey;
        }
        if (null !== $this->commitTs) {
            $res['CommitTs'] = $this->commitTs;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->legalId) {
            $res['LegalId'] = $this->legalId;
        }
        if (null !== $this->legalLicenseFileKey) {
            $res['LegalLicenseFileKey'] = $this->legalLicenseFileKey;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->networkAccessFileKey) {
            $res['NetworkAccessFileKey'] = $this->networkAccessFileKey;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unifiedCode) {
            $res['UnifiedCode'] = $this->unifiedCode;
        }
        if (null !== $this->updateTs) {
            $res['UpdateTs'] = $this->updateTs;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AuditRemark'])) {
            $model->auditRemark = $map['AuditRemark'];
        }
        if (isset($map['AuditTs'])) {
            $model->auditTs = $map['AuditTs'];
        }
        if (isset($map['BusinessLicenseFileKey'])) {
            $model->businessLicenseFileKey = $map['BusinessLicenseFileKey'];
        }
        if (isset($map['CommitTs'])) {
            $model->commitTs = $map['CommitTs'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['LegalId'])) {
            $model->legalId = $map['LegalId'];
        }
        if (isset($map['LegalLicenseFileKey'])) {
            $model->legalLicenseFileKey = $map['LegalLicenseFileKey'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['NetworkAccessFileKey'])) {
            $model->networkAccessFileKey = $map['NetworkAccessFileKey'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnifiedCode'])) {
            $model->unifiedCode = $map['UnifiedCode'];
        }
        if (isset($map['UpdateTs'])) {
            $model->updateTs = $map['UpdateTs'];
        }

        return $model;
    }
}
