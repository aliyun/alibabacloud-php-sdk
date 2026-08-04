<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnterpriseInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnterpriseInfoResponseBody\profileInfo\city;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEnterpriseInfoResponseBody\profileInfo\province;

class profileInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $aliyunPK;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $businessLicenseImgSrc;

    /**
     * @var string
     */
    public $businessLicenseNumber;

    /**
     * @var string
     */
    public $businessLicenseType;

    /**
     * @var string
     */
    public $certifiedFrom;

    /**
     * @var string
     */
    public $certifiedTime;

    /**
     * @var city
     */
    public $city;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $detailAddress;

    /**
     * @var string
     */
    public $EInterpriseSize;

    /**
     * @var string
     */
    public $enterpriseEntity;

    /**
     * @var string
     */
    public $entityIDNumber;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var province
     */
    public $province;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $years;
    protected $_name = [
        'alias' => 'Alias',
        'aliyunPK' => 'AliyunPK',
        'auditStatus' => 'AuditStatus',
        'businessLicenseImgSrc' => 'BusinessLicenseImgSrc',
        'businessLicenseNumber' => 'BusinessLicenseNumber',
        'businessLicenseType' => 'BusinessLicenseType',
        'certifiedFrom' => 'CertifiedFrom',
        'certifiedTime' => 'CertifiedTime',
        'city' => 'City',
        'createTime' => 'CreateTime',
        'detailAddress' => 'DetailAddress',
        'EInterpriseSize' => 'EInterpriseSize',
        'enterpriseEntity' => 'EnterpriseEntity',
        'entityIDNumber' => 'EntityIDNumber',
        'extend' => 'Extend',
        'fax' => 'Fax',
        'name' => 'Name',
        'phone' => 'Phone',
        'postalCode' => 'PostalCode',
        'profile' => 'Profile',
        'province' => 'Province',
        'updateTime' => 'UpdateTime',
        'years' => 'Years',
    ];

    public function validate()
    {
        if (null !== $this->city) {
            $this->city->validate();
        }
        if (null !== $this->province) {
            $this->province->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->aliyunPK) {
            $res['AliyunPK'] = $this->aliyunPK;
        }

        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->businessLicenseImgSrc) {
            $res['BusinessLicenseImgSrc'] = $this->businessLicenseImgSrc;
        }

        if (null !== $this->businessLicenseNumber) {
            $res['BusinessLicenseNumber'] = $this->businessLicenseNumber;
        }

        if (null !== $this->businessLicenseType) {
            $res['BusinessLicenseType'] = $this->businessLicenseType;
        }

        if (null !== $this->certifiedFrom) {
            $res['CertifiedFrom'] = $this->certifiedFrom;
        }

        if (null !== $this->certifiedTime) {
            $res['CertifiedTime'] = $this->certifiedTime;
        }

        if (null !== $this->city) {
            $res['City'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detailAddress) {
            $res['DetailAddress'] = $this->detailAddress;
        }

        if (null !== $this->EInterpriseSize) {
            $res['EInterpriseSize'] = $this->EInterpriseSize;
        }

        if (null !== $this->enterpriseEntity) {
            $res['EnterpriseEntity'] = $this->enterpriseEntity;
        }

        if (null !== $this->entityIDNumber) {
            $res['EntityIDNumber'] = $this->entityIDNumber;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toArray($noStream) : $this->province;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->years) {
            $res['Years'] = $this->years;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['AliyunPK'])) {
            $model->aliyunPK = $map['AliyunPK'];
        }

        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['BusinessLicenseImgSrc'])) {
            $model->businessLicenseImgSrc = $map['BusinessLicenseImgSrc'];
        }

        if (isset($map['BusinessLicenseNumber'])) {
            $model->businessLicenseNumber = $map['BusinessLicenseNumber'];
        }

        if (isset($map['BusinessLicenseType'])) {
            $model->businessLicenseType = $map['BusinessLicenseType'];
        }

        if (isset($map['CertifiedFrom'])) {
            $model->certifiedFrom = $map['CertifiedFrom'];
        }

        if (isset($map['CertifiedTime'])) {
            $model->certifiedTime = $map['CertifiedTime'];
        }

        if (isset($map['City'])) {
            $model->city = city::fromMap($map['City']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DetailAddress'])) {
            $model->detailAddress = $map['DetailAddress'];
        }

        if (isset($map['EInterpriseSize'])) {
            $model->EInterpriseSize = $map['EInterpriseSize'];
        }

        if (isset($map['EnterpriseEntity'])) {
            $model->enterpriseEntity = $map['EnterpriseEntity'];
        }

        if (isset($map['EntityIDNumber'])) {
            $model->entityIDNumber = $map['EntityIDNumber'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
