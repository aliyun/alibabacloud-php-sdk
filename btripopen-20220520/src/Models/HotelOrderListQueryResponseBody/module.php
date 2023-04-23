<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\invoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module\userAffiliateList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 22678
     *
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2022-05-15T22:27Z
     *
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
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-05-15T22:27Z
     *
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
     * @example 11
     *
     * @var int
     */
    public $hotelSupportVatInvoiceType;

    /**
     * @example 13764
     *
     * @var int
     */
    public $id;

    /**
     * @var invoice
     */
    public $invoice;

    /**
     * @example 4
     *
     * @var int
     */
    public $night;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @example 1
     *
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
     * @example CS-PROJECTCODE
     *
     * @var string
     */
    public $projectCode;

    /**
     * @example 13631
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @example 4
     *
     * @var int
     */
    public $roomNum;

    /**
     * @var string
     */
    public $roomType;

    /**
     * @example CS-THIRDAPPLY
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example CS-ITINEARY
     *
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @example CS-THIRDPROJECT
     *
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
        'applyId'                    => 'apply_id',
        'btripTitle'                 => 'btrip_title',
        'checkIn'                    => 'check_in',
        'checkOut'                   => 'check_out',
        'city'                       => 'city',
        'contactName'                => 'contact_name',
        'corpId'                     => 'corp_id',
        'corpName'                   => 'corp_name',
        'costCenter'                 => 'cost_center',
        'departId'                   => 'depart_id',
        'departName'                 => 'depart_name',
        'extendField'                => 'extend_field',
        'gmtCreate'                  => 'gmt_create',
        'gmtModified'                => 'gmt_modified',
        'guest'                      => 'guest',
        'hotelName'                  => 'hotel_name',
        'hotelSupportVatInvoiceType' => 'hotel_support_vat_invoice_type',
        'id'                         => 'id',
        'invoice'                    => 'invoice',
        'night'                      => 'night',
        'orderStatus'                => 'order_status',
        'orderStatusDesc'            => 'order_status_desc',
        'orderType'                  => 'order_type',
        'orderTypeDesc'              => 'order_type_desc',
        'priceInfoList'              => 'price_info_list',
        'projectCode'                => 'project_code',
        'projectId'                  => 'project_id',
        'projectTitle'               => 'project_title',
        'roomNum'                    => 'room_num',
        'roomType'                   => 'room_type',
        'thirdpartApplyId'           => 'thirdpart_apply_id',
        'thirdpartItineraryId'       => 'thirdpart_itinerary_id',
        'thirdpartProjectId'         => 'thirdpart_project_id',
        'userAffiliateList'          => 'user_affiliate_list',
        'userId'                     => 'user_id',
        'userName'                   => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
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
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toMap() : null;
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
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toMap() : null;
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
            $res['price_info_list'] = [];
            if (null !== $this->priceInfoList && \is_array($this->priceInfoList)) {
                $n = 0;
                foreach ($this->priceInfoList as $item) {
                    $res['price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->thirdpartProjectId) {
            $res['thirdpart_project_id'] = $this->thirdpartProjectId;
        }
        if (null !== $this->userAffiliateList) {
            $res['user_affiliate_list'] = [];
            if (null !== $this->userAffiliateList && \is_array($this->userAffiliateList)) {
                $n = 0;
                foreach ($this->userAffiliateList as $item) {
                    $res['user_affiliate_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
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
                $n                    = 0;
                foreach ($map['price_info_list'] as $item) {
                    $model->priceInfoList[$n++] = null !== $item ? priceInfoList::fromMap($item) : $item;
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
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
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
                $n                        = 0;
                foreach ($map['user_affiliate_list'] as $item) {
                    $model->userAffiliateList[$n++] = null !== $item ? userAffiliateList::fromMap($item) : $item;
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
