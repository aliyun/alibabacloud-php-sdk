<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList;

use AlibabaCloud\Tea\Model;

class customerInvoiceAddress extends Model
{
    /**
     * @var string
     */
    public $addressee;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $county;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'addressee'       => 'Addressee',
        'postalCode'      => 'PostalCode',
        'userId'          => 'UserId',
        'city'            => 'City',
        'userNick'        => 'UserNick',
        'street'          => 'Street',
        'phone'           => 'Phone',
        'county'          => 'County',
        'bizType'         => 'BizType',
        'deliveryAddress' => 'DeliveryAddress',
        'id'              => 'Id',
        'province'        => 'Province',
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
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->street) {
            $res['Street'] = $this->street;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->county) {
            $res['County'] = $this->county;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['Street'])) {
            $model->street = $map['Street'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['County'])) {
            $model->county = $map['County'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
