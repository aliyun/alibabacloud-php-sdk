<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListApplicantsResponseBody\applicants;

use AlibabaCloud\Tea\Model;

class applicant extends Model
{
    /**
     * @example 66295
     *
     * @var int
     */
    public $applicantId;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicantRegion;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicantType;

    /**
     * @var string
     */
    public $applicantVersion;

    /**
     * @example 4
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $authorizationAuditStatus;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/attorney/n9neyrbkkp.png?Expires=1570698256&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=i9IdRS8N1swKF%2FJyMpkHglFgFuw%3D
     *
     * @var string
     */
    public $authorizationUrl;

    /**
     * @example 31231231
     *
     * @var string
     */
    public $cardNumber;

    /**
     * @example 23432qwe
     *
     * @var string
     */
    public $contactName;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var int
     */
    public $validDate;
    protected $_name = [
        'applicantId'              => 'ApplicantId',
        'applicantName'            => 'ApplicantName',
        'applicantRegion'          => 'ApplicantRegion',
        'applicantType'            => 'ApplicantType',
        'applicantVersion'         => 'ApplicantVersion',
        'auditStatus'              => 'AuditStatus',
        'authorizationAuditStatus' => 'AuthorizationAuditStatus',
        'authorizationUrl'         => 'AuthorizationUrl',
        'cardNumber'               => 'CardNumber',
        'contactName'              => 'ContactName',
        'principalName'            => 'PrincipalName',
        'systemVersion'            => 'SystemVersion',
        'validDate'                => 'ValidDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
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
        if (null !== $this->applicantVersion) {
            $res['ApplicantVersion'] = $this->applicantVersion;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->authorizationAuditStatus) {
            $res['AuthorizationAuditStatus'] = $this->authorizationAuditStatus;
        }
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
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
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
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
        if (isset($map['ApplicantVersion'])) {
            $model->applicantVersion = $map['ApplicantVersion'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuthorizationAuditStatus'])) {
            $model->authorizationAuditStatus = $map['AuthorizationAuditStatus'];
        }
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
