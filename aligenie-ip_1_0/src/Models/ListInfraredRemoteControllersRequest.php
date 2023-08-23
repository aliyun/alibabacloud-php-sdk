<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListInfraredRemoteControllersRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $city;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $serviceProvider;
    protected $_name = [
        'brand'           => 'Brand',
        'category'        => 'Category',
        'city'            => 'City',
        'hotelId'         => 'HotelId',
        'province'        => 'Province',
        'serviceProvider' => 'ServiceProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInfraredRemoteControllersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }

        return $model;
    }
}
