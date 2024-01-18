<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changedJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changePassengerList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\contact;
use AlibabaCloud\Tea\Model;

class ChangeApplyRequest extends Model
{
    /**
     * @var changePassengerList[]
     */
    public $changePassengerList;

    /**
     * @var changedJourneys[]
     */
    public $changedJourneys;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @example 4988430***950
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example remark desc
     *
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'changePassengerList' => 'change_passenger_list',
        'changedJourneys'     => 'changed_journeys',
        'contact'             => 'contact',
        'orderNum'            => 'order_num',
        'remark'              => 'remark',
        'type'                => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changePassengerList) {
            $res['change_passenger_list'] = [];
            if (null !== $this->changePassengerList && \is_array($this->changePassengerList)) {
                $n = 0;
                foreach ($this->changePassengerList as $item) {
                    $res['change_passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changedJourneys) {
            $res['changed_journeys'] = [];
            if (null !== $this->changedJourneys && \is_array($this->changedJourneys)) {
                $n = 0;
                foreach ($this->changedJourneys as $item) {
                    $res['changed_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_passenger_list'])) {
            if (!empty($map['change_passenger_list'])) {
                $model->changePassengerList = [];
                $n                          = 0;
                foreach ($map['change_passenger_list'] as $item) {
                    $model->changePassengerList[$n++] = null !== $item ? changePassengerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['changed_journeys'])) {
            if (!empty($map['changed_journeys'])) {
                $model->changedJourneys = [];
                $n                      = 0;
                foreach ($map['changed_journeys'] as $item) {
                    $model->changedJourneys[$n++] = null !== $item ? changedJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['contact'])) {
            $model->contact = contact::fromMap($map['contact']);
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
