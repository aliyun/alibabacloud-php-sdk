<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class SendTaokeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $plat;

    /**
     * @var string
     */
    public $v;

    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productTitle;

    /**
     * @var string
     */
    public $sellPrice;

    /**
     * @var string
     */
    public $payPrice;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'componentId'     => 'ComponentId',
        'channelId'       => 'ChannelId',
        'mediaId'         => 'MediaId',
        'plat'            => 'Plat',
        'v'               => 'V',
        'brandId'         => 'BrandId',
        'productId'       => 'ProductId',
        'productTitle'    => 'ProductTitle',
        'sellPrice'       => 'SellPrice',
        'payPrice'        => 'PayPrice',
        'userId'          => 'UserId',
        'age'             => 'Age',
        'gender'          => 'Gender',
        'status'          => 'Status',
        'environmentType' => 'EnvironmentType',
        'province'        => 'Province',
        'city'            => 'City',
        'district'        => 'District',
        'address'         => 'Address',
        'mac'             => 'Mac',
        'phone'           => 'Phone',
        'imei'            => 'Imei',
        'ip'              => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->plat) {
            $res['Plat'] = $this->plat;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productTitle) {
            $res['ProductTitle'] = $this->productTitle;
        }
        if (null !== $this->sellPrice) {
            $res['SellPrice'] = $this->sellPrice;
        }
        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->environmentType) {
            $res['EnvironmentType'] = $this->environmentType;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTaokeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Plat'])) {
            $model->plat = $map['Plat'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductTitle'])) {
            $model->productTitle = $map['ProductTitle'];
        }
        if (isset($map['SellPrice'])) {
            $model->sellPrice = $map['SellPrice'];
        }
        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EnvironmentType'])) {
            $model->environmentType = $map['EnvironmentType'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
