<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class UpdateAccountProfileInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountAttribute;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $bindAlipayNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $cityJsonStringShrink;

    /**
     * @var string
     */
    public $contactMethod;

    /**
     * @var string
     */
    public $districtJsonStringShrink;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $head;

    /**
     * @var string
     */
    public $headColor;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $PK;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $provinceJsonStringShrink;

    /**
     * @var string
     */
    public $selfServicingBusinessRegNum;

    /**
     * @var string
     */
    public $selfServicingIdentificationNum;

    /**
     * @var string
     */
    public $trueName;
    protected $_name = [
        'accountAttribute' => 'AccountAttribute',
        'address' => 'Address',
        'address2' => 'Address2',
        'bindAlipayNo' => 'BindAlipayNo',
        'certType' => 'CertType',
        'cityJsonStringShrink' => 'CityJsonString',
        'contactMethod' => 'ContactMethod',
        'districtJsonStringShrink' => 'DistrictJsonString',
        'fax' => 'Fax',
        'firstName' => 'FirstName',
        'head' => 'Head',
        'headColor' => 'HeadColor',
        'lastName' => 'LastName',
        'PK' => 'PK',
        'phone' => 'Phone',
        'postCode' => 'PostCode',
        'provinceJsonStringShrink' => 'ProvinceJsonString',
        'selfServicingBusinessRegNum' => 'SelfServicingBusinessRegNum',
        'selfServicingIdentificationNum' => 'SelfServicingIdentificationNum',
        'trueName' => 'TrueName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAttribute) {
            $res['AccountAttribute'] = $this->accountAttribute;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->address2) {
            $res['Address2'] = $this->address2;
        }

        if (null !== $this->bindAlipayNo) {
            $res['BindAlipayNo'] = $this->bindAlipayNo;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->cityJsonStringShrink) {
            $res['CityJsonString'] = $this->cityJsonStringShrink;
        }

        if (null !== $this->contactMethod) {
            $res['ContactMethod'] = $this->contactMethod;
        }

        if (null !== $this->districtJsonStringShrink) {
            $res['DistrictJsonString'] = $this->districtJsonStringShrink;
        }

        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }

        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }

        if (null !== $this->head) {
            $res['Head'] = $this->head;
        }

        if (null !== $this->headColor) {
            $res['HeadColor'] = $this->headColor;
        }

        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->provinceJsonStringShrink) {
            $res['ProvinceJsonString'] = $this->provinceJsonStringShrink;
        }

        if (null !== $this->selfServicingBusinessRegNum) {
            $res['SelfServicingBusinessRegNum'] = $this->selfServicingBusinessRegNum;
        }

        if (null !== $this->selfServicingIdentificationNum) {
            $res['SelfServicingIdentificationNum'] = $this->selfServicingIdentificationNum;
        }

        if (null !== $this->trueName) {
            $res['TrueName'] = $this->trueName;
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
        if (isset($map['AccountAttribute'])) {
            $model->accountAttribute = $map['AccountAttribute'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Address2'])) {
            $model->address2 = $map['Address2'];
        }

        if (isset($map['BindAlipayNo'])) {
            $model->bindAlipayNo = $map['BindAlipayNo'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CityJsonString'])) {
            $model->cityJsonStringShrink = $map['CityJsonString'];
        }

        if (isset($map['ContactMethod'])) {
            $model->contactMethod = $map['ContactMethod'];
        }

        if (isset($map['DistrictJsonString'])) {
            $model->districtJsonStringShrink = $map['DistrictJsonString'];
        }

        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }

        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }

        if (isset($map['Head'])) {
            $model->head = $map['Head'];
        }

        if (isset($map['HeadColor'])) {
            $model->headColor = $map['HeadColor'];
        }

        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['ProvinceJsonString'])) {
            $model->provinceJsonStringShrink = $map['ProvinceJsonString'];
        }

        if (isset($map['SelfServicingBusinessRegNum'])) {
            $model->selfServicingBusinessRegNum = $map['SelfServicingBusinessRegNum'];
        }

        if (isset($map['SelfServicingIdentificationNum'])) {
            $model->selfServicingIdentificationNum = $map['SelfServicingIdentificationNum'];
        }

        if (isset($map['TrueName'])) {
            $model->trueName = $map['TrueName'];
        }

        return $model;
    }
}
