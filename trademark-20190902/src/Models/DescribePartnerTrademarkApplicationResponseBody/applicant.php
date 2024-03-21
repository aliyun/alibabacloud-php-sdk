<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class applicant extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @var int
     */
    public $applicantRegion;

    /**
     * @var int
     */
    public $applicantType;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $authorizationUrl;

    /**
     * @var string
     */
    public $businessLicenceUrl;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $contactAddress;

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
    public $contactNumber;

    /**
     * @var string
     */
    public $contactZipcode;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $EAddress;

    /**
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $idCardUrl;

    /**
     * @var string
     */
    public $legalNoticeUrl;

    /**
     * @var string
     */
    public $passportUrl;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'address'            => 'Address',
        'applicantName'      => 'ApplicantName',
        'applicantRegion'    => 'ApplicantRegion',
        'applicantType'      => 'ApplicantType',
        'auditStatus'        => 'AuditStatus',
        'authorizationUrl'   => 'AuthorizationUrl',
        'businessLicenceUrl' => 'BusinessLicenceUrl',
        'cardNumber'         => 'CardNumber',
        'contactAddress'     => 'ContactAddress',
        'contactEmail'       => 'ContactEmail',
        'contactName'        => 'ContactName',
        'contactNumber'      => 'ContactNumber',
        'contactZipcode'     => 'ContactZipcode',
        'country'            => 'Country',
        'EAddress'           => 'EAddress',
        'EName'              => 'EName',
        'idCardUrl'          => 'IdCardUrl',
        'legalNoticeUrl'     => 'LegalNoticeUrl',
        'passportUrl'        => 'PassportUrl',
        'principalName'      => 'PrincipalName',
        'province'           => 'Province',
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
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicantRegion) {
            $res['ApplicantRegion'] = $this->applicantRegion;
        }
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
        }
        if (null !== $this->businessLicenceUrl) {
            $res['BusinessLicenceUrl'] = $this->businessLicenceUrl;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactZipcode) {
            $res['ContactZipcode'] = $this->contactZipcode;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }
        if (null !== $this->idCardUrl) {
            $res['IdCardUrl'] = $this->idCardUrl;
        }
        if (null !== $this->legalNoticeUrl) {
            $res['LegalNoticeUrl'] = $this->legalNoticeUrl;
        }
        if (null !== $this->passportUrl) {
            $res['PassportUrl'] = $this->passportUrl;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicantRegion'])) {
            $model->applicantRegion = $map['ApplicantRegion'];
        }
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }
        if (isset($map['BusinessLicenceUrl'])) {
            $model->businessLicenceUrl = $map['BusinessLicenceUrl'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactZipcode'])) {
            $model->contactZipcode = $map['ContactZipcode'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }
        if (isset($map['IdCardUrl'])) {
            $model->idCardUrl = $map['IdCardUrl'];
        }
        if (isset($map['LegalNoticeUrl'])) {
            $model->legalNoticeUrl = $map['LegalNoticeUrl'];
        }
        if (isset($map['PassportUrl'])) {
            $model->passportUrl = $map['PassportUrl'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
