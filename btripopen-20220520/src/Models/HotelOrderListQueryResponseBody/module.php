<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\invoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\userAffiliateList;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityAdCode;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var costCenter
     */
    public $costCenter;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var string
     */
    public $extendField;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $guest;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var int
     */
    public $hotelSupportVatInvoiceType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var invoice
     */
    public $invoice;

    /**
     * @var int
     */
    public $night;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $orderTypeDesc;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var int
     */
    public $roomNum;

    /**
     * @var string
     */
    public $roomType;

    /**
     * @var string
     */
    public $supplier;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @var string
     */
    public $thirdpartProjectId;

    /**
     * @var userAffiliateList[]
     */
    public $userAffiliateList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId' => 'apply_id',
        'btripTitle' => 'btrip_title',
        'category' => 'category',
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'city' => 'city',
        'cityAdCode' => 'city_ad_code',
        'contactName' => 'contact_name',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'costCenter' => 'cost_center',
        'countryCode' => 'country_code',
        'countryName' => 'country_name',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'extendField' => 'extend_field',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'guest' => 'guest',
        'hotelName' => 'hotel_name',
        'hotelSupportVatInvoiceType' => 'hotel_support_vat_invoice_type',
        'id' => 'id',
        'invoice' => 'invoice',
        'night' => 'night',
        'orderStatus' => 'order_status',
        'orderStatusDesc' => 'order_status_desc',
        'orderType' => 'order_type',
        'orderTypeDesc' => 'order_type_desc',
        'priceInfoList' => 'price_info_list',
        'projectCode' => 'project_code',
        'projectId' => 'project_id',
        'projectTitle' => 'project_title',
        'roomNum' => 'room_num',
        'roomType' => 'room_type',
        'supplier' => 'supplier',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'thirdpartProjectId' => 'thirdpart_project_id',
        'userAffiliateList' => 'user_affiliate_list',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->costCenter) {
            $this->costCenter->validate();
        }
        if (null !== $this->invoice) {
            $this->invoice->validate();
        }
        if (\is_array($this->priceInfoList)) {
            Model::validateArray($this->priceInfoList);
        }
        if (\is_array($this->userAffiliateList)) {
            Model::validateArray($this->userAffiliateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }

        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }

        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->cityAdCode) {
            $res['city_ad_code'] = $this->cityAdCode;
        }

        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toArray($noStream) : $this->costCenter;
        }

        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }

        if (null !== $this->countryName) {
            $res['country_name'] = $this->countryName;
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }

        if (null !== $this->extendField) {
            $res['extend_field'] = $this->extendField;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }

        if (null !== $this->guest) {
            $res['guest'] = $this->guest;
        }

        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }

        if (null !== $this->hotelSupportVatInvoiceType) {
            $res['hotel_support_vat_invoice_type'] = $this->hotelSupportVatInvoiceType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toArray($noStream) : $this->invoice;
        }

        if (null !== $this->night) {
            $res['night'] = $this->night;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }

        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }

        if (null !== $this->orderTypeDesc) {
            $res['order_type_desc'] = $this->orderTypeDesc;
        }

        if (null !== $this->priceInfoList) {
            if (\is_array($this->priceInfoList)) {
                $res['price_info_list'] = [];
                $n1 = 0;
                foreach ($this->priceInfoList as $item1) {
                    $res['price_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }

        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }

        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }

        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }

        if (null !== $this->roomType) {
            $res['room_type'] = $this->roomType;
        }

        if (null !== $this->supplier) {
            $res['supplier'] = $this->supplier;
        }

        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }

        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }

        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }

        if (null !== $this->thirdpartProjectId) {
            $res['thirdpart_project_id'] = $this->thirdpartProjectId;
        }

        if (null !== $this->userAffiliateList) {
            if (\is_array($this->userAffiliateList)) {
                $res['user_affiliate_list'] = [];
                $n1 = 0;
                foreach ($this->userAffiliateList as $item1) {
                    $res['user_affiliate_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }

        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }

        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['city_ad_code'])) {
            $model->cityAdCode = $map['city_ad_code'];
        }

        if (isset($map['contact_name'])) {
            $model->contactName = $map['contact_name'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['cost_center'])) {
            $model->costCenter = costCenter::fromMap($map['cost_center']);
        }

        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }

        if (isset($map['country_name'])) {
            $model->countryName = $map['country_name'];
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }

        if (isset($map['extend_field'])) {
            $model->extendField = $map['extend_field'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }

        if (isset($map['guest'])) {
            $model->guest = $map['guest'];
        }

        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }

        if (isset($map['hotel_support_vat_invoice_type'])) {
            $model->hotelSupportVatInvoiceType = $map['hotel_support_vat_invoice_type'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['invoice'])) {
            $model->invoice = invoice::fromMap($map['invoice']);
        }

        if (isset($map['night'])) {
            $model->night = $map['night'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['order_status_desc'])) {
            $model->orderStatusDesc = $map['order_status_desc'];
        }

        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }

        if (isset($map['order_type_desc'])) {
            $model->orderTypeDesc = $map['order_type_desc'];
        }

        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n1 = 0;
                foreach ($map['price_info_list'] as $item1) {
                    $model->priceInfoList[$n1++] = priceInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }

        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }

        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }

        if (isset($map['room_num'])) {
            $model->roomNum = $map['room_num'];
        }

        if (isset($map['room_type'])) {
            $model->roomType = $map['room_type'];
        }

        if (isset($map['supplier'])) {
            $model->supplier = $map['supplier'];
        }

        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }

        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }

        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }

        if (isset($map['thirdpart_project_id'])) {
            $model->thirdpartProjectId = $map['thirdpart_project_id'];
        }

        if (isset($map['user_affiliate_list'])) {
            if (!empty($map['user_affiliate_list'])) {
                $model->userAffiliateList = [];
                $n1 = 0;
                foreach ($map['user_affiliate_list'] as $item1) {
                    $model->userAffiliateList[$n1++] = userAffiliateList::fromMap($item1);
                }
            }
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
