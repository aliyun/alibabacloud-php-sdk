<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\expandInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\imageinfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos;

class hotelStaticInfos extends Model
{
    /**
     * @var string[]
     */
    public $blockRoomTypeInformation;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $districtName;

    /**
     * @var expandInfo
     */
    public $expandInfo;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @var string
     */
    public $hotelEnAddress;

    /**
     * @var string
     */
    public $hotelEnName;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $hotelOpenTime;

    /**
     * @var string
     */
    public $hotelPhones;

    /**
     * @var string
     */
    public $hotelPolicies;

    /**
     * @var string
     */
    public $hotelfax;

    /**
     * @var string
     */
    public $hotelpics;

    /**
     * @var imageinfos[]
     */
    public $imageinfos;

    /**
     * @var string
     */
    public $invoiceProviderMethod;

    /**
     * @var int[]
     */
    public $invoiceTypes;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var string
     */
    public $ratingAverage;

    /**
     * @var roomInfos[]
     */
    public $roomInfos;

    /**
     * @var string
     */
    public $star;

    /**
     * @var string
     */
    public $starRate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $themes;

    /**
     * @var bool
     */
    public $visaReminding;
    protected $_name = [
        'blockRoomTypeInformation' => 'block_room_type_information',
        'brand' => 'brand',
        'brandName' => 'brand_name',
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'country' => 'country',
        'countryCode' => 'country_code',
        'description' => 'description',
        'district' => 'district',
        'districtName' => 'district_name',
        'expandInfo' => 'expand_info',
        'hotelAddress' => 'hotel_address',
        'hotelEnAddress' => 'hotel_en_address',
        'hotelEnName' => 'hotel_en_name',
        'hotelId' => 'hotel_id',
        'hotelName' => 'hotel_name',
        'hotelOpenTime' => 'hotel_open_time',
        'hotelPhones' => 'hotel_phones',
        'hotelPolicies' => 'hotel_policies',
        'hotelfax' => 'hotelfax',
        'hotelpics' => 'hotelpics',
        'imageinfos' => 'imageinfos',
        'invoiceProviderMethod' => 'invoice_provider_method',
        'invoiceTypes' => 'invoice_types',
        'location' => 'location',
        'province' => 'province',
        'provinceName' => 'province_name',
        'ratingAverage' => 'rating_average',
        'roomInfos' => 'room_infos',
        'star' => 'star',
        'starRate' => 'star_rate',
        'status' => 'status',
        'themes' => 'themes',
        'visaReminding' => 'visa_reminding',
    ];

    public function validate()
    {
        if (\is_array($this->blockRoomTypeInformation)) {
            Model::validateArray($this->blockRoomTypeInformation);
        }
        if (null !== $this->expandInfo) {
            $this->expandInfo->validate();
        }
        if (\is_array($this->imageinfos)) {
            Model::validateArray($this->imageinfos);
        }
        if (\is_array($this->invoiceTypes)) {
            Model::validateArray($this->invoiceTypes);
        }
        if (\is_array($this->roomInfos)) {
            Model::validateArray($this->roomInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockRoomTypeInformation) {
            if (\is_array($this->blockRoomTypeInformation)) {
                $res['block_room_type_information'] = [];
                foreach ($this->blockRoomTypeInformation as $key1 => $value1) {
                    $res['block_room_type_information'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->brand) {
            $res['brand'] = $this->brand;
        }

        if (null !== $this->brandName) {
            $res['brand_name'] = $this->brandName;
        }

        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }

        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }

        if (null !== $this->country) {
            $res['country'] = $this->country;
        }

        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->district) {
            $res['district'] = $this->district;
        }

        if (null !== $this->districtName) {
            $res['district_name'] = $this->districtName;
        }

        if (null !== $this->expandInfo) {
            $res['expand_info'] = null !== $this->expandInfo ? $this->expandInfo->toArray($noStream) : $this->expandInfo;
        }

        if (null !== $this->hotelAddress) {
            $res['hotel_address'] = $this->hotelAddress;
        }

        if (null !== $this->hotelEnAddress) {
            $res['hotel_en_address'] = $this->hotelEnAddress;
        }

        if (null !== $this->hotelEnName) {
            $res['hotel_en_name'] = $this->hotelEnName;
        }

        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }

        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }

        if (null !== $this->hotelOpenTime) {
            $res['hotel_open_time'] = $this->hotelOpenTime;
        }

        if (null !== $this->hotelPhones) {
            $res['hotel_phones'] = $this->hotelPhones;
        }

        if (null !== $this->hotelPolicies) {
            $res['hotel_policies'] = $this->hotelPolicies;
        }

        if (null !== $this->hotelfax) {
            $res['hotelfax'] = $this->hotelfax;
        }

