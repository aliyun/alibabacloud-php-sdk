<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderListQueryResponseBody\module\userAffiliateList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $applyShowId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var string
     */
    public $businessCategory;

    /**
     * @var string
     */
    public $cancelTime;

    /**
     * @var string
     */
    public $carInfo;

    /**
     * @var int
     */
    public $carLevel;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $costCenterNumber;

    /**
     * @var int
     */
    public $deptId;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string
     */
    public $driverConfirmTime;

    /**
     * @var float
     */
    public $estimatePrice;

    /**
     * @var string
     */
    public $fromAddress;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var bool
     */
    public $isSpecial;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var string
     */
    public $payTime;

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
    public $provider;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $realFromAddress;

    /**
     * @var string
     */
    public $realFromCityName;

    /**
     * @var string
     */
    public $realToAddress;

    /**
     * @var string
     */
    public $realToCityName;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string[]
     */
    public $specialTypes;

    /**
     * @var string
     */
    public $takenTime;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @var float
     */
    public $travelDistance;

    /**
     * @var userAffiliateList[]
     */
    public $userAffiliateList;

    /**
     * @var int
     */
    public $userConfirm;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId'              => 'apply_id',
        'applyShowId'          => 'apply_show_id',
        'btripTitle'           => 'btrip_title',
        'businessCategory'     => 'business_category',
        'cancelTime'           => 'cancel_time',
        'carInfo'              => 'car_info',
        'carLevel'             => 'car_level',
        'corpId'               => 'corp_id',
        'corpName'             => 'corp_name',
        'costCenterId'         => 'cost_center_id',
        'costCenterName'       => 'cost_center_name',
        'costCenterNumber'     => 'cost_center_number',
        'deptId'               => 'dept_id',
        'deptName'             => 'dept_name',
        'driverConfirmTime'    => 'driver_confirm_time',
        'estimatePrice'        => 'estimate_price',
        'fromAddress'          => 'from_address',
        'fromCityName'         => 'from_city_name',
        'gmtCreate'            => 'gmt_create',
        'gmtModified'          => 'gmt_modified',
        'id'                   => 'id',
        'invoiceId'            => 'invoice_id',
        'invoiceTitle'         => 'invoice_title',
        'isSpecial'            => 'is_special',
        'memo'                 => 'memo',
        'orderId'              => 'order_id',
        'orderStatus'          => 'order_status',
        'passengerName'        => 'passenger_name',
        'payTime'              => 'pay_time',
        'priceInfoList'        => 'price_info_list',
        'projectCode'          => 'project_code',
        'projectId'            => 'project_id',
        'projectTitle'         => 'project_title',
        'provider'             => 'provider',
        'publishTime'          => 'publish_time',
        'realFromAddress'      => 'real_from_address',
        'realFromCityName'     => 'real_from_city_name',
        'realToAddress'        => 'real_to_address',
        'realToCityName'       => 'real_to_city_name',
        'serviceType'          => 'service_type',
        'specialTypes'         => 'special_types',
        'takenTime'            => 'taken_time',
        'thirdpartApplyId'     => 'thirdpart_apply_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'toAddress'            => 'to_address',
        'toCityName'           => 'to_city_name',
        'travelDistance'       => 'travel_distance',
        'userAffiliateList'    => 'user_affiliate_list',
        'userConfirm'          => 'user_confirm',
        'userId'               => 'user_id',
        'userName'             => 'user_name',
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
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }
        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }
        if (null !== $this->businessCategory) {
            $res['business_category'] = $this->businessCategory;
        }
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }
        if (null !== $this->carInfo) {
            $res['car_info'] = $this->carInfo;
        }
        if (null !== $this->carLevel) {
            $res['car_level'] = $this->carLevel;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->driverConfirmTime) {
            $res['driver_confirm_time'] = $this->driverConfirmTime;
        }
        if (null !== $this->estimatePrice) {
            $res['estimate_price'] = $this->estimatePrice;
        }
        if (null !== $this->fromAddress) {
            $res['from_address'] = $this->fromAddress;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->isSpecial) {
            $res['is_special'] = $this->isSpecial;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
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
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->publishTime) {
            $res['publish_time'] = $this->publishTime;
        }
        if (null !== $this->realFromAddress) {
            $res['real_from_address'] = $this->realFromAddress;
        }
        if (null !== $this->realFromCityName) {
            $res['real_from_city_name'] = $this->realFromCityName;
        }
        if (null !== $this->realToAddress) {
            $res['real_to_address'] = $this->realToAddress;
        }
        if (null !== $this->realToCityName) {
            $res['real_to_city_name'] = $this->realToCityName;
        }
        if (null !== $this->serviceType) {
            $res['service_type'] = $this->serviceType;
        }
        if (null !== $this->specialTypes) {
            $res['special_types'] = $this->specialTypes;
        }
        if (null !== $this->takenTime) {
            $res['taken_time'] = $this->takenTime;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->toAddress) {
            $res['to_address'] = $this->toAddress;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->travelDistance) {
            $res['travel_distance'] = $this->travelDistance;
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
        if (null !== $this->userConfirm) {
            $res['user_confirm'] = $this->userConfirm;
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
        if (isset($map['apply_show_id'])) {
            $model->applyShowId = $map['apply_show_id'];
        }
        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }
        if (isset($map['business_category'])) {
            $model->businessCategory = $map['business_category'];
        }
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }
        if (isset($map['car_info'])) {
            $model->carInfo = $map['car_info'];
        }
        if (isset($map['car_level'])) {
            $model->carLevel = $map['car_level'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['cost_center_number'])) {
            $model->costCenterNumber = $map['cost_center_number'];
        }
        if (isset($map['dept_id'])) {
            $model->deptId = $map['dept_id'];
        }
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }
        if (isset($map['driver_confirm_time'])) {
            $model->driverConfirmTime = $map['driver_confirm_time'];
        }
        if (isset($map['estimate_price'])) {
            $model->estimatePrice = $map['estimate_price'];
        }
        if (isset($map['from_address'])) {
            $model->fromAddress = $map['from_address'];
        }
        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['is_special'])) {
            $model->isSpecial = $map['is_special'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
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
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['publish_time'])) {
            $model->publishTime = $map['publish_time'];
        }
        if (isset($map['real_from_address'])) {
            $model->realFromAddress = $map['real_from_address'];
        }
        if (isset($map['real_from_city_name'])) {
            $model->realFromCityName = $map['real_from_city_name'];
        }
        if (isset($map['real_to_address'])) {
            $model->realToAddress = $map['real_to_address'];
        }
        if (isset($map['real_to_city_name'])) {
            $model->realToCityName = $map['real_to_city_name'];
        }
        if (isset($map['service_type'])) {
            $model->serviceType = $map['service_type'];
        }
        if (isset($map['special_types'])) {
            if (!empty($map['special_types'])) {
                $model->specialTypes = $map['special_types'];
            }
        }
        if (isset($map['taken_time'])) {
            $model->takenTime = $map['taken_time'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if (isset($map['to_address'])) {
            $model->toAddress = $map['to_address'];
        }
        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }
        if (isset($map['travel_distance'])) {
            $model->travelDistance = $map['travel_distance'];
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
        if (isset($map['user_confirm'])) {
            $model->userConfirm = $map['user_confirm'];
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
