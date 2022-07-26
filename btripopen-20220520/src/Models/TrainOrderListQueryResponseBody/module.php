<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody\module\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody\module\invoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody\module\priceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderListQueryResponseBody\module\userAffiliateList;
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
    public $arrCity;

    /**
     * @var string
     */
    public $arrStation;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $btripTitle;

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
    public $depCity;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @var string
     */
    public $depTime;

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
     * @var invoice
     */
    public $invoice;

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
    public $riderName;

    /**
     * @var string
     */
    public $runTime;

    /**
     * @var string
     */
    public $seatType;

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
    public $thirdpartItineraryId;

    /**
     * @var int
     */
    public $ticketCount;

    /**
     * @var string
     */
    public $ticketNo12306;

    /**
     * @var string
     */
    public $trainNumber;

    /**
     * @var string
     */
    public $trainType;

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
        'applyId'              => 'apply_id',
        'arrCity'              => 'arr_city',
        'arrStation'           => 'arr_station',
        'arrTime'              => 'arr_time',
        'btripTitle'           => 'btrip_title',
        'contactName'          => 'contact_name',
        'corpId'               => 'corp_id',
        'corpName'             => 'corp_name',
        'costCenter'           => 'cost_center',
        'depCity'              => 'dep_city',
        'depStation'           => 'dep_station',
        'depTime'              => 'dep_time',
        'departId'             => 'depart_id',
        'departName'           => 'depart_name',
        'gmtCreate'            => 'gmt_create',
        'gmtModified'          => 'gmt_modified',
        'id'                   => 'id',
        'invoice'              => 'invoice',
        'priceInfoList'        => 'price_info_list',
        'projectCode'          => 'project_code',
        'projectId'            => 'project_id',
        'projectTitle'         => 'project_title',
        'riderName'            => 'rider_name',
        'runTime'              => 'run_time',
        'seatType'             => 'seat_type',
        'status'               => 'status',
        'thirdPartProjectId'   => 'third_part_project_id',
        'thirdpartApplyId'     => 'thirdpart_apply_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'ticketCount'          => 'ticket_count',
        'ticketNo12306'        => 'ticket_no12306',
        'trainNumber'          => 'train_number',
        'trainType'            => 'train_type',
        'userAffiliateList'    => 'user_affiliate_list',
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
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
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
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
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
        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toMap() : null;
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
        if (null !== $this->riderName) {
            $res['rider_name'] = $this->riderName;
        }
        if (null !== $this->runTime) {
            $res['run_time'] = $this->runTime;
        }
        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
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
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->ticketCount) {
            $res['ticket_count'] = $this->ticketCount;
        }
        if (null !== $this->ticketNo12306) {
            $res['ticket_no12306'] = $this->ticketNo12306;
        }
        if (null !== $this->trainNumber) {
            $res['train_number'] = $this->trainNumber;
        }
        if (null !== $this->trainType) {
            $res['train_type'] = $this->trainType;
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
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
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
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
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
        if (isset($map['invoice'])) {
            $model->invoice = invoice::fromMap($map['invoice']);
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
        if (isset($map['rider_name'])) {
            $model->riderName = $map['rider_name'];
        }
        if (isset($map['run_time'])) {
            $model->runTime = $map['run_time'];
        }
        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
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
        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if (isset($map['ticket_count'])) {
            $model->ticketCount = $map['ticket_count'];
        }
        if (isset($map['ticket_no12306'])) {
            $model->ticketNo12306 = $map['ticket_no12306'];
        }
        if (isset($map['train_number'])) {
            $model->trainNumber = $map['train_number'];
        }
        if (isset($map['train_type'])) {
            $model->trainType = $map['train_type'];
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
