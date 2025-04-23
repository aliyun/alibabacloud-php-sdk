<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class SubmitSmsQualificationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adminIDCardExpDate;

    /**
     * @var string
     */
    public $adminIDCardFrontFace;

    /**
     * @var string
     */
    public $adminIDCardNo;

    /**
     * @var string
     */
    public $adminIDCardPic;

    /**
     * @var string
     */
    public $adminIDCardType;

    /**
     * @var string
     */
    public $adminName;

    /**
     * @var string
     */
    public $adminPhoneNo;

    /**
     * @var string
     */
    public $businessLicensePicsShrink;

    /**
     * @var string
     */
    public $bussinessLicenseExpDate;

    /**
     * @var string
     */
    public $certifyCode;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $companyType;

    /**
     * @var string
     */
    public $legalPersonIDCardNo;

    /**
     * @var string
     */
    public $legalPersonIDCardType;

    /**
     * @var string
     */
    public $legalPersonIdCardBackSide;

    /**
     * @var string
     */
    public $legalPersonIdCardEffTime;

    /**
     * @var string
     */
    public $legalPersonIdCardFrontSide;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var string
     */
    public $otherFilesShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qualificationName;

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
     * @var bool
     */
    public $useBySelf;

    /**
     * @var bool
     */
    public $whetherShare;
    protected $_name = [
        'adminIDCardExpDate' => 'AdminIDCardExpDate',
        'adminIDCardFrontFace' => 'AdminIDCardFrontFace',
        'adminIDCardNo' => 'AdminIDCardNo',
        'adminIDCardPic' => 'AdminIDCardPic',
        'adminIDCardType' => 'AdminIDCardType',
        'adminName' => 'AdminName',
        'adminPhoneNo' => 'AdminPhoneNo',
        'businessLicensePicsShrink' => 'BusinessLicensePics',
        'bussinessLicenseExpDate' => 'BussinessLicenseExpDate',
        'certifyCode' => 'CertifyCode',
        'companyName' => 'CompanyName',
        'companyType' => 'CompanyType',
        'legalPersonIDCardNo' => 'LegalPersonIDCardNo',
        'legalPersonIDCardType' => 'LegalPersonIDCardType',
        'legalPersonIdCardBackSide' => 'LegalPersonIdCardBackSide',
        'legalPersonIdCardEffTime' => 'LegalPersonIdCardEffTime',
        'legalPersonIdCardFrontSide' => 'LegalPersonIdCardFrontSide',
        'legalPersonName' => 'LegalPersonName',
        'organizationCode' => 'OrganizationCode',
        'otherFilesShrink' => 'OtherFiles',
        'ownerId' => 'OwnerId',
        'qualificationName' => 'QualificationName',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'useBySelf' => 'UseBySelf',
        'whetherShare' => 'WhetherShare',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminIDCardExpDate) {
            $res['AdminIDCardExpDate'] = $this->adminIDCardExpDate;
        }

        if (null !== $this->adminIDCardFrontFace) {
            $res['AdminIDCardFrontFace'] = $this->adminIDCardFrontFace;
        }

        if (null !== $this->adminIDCardNo) {
            $res['AdminIDCardNo'] = $this->adminIDCardNo;
        }

        if (null !== $this->adminIDCardPic) {
            $res['AdminIDCardPic'] = $this->adminIDCardPic;
        }

        if (null !== $this->adminIDCardType) {
            $res['AdminIDCardType'] = $this->adminIDCardType;
        }

        if (null !== $this->adminName) {
            $res['AdminName'] = $this->adminName;
        }

        if (null !== $this->adminPhoneNo) {
            $res['AdminPhoneNo'] = $this->adminPhoneNo;
        }

        if (null !== $this->businessLicensePicsShrink) {
            $res['BusinessLicensePics'] = $this->businessLicensePicsShrink;
        }

        if (null !== $this->bussinessLicenseExpDate) {
            $res['BussinessLicenseExpDate'] = $this->bussinessLicenseExpDate;
        }

        if (null !== $this->certifyCode) {
            $res['CertifyCode'] = $this->certifyCode;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->companyType) {
            $res['CompanyType'] = $this->companyType;
        }

        if (null !== $this->legalPersonIDCardNo) {
            $res['LegalPersonIDCardNo'] = $this->legalPersonIDCardNo;
        }

        if (null !== $this->legalPersonIDCardType) {
            $res['LegalPersonIDCardType'] = $this->legalPersonIDCardType;
        }

        if (null !== $this->legalPersonIdCardBackSide) {
            $res['LegalPersonIdCardBackSide'] = $this->legalPersonIdCardBackSide;
        }

        if (null !== $this->legalPersonIdCardEffTime) {
            $res['LegalPersonIdCardEffTime'] = $this->legalPersonIdCardEffTime;
        }

        if (null !== $this->legalPersonIdCardFrontSide) {
            $res['LegalPersonIdCardFrontSide'] = $this->legalPersonIdCardFrontSide;
        }

        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
        }

        if (null !== $this->otherFilesShrink) {
            $res['OtherFiles'] = $this->otherFilesShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qualificationName) {
            $res['QualificationName'] = $this->qualificationName;
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

        if (null !== $this->useBySelf) {
            $res['UseBySelf'] = $this->useBySelf;
        }

        if (null !== $this->whetherShare) {
            $res['WhetherShare'] = $this->whetherShare;
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
        if (isset($map['AdminIDCardExpDate'])) {
            $model->adminIDCardExpDate = $map['AdminIDCardExpDate'];
        }

        if (isset($map['AdminIDCardFrontFace'])) {
            $model->adminIDCardFrontFace = $map['AdminIDCardFrontFace'];
        }

        if (isset($map['AdminIDCardNo'])) {
            $model->adminIDCardNo = $map['AdminIDCardNo'];
        }

        if (isset($map['AdminIDCardPic'])) {
            $model->adminIDCardPic = $map['AdminIDCardPic'];
        }

        if (isset($map['AdminIDCardType'])) {
            $model->adminIDCardType = $map['AdminIDCardType'];
        }

        if (isset($map['AdminName'])) {
            $model->adminName = $map['AdminName'];
        }

        if (isset($map['AdminPhoneNo'])) {
            $model->adminPhoneNo = $map['AdminPhoneNo'];
        }

        if (isset($map['BusinessLicensePics'])) {
            $model->businessLicensePicsShrink = $map['BusinessLicensePics'];
        }

        if (isset($map['BussinessLicenseExpDate'])) {
            $model->bussinessLicenseExpDate = $map['BussinessLicenseExpDate'];
        }

        if (isset($map['CertifyCode'])) {
            $model->certifyCode = $map['CertifyCode'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['CompanyType'])) {
            $model->companyType = $map['CompanyType'];
        }

        if (isset($map['LegalPersonIDCardNo'])) {
            $model->legalPersonIDCardNo = $map['LegalPersonIDCardNo'];
        }

        if (isset($map['LegalPersonIDCardType'])) {
            $model->legalPersonIDCardType = $map['LegalPersonIDCardType'];
        }

        if (isset($map['LegalPersonIdCardBackSide'])) {
            $model->legalPersonIdCardBackSide = $map['LegalPersonIdCardBackSide'];
        }

        if (isset($map['LegalPersonIdCardEffTime'])) {
            $model->legalPersonIdCardEffTime = $map['LegalPersonIdCardEffTime'];
        }

        if (isset($map['LegalPersonIdCardFrontSide'])) {
            $model->legalPersonIdCardFrontSide = $map['LegalPersonIdCardFrontSide'];
        }

        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
        }

        if (isset($map['OtherFiles'])) {
            $model->otherFilesShrink = $map['OtherFiles'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QualificationName'])) {
            $model->qualificationName = $map['QualificationName'];
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

        if (isset($map['UseBySelf'])) {
            $model->useBySelf = $map['UseBySelf'];
        }

        if (isset($map['WhetherShare'])) {
            $model->whetherShare = $map['WhetherShare'];
        }

        return $model;
    }
}
