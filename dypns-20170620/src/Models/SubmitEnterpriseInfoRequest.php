<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models;

use AlibabaCloud\Dara\Model;

class SubmitEnterpriseInfoRequest extends Model
{
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
     * @var string
     */
    public $organizationCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $undertakingPicture;
    protected $_name = [
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
        'organizationCode' => 'OrganizationCode',
        'ownerId' => 'OwnerId',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'undertakingPicture' => 'UndertakingPicture',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['UndertakingPicture'])) {
            $model->undertakingPicture = $map['UndertakingPicture'];
        }

        return $model;
    }
}
