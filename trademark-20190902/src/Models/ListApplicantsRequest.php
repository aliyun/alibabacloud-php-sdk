<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ListApplicantsRequest extends Model
{
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
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @example 23456789
     *
     * @var string
     */
    public $cardNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @example V1
     *
     * @var string
     */
    public $systemVersion;
    protected $_name = [
        'applicantName'    => 'ApplicantName',
        'applicantRegion'  => 'ApplicantRegion',
        'applicantType'    => 'ApplicantType',
        'applicantVersion' => 'ApplicantVersion',
        'auditStatus'      => 'AuditStatus',
        'cardNumber'       => 'CardNumber',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'principalName'    => 'PrincipalName',
        'systemVersion'    => 'SystemVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }

        return $model;
    }
}
