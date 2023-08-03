<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\approverList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\externalTravelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\itinerarySetList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\travelerList;
use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @example 201710111505000464651
     *
     * @var string
     */
    public $applyShowId;

    /**
     * @var approverList[]
     */
    public $approverList;

    /**
     * @example corp1
     *
     * @var string
     */
    public $corpId;

    /**
     * @example abc
     *
     * @var string
     */
    public $corpName;

    /**
     * @example depart1
     *
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var externalTravelerList[]
     */
    public $externalTravelerList;

    /**
     * @example abc1234
     *
     * @var string
     */
    public $flowCode;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1476
     *
     * @var int
     */
    public $id;

    /**
     * @var itineraryList[]
     */
    public $itineraryList;

    /**
     * @example 0
     *
     * @var int
     */
    public $itineraryRule;

    /**
     * @var itinerarySetList[]
     */
    public $itinerarySetList;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @example abc
     *
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @example abc
     *
     * @var string
     */
    public $thirdpartId;

    /**
     * @var travelerList[]
     */
    public $travelerList;

    /**
     * @var string
     */
    public $tripCause;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripDay;

    /**
     * @var string
     */
    public $tripTitle;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @example abc
     *
     * @var string
     */
    public $unionNo;

    /**
     * @example user1
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyShowId'          => 'apply_show_id',
        'approverList'         => 'approver_list',
        'corpId'               => 'corp_id',
        'corpName'             => 'corp_name',
        'departId'             => 'depart_id',
        'departName'           => 'depart_name',
        'externalTravelerList' => 'external_traveler_list',
        'flowCode'             => 'flow_code',
        'gmtCreate'            => 'gmt_create',
        'gmtModified'          => 'gmt_modified',
        'id'                   => 'id',
        'itineraryList'        => 'itinerary_list',
        'itineraryRule'        => 'itinerary_rule',
        'itinerarySetList'     => 'itinerary_set_list',
        'jobNo'                => 'job_no',
        'status'               => 'status',
        'statusDesc'           => 'status_desc',
        'thirdpartBusinessId'  => 'thirdpart_business_id',
        'thirdpartId'          => 'thirdpart_id',
        'travelerList'         => 'traveler_list',
        'tripCause'            => 'trip_cause',
        'tripDay'              => 'trip_day',
        'tripTitle'            => 'trip_title',
        'type'                 => 'type',
        'unionNo'              => 'union_no',
        'userId'               => 'user_id',
        'userName'             => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }
        if (null !== $this->approverList) {
            $res['approver_list'] = [];
            if (null !== $this->approverList && \is_array($this->approverList)) {
                $n = 0;
                foreach ($this->approverList as $item) {
                    $res['approver_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        if (null !== $this->externalTravelerList) {
            $res['external_traveler_list'] = [];
            if (null !== $this->externalTravelerList && \is_array($this->externalTravelerList)) {
                $n = 0;
                foreach ($this->externalTravelerList as $item) {
                    $res['external_traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flowCode) {
            $res['flow_code'] = $this->flowCode;
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
        if (null !== $this->itineraryList) {
            $res['itinerary_list'] = [];
            if (null !== $this->itineraryList && \is_array($this->itineraryList)) {
                $n = 0;
                foreach ($this->itineraryList as $item) {
                    $res['itinerary_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itineraryRule) {
            $res['itinerary_rule'] = $this->itineraryRule;
        }
        if (null !== $this->itinerarySetList) {
            $res['itinerary_set_list'] = [];
            if (null !== $this->itinerarySetList && \is_array($this->itinerarySetList)) {
                $n = 0;
                foreach ($this->itinerarySetList as $item) {
                    $res['itinerary_set_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }
        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->travelerList) {
            $res['traveler_list'] = [];
            if (null !== $this->travelerList && \is_array($this->travelerList)) {
                $n = 0;
                foreach ($this->travelerList as $item) {
                    $res['traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }
        if (null !== $this->tripDay) {
            $res['trip_day'] = $this->tripDay;
        }
        if (null !== $this->tripTitle) {
            $res['trip_title'] = $this->tripTitle;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unionNo) {
            $res['union_no'] = $this->unionNo;
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
     * @return moduleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_show_id'])) {
            $model->applyShowId = $map['apply_show_id'];
        }
        if (isset($map['approver_list'])) {
            if (!empty($map['approver_list'])) {
                $model->approverList = [];
                $n                   = 0;
                foreach ($map['approver_list'] as $item) {
                    $model->approverList[$n++] = null !== $item ? approverList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }
        if (isset($map['external_traveler_list'])) {
            if (!empty($map['external_traveler_list'])) {
                $model->externalTravelerList = [];
                $n                           = 0;
                foreach ($map['external_traveler_list'] as $item) {
                    $model->externalTravelerList[$n++] = null !== $item ? externalTravelerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flow_code'])) {
            $model->flowCode = $map['flow_code'];
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
        if (isset($map['itinerary_list'])) {
            if (!empty($map['itinerary_list'])) {
                $model->itineraryList = [];
                $n                    = 0;
                foreach ($map['itinerary_list'] as $item) {
                    $model->itineraryList[$n++] = null !== $item ? itineraryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['itinerary_rule'])) {
            $model->itineraryRule = $map['itinerary_rule'];
        }
        if (isset($map['itinerary_set_list'])) {
            if (!empty($map['itinerary_set_list'])) {
                $model->itinerarySetList = [];
                $n                       = 0;
                foreach ($map['itinerary_set_list'] as $item) {
                    $model->itinerarySetList[$n++] = null !== $item ? itinerarySetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
        }
        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if (isset($map['traveler_list'])) {
            if (!empty($map['traveler_list'])) {
                $model->travelerList = [];
                $n                   = 0;
                foreach ($map['traveler_list'] as $item) {
                    $model->travelerList[$n++] = null !== $item ? travelerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['trip_cause'])) {
            $model->tripCause = $map['trip_cause'];
        }
        if (isset($map['trip_day'])) {
            $model->tripDay = $map['trip_day'];
        }
        if (isset($map['trip_title'])) {
            $model->tripTitle = $map['trip_title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['union_no'])) {
            $model->unionNo = $map['union_no'];
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
