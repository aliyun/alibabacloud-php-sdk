<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest;

use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest\address\customer;
use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var customer
     */
    public $customer;

    /**
     * @var string
     */
    public $detailedAddress;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var string
     */
    public $fixedNumber;

    /**
     * @var string
     */
    public $fullAddress;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var bool
     */
    public $isEffective;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $mobileNumber;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $recipientName;

    /**
     * @var string
     */
    public $relatedId;

    /**
     * @var string
     */
    public $relatedSystem;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $zipCode;
    protected $_name = [
        'addressId'       => 'AddressId',
        'appCode'         => 'AppCode',
        'city'            => 'City',
        'country'         => 'Country',
        'creator'         => 'Creator',
        'customer'        => 'Customer',
        'detailedAddress' => 'DetailedAddress',
        'district'        => 'District',
        'encryptProps'    => 'EncryptProps',
        'fixedNumber'     => 'FixedNumber',
        'fullAddress'     => 'FullAddress',
        'isDefault'       => 'IsDefault',
        'isEffective'     => 'IsEffective',
        'language'        => 'Language',
        'mobileNumber'    => 'MobileNumber',
        'province'        => 'Province',
        'recipientName'   => 'RecipientName',
        'relatedId'       => 'RelatedId',
        'relatedSystem'   => 'RelatedSystem',
        'sign'            => 'Sign',
        'street'          => 'Street',
        'uuid'            => 'Uuid',
        'zipCode'         => 'ZipCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->detailedAddress) {
            $res['DetailedAddress'] = $this->detailedAddress;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->fixedNumber) {
            $res['FixedNumber'] = $this->fixedNumber;
        }
        if (null !== $this->fullAddress) {
            $res['FullAddress'] = $this->fullAddress;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->isEffective) {
            $res['IsEffective'] = $this->isEffective;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->recipientName) {
            $res['RecipientName'] = $this->recipientName;
        }
        if (null !== $this->relatedId) {
            $res['RelatedId'] = $this->relatedId;
        }
        if (null !== $this->relatedSystem) {
            $res['RelatedSystem'] = $this->relatedSystem;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->street) {
            $res['Street'] = $this->street;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->zipCode) {
            $res['ZipCode'] = $this->zipCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Customer'])) {
            $model->customer = customer::fromMap($map['Customer']);
        }
        if (isset($map['DetailedAddress'])) {
            $model->detailedAddress = $map['DetailedAddress'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['FixedNumber'])) {
            $model->fixedNumber = $map['FixedNumber'];
        }
        if (isset($map['FullAddress'])) {
            $model->fullAddress = $map['FullAddress'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['IsEffective'])) {
            $model->isEffective = $map['IsEffective'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RecipientName'])) {
            $model->recipientName = $map['RecipientName'];
        }
        if (isset($map['RelatedId'])) {
            $model->relatedId = $map['RelatedId'];
        }
        if (isset($map['RelatedSystem'])) {
            $model->relatedSystem = $map['RelatedSystem'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Street'])) {
            $model->street = $map['Street'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ZipCode'])) {
            $model->zipCode = $map['ZipCode'];
        }

        return $model;
    }
}