        if (null !== $this->hotelpics) {
            $res['hotelpics'] = $this->hotelpics;
        }

        if (null !== $this->imageinfos) {
            if (\is_array($this->imageinfos)) {
                $res['imageinfos'] = [];
                $n1 = 0;
                foreach ($this->imageinfos as $item1) {
                    $res['imageinfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceProviderMethod) {
            $res['invoice_provider_method'] = $this->invoiceProviderMethod;
        }

        if (null !== $this->invoiceTypes) {
            if (\is_array($this->invoiceTypes)) {
                $res['invoice_types'] = [];
                $n1 = 0;
                foreach ($this->invoiceTypes as $item1) {
                    $res['invoice_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->province) {
            $res['province'] = $this->province;
        }

        if (null !== $this->provinceName) {
            $res['province_name'] = $this->provinceName;
        }

        if (null !== $this->ratingAverage) {
            $res['rating_average'] = $this->ratingAverage;
        }

        if (null !== $this->roomInfos) {
            if (\is_array($this->roomInfos)) {
                $res['room_infos'] = [];
                $n1 = 0;
                foreach ($this->roomInfos as $item1) {
                    $res['room_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->star) {
            $res['star'] = $this->star;
        }

        if (null !== $this->starRate) {
            $res['star_rate'] = $this->starRate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->themes) {
            $res['themes'] = $this->themes;
        }

        if (null !== $this->visaReminding) {
            $res['visa_reminding'] = $this->visaReminding;
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
        if (isset($map['block_room_type_information'])) {
            if (!empty($map['block_room_type_information'])) {
                $model->blockRoomTypeInformation = [];
                foreach ($map['block_room_type_information'] as $key1 => $value1) {
                    $model->blockRoomTypeInformation[$key1] = $value1;
                }
            }
        }

        if (isset($map['brand'])) {
            $model->brand = $map['brand'];
        }

        if (isset($map['brand_name'])) {
            $model->brandName = $map['brand_name'];
        }

        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }

        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }

        if (isset($map['country'])) {
            $model->country = $map['country'];
        }

        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['district'])) {
            $model->district = $map['district'];
        }

        if (isset($map['district_name'])) {
            $model->districtName = $map['district_name'];
        }

        if (isset($map['expand_info'])) {
            $model->expandInfo = expandInfo::fromMap($map['expand_info']);
        }

        if (isset($map['hotel_address'])) {
            $model->hotelAddress = $map['hotel_address'];
        }

        if (isset($map['hotel_en_address'])) {
            $model->hotelEnAddress = $map['hotel_en_address'];
        }

        if (isset($map['hotel_en_name'])) {
            $model->hotelEnName = $map['hotel_en_name'];
        }

        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }

        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }

        if (isset($map['hotel_open_time'])) {
            $model->hotelOpenTime = $map['hotel_open_time'];
        }

        if (isset($map['hotel_phones'])) {
            $model->hotelPhones = $map['hotel_phones'];
        }

        if (isset($map['hotel_policies'])) {
            $model->hotelPolicies = $map['hotel_policies'];
        }

        if (isset($map['hotelfax'])) {
            $model->hotelfax = $map['hotelfax'];
        }

        if (isset($map['hotelpics'])) {
            $model->hotelpics = $map['hotelpics'];
        }

        if (isset($map['imageinfos'])) {
            if (!empty($map['imageinfos'])) {
                $model->imageinfos = [];
                $n1 = 0;
                foreach ($map['imageinfos'] as $item1) {
                    $model->imageinfos[$n1] = imageinfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['invoice_provider_method'])) {
            $model->invoiceProviderMethod = $map['invoice_provider_method'];
        }

        if (isset($map['invoice_types'])) {
            if (!empty($map['invoice_types'])) {
                $model->invoiceTypes = [];
                $n1 = 0;
                foreach ($map['invoice_types'] as $item1) {
                    $model->invoiceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['province'])) {
            $model->province = $map['province'];
        }

        if (isset($map['province_name'])) {
            $model->provinceName = $map['province_name'];
        }

        if (isset($map['rating_average'])) {
            $model->ratingAverage = $map['rating_average'];
        }

        if (isset($map['room_infos'])) {
            if (!empty($map['room_infos'])) {
                $model->roomInfos = [];
                $n1 = 0;
                foreach ($map['room_infos'] as $item1) {
                    $model->roomInfos[$n1] = roomInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['star'])) {
            $model->star = $map['star'];
        }

        if (isset($map['star_rate'])) {
            $model->starRate = $map['star_rate'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['themes'])) {
            $model->themes = $map['themes'];
        }

        if (isset($map['visa_reminding'])) {
            $model->visaReminding = $map['visa_reminding'];
        }

        return $model;
    }
}
