<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class UpdateCompanyRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $companyAddress;

    /**
     * @var string
     */
    public $companyCode;

    /**
     * @var string
     */
    public $companyEmail;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $companyPhone;

    /**
     * @var int
     */
    public $companyType;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'city' => 'City',
        'companyAddress' => 'CompanyAddress',
        'companyCode' => 'CompanyCode',
        'companyEmail' => 'CompanyEmail',
        'companyId' => 'CompanyId',
        'companyName' => 'CompanyName',
        'companyPhone' => 'CompanyPhone',
        'companyType' => 'CompanyType',
        'countryCode' => 'CountryCode',
        'department' => 'Department',
        'lang' => 'Lang',
        'postCode' => 'PostCode',
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->companyAddress) {
            $res['CompanyAddress'] = $this->companyAddress;
        }

        if (null !== $this->companyCode) {
            $res['CompanyCode'] = $this->companyCode;
        }

        if (null !== $this->companyEmail) {
            $res['CompanyEmail'] = $this->companyEmail;
        }

        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->companyPhone) {
            $res['CompanyPhone'] = $this->companyPhone;
        }

        if (null !== $this->companyType) {
            $res['CompanyType'] = $this->companyType;
        }

        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CompanyAddress'])) {
            $model->companyAddress = $map['CompanyAddress'];
        }

        if (isset($map['CompanyCode'])) {
            $model->companyCode = $map['CompanyCode'];
        }

        if (isset($map['CompanyEmail'])) {
            $model->companyEmail = $map['CompanyEmail'];
        }

        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['CompanyPhone'])) {
            $model->companyPhone = $map['CompanyPhone'];
        }

        if (isset($map['CompanyType'])) {
            $model->companyType = $map['CompanyType'];
        }

        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
