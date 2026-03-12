<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class QueryContactResponseBody extends Model
{
    /**
     * @var string
     */
    public $CCity;

    /**
     * @var string
     */
    public $CCompany;

    /**
     * @var string
     */
    public $CCountry;

    /**
     * @var string
     */
    public $CName;

    /**
     * @var string
     */
    public $CProvince;

    /**
     * @var string
     */
    public $CVenu;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $ECity;

    /**
     * @var string
     */
    public $ECompany;

    /**
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $EProvince;

    /**
     * @var string
     */
    public $EVenu;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $regType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $telExt;

    /**
     * @var string
     */
    public $telMain;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'CCity' => 'CCity',
        'CCompany' => 'CCompany',
        'CCountry' => 'CCountry',
        'CName' => 'CName',
        'CProvince' => 'CProvince',
        'CVenu' => 'CVenu',
        'createDate' => 'CreateDate',
        'ECity' => 'ECity',
        'ECompany' => 'ECompany',
        'EName' => 'EName',
        'EProvince' => 'EProvince',
        'EVenu' => 'EVenu',
        'email' => 'Email',
        'postalCode' => 'PostalCode',
        'regType' => 'RegType',
        'requestId' => 'RequestId',
        'telArea' => 'TelArea',
        'telExt' => 'TelExt',
        'telMain' => 'TelMain',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CCity) {
            $res['CCity'] = $this->CCity;
        }

        if (null !== $this->CCompany) {
            $res['CCompany'] = $this->CCompany;
        }

        if (null !== $this->CCountry) {
            $res['CCountry'] = $this->CCountry;
        }

        if (null !== $this->CName) {
            $res['CName'] = $this->CName;
        }

        if (null !== $this->CProvince) {
            $res['CProvince'] = $this->CProvince;
        }

        if (null !== $this->CVenu) {
            $res['CVenu'] = $this->CVenu;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->ECity) {
            $res['ECity'] = $this->ECity;
        }

        if (null !== $this->ECompany) {
            $res['ECompany'] = $this->ECompany;
        }

        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }

        if (null !== $this->EProvince) {
            $res['EProvince'] = $this->EProvince;
        }

        if (null !== $this->EVenu) {
            $res['EVenu'] = $this->EVenu;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }

        if (null !== $this->regType) {
            $res['RegType'] = $this->regType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }

        if (null !== $this->telExt) {
            $res['TelExt'] = $this->telExt;
        }

        if (null !== $this->telMain) {
            $res['TelMain'] = $this->telMain;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['CCity'])) {
            $model->CCity = $map['CCity'];
        }

        if (isset($map['CCompany'])) {
            $model->CCompany = $map['CCompany'];
        }

        if (isset($map['CCountry'])) {
            $model->CCountry = $map['CCountry'];
        }

        if (isset($map['CName'])) {
            $model->CName = $map['CName'];
        }

        if (isset($map['CProvince'])) {
            $model->CProvince = $map['CProvince'];
        }

        if (isset($map['CVenu'])) {
            $model->CVenu = $map['CVenu'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['ECity'])) {
            $model->ECity = $map['ECity'];
        }

        if (isset($map['ECompany'])) {
            $model->ECompany = $map['ECompany'];
        }

        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }

        if (isset($map['EProvince'])) {
            $model->EProvince = $map['EProvince'];
        }

        if (isset($map['EVenu'])) {
            $model->EVenu = $map['EVenu'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }

        if (isset($map['RegType'])) {
            $model->regType = $map['RegType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }

        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }

        if (isset($map['TelMain'])) {
            $model->telMain = $map['TelMain'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
