<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList;

use AlibabaCloud\Tea\Model;

class customerInvoiceAddress extends Model
{
    /**
     * @description The addressee.
     *
     * @example test
     *
     * @var string
     */
    public $addressee;

    /**
     * @description The business type.
     *
     * @example test
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The city to which the invoice is mailed.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $city;

    /**
     * @description The name of the district to which the invoice is mailed.
     *
     * @example Test District
     *
     * @var string
     */
    public $county;

    /**
     * @description The detailed address to which the invoice is mailed. This parameter is returned after fields are concatenated.
     *
     * @example Test Address
     *
     * @var string
     */
    public $deliveryAddress;

    /**
     * @description The ID.
     *
     * @example 311601051
     *
     * @var int
     */
    public $id;

    /**
     * @description The phone number of the addressee.
     *
     * @example 138xxxxxxxx
     *
     * @var string
     */
    public $phone;

    /**
     * @description The postcode.
     *
     * @example 000000
     *
     * @var string
     */
    public $postalCode;

    /**
     * @description The province to which the invoice is mailed.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $province;

    /**
     * @description The name of the street to which the invoice is mailed.
     *
     * @example Test Street
     *
     * @var string
     */
    public $street;

    /**
     * @description The ID of the user.
     *
     * @example 4382956342857
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example testNick
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'addressee'       => 'Addressee',
        'bizType'         => 'BizType',
        'city'            => 'City',
        'county'          => 'County',
        'deliveryAddress' => 'DeliveryAddress',
        'id'              => 'Id',
        'phone'           => 'Phone',
        'postalCode'      => 'PostalCode',
        'province'        => 'Province',
        'street'          => 'Street',
        'userId'          => 'UserId',
        'userNick'        => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressee) {
            $res['Addressee'] = $this->addressee;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->county) {
            $res['County'] = $this->county;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->street) {
            $res['Street'] = $this->street;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerInvoiceAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addressee'])) {
            $model->addressee = $map['Addressee'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['County'])) {
            $model->county = $map['County'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Street'])) {
            $model->street = $map['Street'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
