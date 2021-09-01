<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressDetailResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryAddress extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $addressDetail;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $addressId;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $townDivisionCode;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'status'           => 'Status',
        'postCode'         => 'PostCode',
        'fullName'         => 'FullName',
        'addressDetail'    => 'AddressDetail',
        'city'             => 'City',
        'addressId'        => 'AddressId',
        'divisionCode'     => 'DivisionCode',
        'mobile'           => 'Mobile',
        'country'          => 'Country',
        'area'             => 'Area',
        'townDivisionCode' => 'TownDivisionCode',
        'town'             => 'Town',
        'province'         => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->addressDetail) {
            $res['AddressDetail'] = $this->addressDetail;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->townDivisionCode) {
            $res['TownDivisionCode'] = $this->townDivisionCode;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['AddressDetail'])) {
            $model->addressDetail = $map['AddressDetail'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['TownDivisionCode'])) {
            $model->townDivisionCode = $map['TownDivisionCode'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
