<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\approverList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList\travelerStandard;

class applyList extends Model
{
    /**
     * @var approverList[]
     */
    public $approverList;

    /**
     * @var string
     */
    public $businessType;

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
     * @var itineraryList[]
     */
    public $itineraryList;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $relatedThirdApplyId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
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
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'approverList' => 'approver_list',
        'businessType' => 'business_type',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'itineraryList' => 'itinerary_list',
        'orderId' => 'order_id',
        'relatedThirdApplyId' => 'related_third_apply_id',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'thirdpartId' => 'thirdpart_id',
        'travelerStandard' => 'traveler_standard',
        'tripCause' => 'trip_cause',
        'tripTitle' => 'trip_title',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (\is_array($this->approverList)) {
            Model::validateArray($this->approverList);
        }
        if (\is_array($this->itineraryList)) {
            Model::validateArray($this->itineraryList);
        }
        if (\is_array($this->travelerStandard)) {
            Model::validateArray($this->travelerStandard);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approverList) {
            if (\is_array($this->approverList)) {
                $res['approver_list'] = [];
                $n1 = 0;
                foreach ($this->approverList as $item1) {
                    $res['approver_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->businessType) {
            $res['business_type'] = $this->businessType;
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
            if (\is_array($this->itineraryList)) {
                $res['itinerary_list'] = [];
                $n1 = 0;
                foreach ($this->itineraryList as $item1) {
                    $res['itinerary_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->relatedThirdApplyId) {
            $res['related_third_apply_id'] = $this->relatedThirdApplyId;
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
            if (\is_array($this->travelerStandard)) {
                $res['traveler_standard'] = [];
                $n1 = 0;
                foreach ($this->travelerStandard as $item1) {
                    $res['traveler_standard'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approver_list'])) {
            if (!empty($map['approver_list'])) {
                $model->approverList = [];
                $n1 = 0;
                foreach ($map['approver_list'] as $item1) {
                    $model->approverList[$n1] = approverList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['business_type'])) {
            $model->businessType = $map['business_type'];
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
                $n1 = 0;
                foreach ($map['itinerary_list'] as $item1) {
                    $model->itineraryList[$n1] = itineraryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['related_third_apply_id'])) {
            $model->relatedThirdApplyId = $map['related_third_apply_id'];
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
                $n1 = 0;
                foreach ($map['traveler_standard'] as $item1) {
                    $model->travelerStandard[$n1] = travelerStandard::fromMap($item1);
                    ++$n1;
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
