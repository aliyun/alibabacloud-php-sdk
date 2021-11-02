<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressDetailResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryAddress extends Model
{
    /**
     * @var string
     */
    public $addressDetail;

    /**
     * @var int
     */
    public $addressId;

    /**
     * @var string
     */
    public $area;

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
    public $divisionCode;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $townDivisionCode;
    protected $_name = [
        'addressDetail'    => 'AddressDetail',
        'addressId'        => 'AddressId',
        'area'             => 'Area',
        'city'             => 'City',
        'country'          => 'Country',
        'divisionCode'     => 'DivisionCode',
        'fullName'         => 'FullName',
        'mobile'           => 'Mobile',
        'postCode'         => 'PostCode',
        'province'         => 'Province',
        'status'           => 'Status',
        'town'             => 'Town',
        'townDivisionCode' => 'TownDivisionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['AddressDetail'] = $this->addressDetail;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->townDivisionCode) {
            $res['TownDivisionCode'] = $this->townDivisionCode;
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
        if (isset($map['AddressDetail'])) {
            $model->addressDetail = $map['AddressDetail'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['TownDivisionCode'])) {
            $model->townDivisionCode = $map['TownDivisionCode'];
        }

        return $model;
    }
}
