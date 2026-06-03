<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\GetEnterpriseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auditDesc;

    /**
     * @var string
     */
    public $auditTime;

    /**
     * @var string
     */
    public $businessLicenseAddress;

    /**
     * @var string
     */
    public $businessLicensePicture;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $legalPersonCertNumber;

    /**
     * @var string
     */
    public $legalPersonCertPicture;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $managerCertNumber;

    /**
     * @var string
     */
    public $managerCertPicture;

    /**
     * @var string
     */
    public $managerContactNumber;

    /**
     * @var string
     */
    public $managerName;

    /**
     * @var string
     */
    public $numberApplicationLetterPicture;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $undertakingPicture;
    protected $_name = [
        'auditDesc' => 'AuditDesc',
        'auditTime' => 'AuditTime',
        'businessLicenseAddress' => 'BusinessLicenseAddress',
        'businessLicensePicture' => 'BusinessLicensePicture',
        'enterpriseId' => 'EnterpriseId',
        'enterpriseName' => 'EnterpriseName',
        'legalPersonCertNumber' => 'LegalPersonCertNumber',
        'legalPersonCertPicture' => 'LegalPersonCertPicture',
        'legalPersonName' => 'LegalPersonName',
        'managerCertNumber' => 'ManagerCertNumber',
        'managerCertPicture' => 'ManagerCertPicture',
        'managerContactNumber' => 'ManagerContactNumber',
        'managerName' => 'ManagerName',
        'numberApplicationLetterPicture' => 'NumberApplicationLetterPicture',
        'orderId' => 'OrderId',
        'organizationCode' => 'OrganizationCode',
        'remark' => 'Remark',
        'status' => 'Status',
        'undertakingPicture' => 'UndertakingPicture',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditDesc) {
            $res['AuditDesc'] = $this->auditDesc;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->businessLicenseAddress) {
            $res['BusinessLicenseAddress'] = $this->businessLicenseAddress;
        }

        if (null !== $this->businessLicensePicture) {
            $res['BusinessLicensePicture'] = $this->businessLicensePicture;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->enterpriseName) {
            $res['EnterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->legalPersonCertNumber) {
            $res['LegalPersonCertNumber'] = $this->legalPersonCertNumber;
        }

        if (null !== $this->legalPersonCertPicture) {
            $res['LegalPersonCertPicture'] = $this->legalPersonCertPicture;
        }

        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }

        if (null !== $this->managerCertNumber) {
            $res['ManagerCertNumber'] = $this->managerCertNumber;
        }

        if (null !== $this->managerCertPicture) {
            $res['ManagerCertPicture'] = $this->managerCertPicture;
        }

        if (null !== $this->managerContactNumber) {
            $res['ManagerContactNumber'] = $this->managerContactNumber;
        }

        if (null !== $this->managerName) {
            $res['ManagerName'] = $this->managerName;
        }

        if (null !== $this->numberApplicationLetterPicture) {
            $res['NumberApplicationLetterPicture'] = $this->numberApplicationLetterPicture;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->undertakingPicture) {
            $res['UndertakingPicture'] = $this->undertakingPicture;
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
        if (isset($map['AuditDesc'])) {
            $model->auditDesc = $map['AuditDesc'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['BusinessLicenseAddress'])) {
            $model->businessLicenseAddress = $map['BusinessLicenseAddress'];
        }

        if (isset($map['BusinessLicensePicture'])) {
            $model->businessLicensePicture = $map['BusinessLicensePicture'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['EnterpriseName'])) {
            $model->enterpriseName = $map['EnterpriseName'];
        }

        if (isset($map['LegalPersonCertNumber'])) {
            $model->legalPersonCertNumber = $map['LegalPersonCertNumber'];
        }

        if (isset($map['LegalPersonCertPicture'])) {
            $model->legalPersonCertPicture = $map['LegalPersonCertPicture'];
        }

        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }

        if (isset($map['ManagerCertNumber'])) {
            $model->managerCertNumber = $map['ManagerCertNumber'];
        }

        if (isset($map['ManagerCertPicture'])) {
            $model->managerCertPicture = $map['ManagerCertPicture'];
        }

        if (isset($map['ManagerContactNumber'])) {
            $model->managerContactNumber = $map['ManagerContactNumber'];
        }

        if (isset($map['ManagerName'])) {
            $model->managerName = $map['ManagerName'];
        }

        if (isset($map['NumberApplicationLetterPicture'])) {
            $model->numberApplicationLetterPicture = $map['NumberApplicationLetterPicture'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UndertakingPicture'])) {
            $model->undertakingPicture = $map['UndertakingPicture'];
        }

        return $model;
    }
}
