<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySingleSmsQualificationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySingleSmsQualificationResponseBody\data\businessLicensePics;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySingleSmsQualificationResponseBody\data\otherFiles;

class data extends Model
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
    public $businessType;

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
    public $effTimeStr;

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
    public $legalPersonIdCardEffTime;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var otherFiles[]
     */
    public $otherFiles;

    /**
     * @var int
     */
    public $qualificationGroupId;

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
    public $state;

    /**
     * @var bool
     */
    public $useBySelf;

    /**
     * @var bool
     */
    public $whetherShare;

    /**
     * @var int
     */
    public $workOrderId;
    protected $_name = [
        'adminIDCardExpDate' => 'AdminIDCardExpDate',
        'adminIDCardFrontFace' => 'AdminIDCardFrontFace',
        'adminIDCardNo' => 'AdminIDCardNo',
        'adminIDCardPic' => 'AdminIDCardPic',
        'adminIDCardType' => 'AdminIDCardType',
        'adminName' => 'AdminName',
        'adminPhoneNo' => 'AdminPhoneNo',
        'businessLicensePics' => 'BusinessLicensePics',
        'businessType' => 'BusinessType',
        'companyName' => 'CompanyName',
        'companyType' => 'CompanyType',
        'effTimeStr' => 'EffTimeStr',
        'legalPersonIDCardNo' => 'LegalPersonIDCardNo',
        'legalPersonIDCardType' => 'LegalPersonIDCardType',
        'legalPersonIdCardEffTime' => 'LegalPersonIdCardEffTime',
        'legalPersonName' => 'LegalPersonName',
        'organizationCode' => 'OrganizationCode',
        'otherFiles' => 'OtherFiles',
        'qualificationGroupId' => 'QualificationGroupId',
        'qualificationName' => 'QualificationName',
        'remark' => 'Remark',
        'state' => 'State',
        'useBySelf' => 'UseBySelf',
        'whetherShare' => 'WhetherShare',
        'workOrderId' => 'WorkOrderId',
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

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->companyType) {
            $res['CompanyType'] = $this->companyType;
        }

        if (null !== $this->effTimeStr) {
            $res['EffTimeStr'] = $this->effTimeStr;
        }

        if (null !== $this->legalPersonIDCardNo) {
            $res['LegalPersonIDCardNo'] = $this->legalPersonIDCardNo;
        }

        if (null !== $this->legalPersonIDCardType) {
            $res['LegalPersonIDCardType'] = $this->legalPersonIDCardType;
        }

        if (null !== $this->legalPersonIdCardEffTime) {
            $res['LegalPersonIdCardEffTime'] = $this->legalPersonIdCardEffTime;
        }

        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }

        if (null !== $this->organizationCode) {
            $res['OrganizationCode'] = $this->organizationCode;
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

        if (null !== $this->qualificationGroupId) {
            $res['QualificationGroupId'] = $this->qualificationGroupId;
        }

        if (null !== $this->qualificationName) {
            $res['QualificationName'] = $this->qualificationName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->useBySelf) {
            $res['UseBySelf'] = $this->useBySelf;
        }

        if (null !== $this->whetherShare) {
            $res['WhetherShare'] = $this->whetherShare;
        }

        if (null !== $this->workOrderId) {
            $res['WorkOrderId'] = $this->workOrderId;
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

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['CompanyType'])) {
            $model->companyType = $map['CompanyType'];
        }

        if (isset($map['EffTimeStr'])) {
            $model->effTimeStr = $map['EffTimeStr'];
        }

        if (isset($map['LegalPersonIDCardNo'])) {
            $model->legalPersonIDCardNo = $map['LegalPersonIDCardNo'];
        }

        if (isset($map['LegalPersonIDCardType'])) {
            $model->legalPersonIDCardType = $map['LegalPersonIDCardType'];
        }

        if (isset($map['LegalPersonIdCardEffTime'])) {
            $model->legalPersonIdCardEffTime = $map['LegalPersonIdCardEffTime'];
        }

        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }

        if (isset($map['OrganizationCode'])) {
            $model->organizationCode = $map['OrganizationCode'];
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

        if (isset($map['QualificationGroupId'])) {
            $model->qualificationGroupId = $map['QualificationGroupId'];
        }

        if (isset($map['QualificationName'])) {
            $model->qualificationName = $map['QualificationName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UseBySelf'])) {
            $model->useBySelf = $map['UseBySelf'];
        }

        if (isset($map['WhetherShare'])) {
            $model->whetherShare = $map['WhetherShare'];
        }

        if (isset($map['WorkOrderId'])) {
            $model->workOrderId = $map['WorkOrderId'];
        }

        return $model;
    }
}
