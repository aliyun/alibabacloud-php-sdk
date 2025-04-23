<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationRequest\businessLicensePics;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationRequest\otherFiles;

class UpdateSmsQualificationRequest extends Model
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
     * @var businessLicensePics[]
     */
    public $businessLicensePics;

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
     * @var int
     */
    public $orderId;

    /**
     * @var otherFiles[]
     */
    public $otherFiles;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $qualificationGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'adminIDCardExpDate' => 'AdminIDCardExpDate',
        'adminIDCardFrontFace' => 'AdminIDCardFrontFace',
        'adminIDCardNo' => 'AdminIDCardNo',
        'adminIDCardPic' => 'AdminIDCardPic',
        'adminIDCardType' => 'AdminIDCardType',
        'adminName' => 'AdminName',
        'adminPhoneNo' => 'AdminPhoneNo',
        'businessLicensePics' => 'BusinessLicensePics',
        'bussinessLicenseExpDate' => 'BussinessLicenseExpDate',
        'certifyCode' => 'CertifyCode',
        'companyName' => 'CompanyName',
        'legalPersonIDCardNo' => 'LegalPersonIDCardNo',
        'legalPersonIDCardType' => 'LegalPersonIDCardType',
        'legalPersonIdCardBackSide' => 'LegalPersonIdCardBackSide',
        'legalPersonIdCardEffTime' => 'LegalPersonIdCardEffTime',
        'legalPersonIdCardFrontSide' => 'LegalPersonIdCardFrontSide',
        'legalPersonName' => 'LegalPersonName',
        'orderId' => 'OrderId',
        'otherFiles' => 'OtherFiles',
        'ownerId' => 'OwnerId',
        'qualificationGroupId' => 'QualificationGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->businessLicensePics)) {
            Model::validateArray($this->businessLicensePics);
        }
        if (\is_array($this->otherFiles)) {
            Model::validateArray($this->otherFiles);
        }
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

        if (null !== $this->businessLicensePics) {
            if (\is_array($this->businessLicensePics)) {
                $res['BusinessLicensePics'] = [];
                $n1 = 0;
                foreach ($this->businessLicensePics as $item1) {
                    $res['BusinessLicensePics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->otherFiles) {
            if (\is_array($this->otherFiles)) {
                $res['OtherFiles'] = [];
                $n1 = 0;
                foreach ($this->otherFiles as $item1) {
                    $res['OtherFiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qualificationGroupId) {
            $res['QualificationGroupId'] = $this->qualificationGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
            if (!empty($map['BusinessLicensePics'])) {
                $model->businessLicensePics = [];
                $n1 = 0;
                foreach ($map['BusinessLicensePics'] as $item1) {
                    $model->businessLicensePics[$n1++] = businessLicensePics::fromMap($item1);
                }
            }
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

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OtherFiles'])) {
            if (!empty($map['OtherFiles'])) {
                $model->otherFiles = [];
                $n1 = 0;
                foreach ($map['OtherFiles'] as $item1) {
                    $model->otherFiles[$n1++] = otherFiles::fromMap($item1);
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QualificationGroupId'])) {
            $model->qualificationGroupId = $map['QualificationGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
