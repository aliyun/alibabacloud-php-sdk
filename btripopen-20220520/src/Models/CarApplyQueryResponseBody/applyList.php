<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\approverList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\travelerStandard;
use AlibabaCloud\Tea\Model;

class applyList extends Model
{
    /**
     * @var approverList[]
     */
    public $approverList;

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
     * @example 2021-03-18T20:26Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-03-18T20:26Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var itineraryList[]
     */
    public $itineraryList;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @example 1
     *
     * @var string
     */
    public $thirdpartId;

    /**
     * @var travelerStandard[]
     */
    public $travelerStandard;

    /**
     * @var string
     */
    public $tripCause;

    /**
     * @var string
     */
    public $tripTitle;

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
        'approverList'     => 'approver_list',
        'departId'         => 'depart_id',
        'departName'       => 'depart_name',
        'gmtCreate'        => 'gmt_create',
        'gmtModified'      => 'gmt_modified',
        'itineraryList'    => 'itinerary_list',
        'status'           => 'status',
        'statusDesc'       => 'status_desc',
        'thirdpartId'      => 'thirdpart_id',
        'travelerStandard' => 'traveler_standard',
        'tripCause'        => 'trip_cause',
        'tripTitle'        => 'trip_title',
        'userId'           => 'user_id',
        'userName'         => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approverList) {
            $res['approver_list'] = [];
            if (null !== $this->approverList && \is_array($this->approverList)) {
                $n = 0;
                foreach ($this->approverList as $item) {
                    $res['approver_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->itineraryList) {
            $res['itinerary_list'] = [];
            if (null !== $this->itineraryList && \is_array($this->itineraryList)) {
                $n = 0;
                foreach ($this->itineraryList as $item) {
                    $res['itinerary_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->travelerStandard) {
            $res['traveler_standard'] = [];
            if (null !== $this->travelerStandard && \is_array($this->travelerStandard)) {
                $n = 0;
                foreach ($this->travelerStandard as $item) {
                    $res['traveler_standard'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }
        if (null !== $this->tripTitle) {
            $res['trip_title'] = $this->tripTitle;
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
     * @return applyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approver_list'])) {
            if (!empty($map['approver_list'])) {
                $model->approverList = [];
                $n                   = 0;
                foreach ($map['approver_list'] as $item) {
                    $model->approverList[$n++] = null !== $item ? approverList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['itinerary_list'])) {
            if (!empty($map['itinerary_list'])) {
                $model->itineraryList = [];
                $n                    = 0;
                foreach ($map['itinerary_list'] as $item) {
                    $model->itineraryList[$n++] = null !== $item ? itineraryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if (isset($map['traveler_standard'])) {
            if (!empty($map['traveler_standard'])) {
                $model->travelerStandard = [];
                $n                       = 0;
                foreach ($map['traveler_standard'] as $item) {
                    $model->travelerStandard[$n++] = null !== $item ? travelerStandard::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['trip_cause'])) {
            $model->tripCause = $map['trip_cause'];
        }
        if (isset($map['trip_title'])) {
            $model->tripTitle = $map['trip_title'];
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
