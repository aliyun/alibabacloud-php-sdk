<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponseBody\module;

use AlibabaCloud\Tea\Model;

class domainSpecialBizContact extends Model
{
    /**
     * @description The business ID.
     *
     * @example 258
     *
     * @var int
     */
    public $bizId;

    /**
     * @description The city.
     *
     * @var string
     */
    public $CCity;

    /**
     * @description The organization name.
     *
     * @var string
     */
    public $CCompany;

    /**
     * @description The country code.
     *
     * @example CN
     *
     * @var string
     */
    public $CCountry;

    /**
     * @description The contact name.
     *
     * @var string
     */
    public $CName;

    /**
     * @description The province.
     *
     * @var string
     */
    public $CProvince;

    /**
     * @description The address.
     *
     * @var string
     */
    public $CVenu;

    /**
     * @description The city in English.
     *
     * @example an shan Shi
     *
     * @var string
     */
    public $ECity;

    /**
     * @description The organization name in English.
     *
     * @example hebeihuiheguandaozhizaoyouxiangongsi
     *
     * @var string
     */
    public $ECompany;

    /**
     * @description The contact name in English.
     *
     * @example tong da wei
     *
     * @var string
     */
    public $EName;

    /**
     * @description The province in English.
     *
     * @example liao ning
     *
     * @var string
     */
    public $EProvince;

    /**
     * @description The address in English.
     *
     * @example tie xi qu xin kai jie 59-4 hao
     *
     * @var string
     */
    public $EVenu;

    /**
     * @description The email address.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The extended information.
     *
     * @example -
     *
     * @var string
     */
    public $extend;

    /**
     * @description The fax country code.
     *
     * @example 86
     *
     * @var string
     */
    public $faxArea;

    /**
     * @description The fax extension number.
     *
     * @example 61284565
     *
     * @var string
     */
    public $faxExt;

    /**
     * @description The fax number with an area code or mobile number.
     *
     * @example 16604121234
     *
     * @var string
     */
    public $faxMain;

    /**
     * @description The mobile number.
     *
     * @example 156********
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The zip code.
     *
     * @example 100000
     *
     * @var string
     */
    public $postalcode;

    /**
     * @description The contact type. Valid values: 1: individual. 2: enterprise.
     *
     * @example 1
     *
     * @var int
     */
    public $regType;

    /**
     * @description The registrant ID.
     *
     * @example 121000002****
     *
     * @var string
     */
    public $registrantId;

    /**
     * @description The calling code of the country or region where the domain name contact is located.
     *
     * @example 86
     *
     * @var string
     */
    public $telArea;

    /**
     * @description The telephone extension number.
     *
     * @example 2756
     *
     * @var string
     */
    public $telExt;

    /**
     * @description The landline number with an area code or mobile number.
     *
     * @example 16604121234
     *
     * @var string
     */
    public $telMain;

    /**
     * @description The VSP contact ID.
     *
     * @example 121000001****
     *
     * @var string
     */
    public $vspContactId;
    protected $_name = [
        'bizId'        => 'BizId',
        'CCity'        => 'CCity',
        'CCompany'     => 'CCompany',
        'CCountry'     => 'CCountry',
        'CName'        => 'CName',
        'CProvince'    => 'CProvince',
        'CVenu'        => 'CVenu',
        'ECity'        => 'ECity',
        'ECompany'     => 'ECompany',
        'EName'        => 'EName',
        'EProvince'    => 'EProvince',
        'EVenu'        => 'EVenu',
        'email'        => 'Email',
        'extend'       => 'Extend',
        'faxArea'      => 'FaxArea',
        'faxExt'       => 'FaxExt',
        'faxMain'      => 'FaxMain',
        'mobile'       => 'Mobile',
        'postalcode'   => 'Postalcode',
        'regType'      => 'RegType',
        'registrantId' => 'RegistrantId',
        'telArea'      => 'TelArea',
        'telExt'       => 'TelExt',
        'telMain'      => 'TelMain',
        'vspContactId' => 'VspContactId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
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
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->faxArea) {
            $res['FaxArea'] = $this->faxArea;
        }
        if (null !== $this->faxExt) {
            $res['FaxExt'] = $this->faxExt;
        }
        if (null !== $this->faxMain) {
            $res['FaxMain'] = $this->faxMain;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->postalcode) {
            $res['Postalcode'] = $this->postalcode;
        }
        if (null !== $this->regType) {
            $res['RegType'] = $this->regType;
        }
        if (null !== $this->registrantId) {
            $res['RegistrantId'] = $this->registrantId;
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
        if (null !== $this->vspContactId) {
            $res['VspContactId'] = $this->vspContactId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainSpecialBizContact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
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
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['FaxArea'])) {
            $model->faxArea = $map['FaxArea'];
        }
        if (isset($map['FaxExt'])) {
            $model->faxExt = $map['FaxExt'];
        }
        if (isset($map['FaxMain'])) {
            $model->faxMain = $map['FaxMain'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Postalcode'])) {
            $model->postalcode = $map['Postalcode'];
        }
        if (isset($map['RegType'])) {
            $model->regType = $map['RegType'];
        }
        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
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
        if (isset($map['VspContactId'])) {
            $model->vspContactId = $map['VspContactId'];
        }

        return $model;
    }
}
