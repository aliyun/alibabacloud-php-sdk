<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module\insureInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module\invoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module\userAffiliateList;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $arrAirport;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityAdCode;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var string
     */
    public $cabinClass;

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
    public $depAirport;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depCityAdCode;

    /**
     * @var string
     */
    public $depDate;

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
    public $discount;

    /**
     * @var string
     */
    public $flightNo;

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
     * @var insureInfoList[]
     */
    public $insureInfoList;

    /**
     * @var invoice
     */
    public $invoice;

    /**
     * @var int
     */
    public $passengerCount;

    /**
     * @var string
     */
    public $passengerName;

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
     * @var string
     */
    public $retDate;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdPartProjectId;

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
     * @var int
     */
    public $tripType;

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
        'arrAirport' => 'arr_airport',
        'arrCity' => 'arr_city',
        'arrCityAdCode' => 'arr_city_ad_code',
        'btripTitle' => 'btrip_title',
        'cabinClass' => 'cabin_class',
        'contactName' => 'contact_name',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'costCenter' => 'cost_center',
        'depAirport' => 'dep_airport',
        'depCity' => 'dep_city',
        'depCityAdCode' => 'dep_city_ad_code',
        'depDate' => 'dep_date',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'discount' => 'discount',
        'flightNo' => 'flight_no',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'id' => 'id',
        'insureInfoList' => 'insure_info_list',
        'invoice' => 'invoice',
        'passengerCount' => 'passenger_count',
        'passengerName' => 'passenger_name',
        'priceInfoList' => 'price_info_list',
        'projectCode' => 'project_code',
        'projectId' => 'project_id',
        'projectTitle' => 'project_title',
        'retDate' => 'ret_date',
        'status' => 'status',
        'thirdPartProjectId' => 'third_part_project_id',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'tripType' => 'trip_type',
        'userAffiliateList' => 'user_affiliate_list',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->costCenter) {
            $this->costCenter->validate();
        }
        if (\is_array($this->insureInfoList)) {
            Model::validateArray($this->insureInfoList);
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

        if (null !== $this->arrAirport) {
            $res['arr_airport'] = $this->arrAirport;
        }

        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->arrCityAdCode) {
            $res['arr_city_ad_code'] = $this->arrCityAdCode;
        }

        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }

        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
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

        if (null !== $this->depAirport) {
            $res['dep_airport'] = $this->depAirport;
        }

        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }

        if (null !== $this->depCityAdCode) {
            $res['dep_city_ad_code'] = $this->depCityAdCode;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }

        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
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

        if (null !== $this->insureInfoList) {
            if (\is_array($this->insureInfoList)) {
                $res['insure_info_list'] = [];
                $n1 = 0;
                foreach ($this->insureInfoList as $item1) {
                    $res['insure_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toArray($noStream) : $this->invoice;
        }

        if (null !== $this->passengerCount) {
            $res['passenger_count'] = $this->passengerCount;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
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

        if (null !== $this->retDate) {
            $res['ret_date'] = $this->retDate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thirdPartProjectId) {
            $res['third_part_project_id'] = $this->thirdPartProjectId;
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

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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

        if (isset($map['arr_airport'])) {
            $model->arrAirport = $map['arr_airport'];
        }

        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }

        if (isset($map['arr_city_ad_code'])) {
            $model->arrCityAdCode = $map['arr_city_ad_code'];
        }

        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }

        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
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

        if (isset($map['dep_airport'])) {
            $model->depAirport = $map['dep_airport'];
        }

        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }

        if (isset($map['dep_city_ad_code'])) {
            $model->depCityAdCode = $map['dep_city_ad_code'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }

        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
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

        if (isset($map['insure_info_list'])) {
            if (!empty($map['insure_info_list'])) {
                $model->insureInfoList = [];
                $n1 = 0;
                foreach ($map['insure_info_list'] as $item1) {
                    $model->insureInfoList[$n1++] = insureInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['invoice'])) {
            $model->invoice = invoice::fromMap($map['invoice']);
        }

        if (isset($map['passenger_count'])) {
            $model->passengerCount = $map['passenger_count'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
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

        if (isset($map['ret_date'])) {
            $model->retDate = $map['ret_date'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['third_part_project_id'])) {
            $model->thirdPartProjectId = $map['third_part_project_id'];
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

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
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
