<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changedJourneys;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\changePassengerList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest\contact;

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
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'changePassengerList' => 'change_passenger_list',
        'changedJourneys' => 'changed_journeys',
        'contact' => 'contact',
        'orderNum' => 'order_num',
        'remark' => 'remark',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->changePassengerList)) {
            Model::validateArray($this->changePassengerList);
        }
        if (\is_array($this->changedJourneys)) {
            Model::validateArray($this->changedJourneys);
        }
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changePassengerList) {
            if (\is_array($this->changePassengerList)) {
                $res['change_passenger_list'] = [];
                $n1 = 0;
                foreach ($this->changePassengerList as $item1) {
                    $res['change_passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changedJourneys) {
            if (\is_array($this->changedJourneys)) {
                $res['changed_journeys'] = [];
                $n1 = 0;
                foreach ($this->changedJourneys as $item1) {
                    $res['changed_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_passenger_list'])) {
            if (!empty($map['change_passenger_list'])) {
                $model->changePassengerList = [];
                $n1 = 0;
                foreach ($map['change_passenger_list'] as $item1) {
                    $model->changePassengerList[$n1] = changePassengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['changed_journeys'])) {
            if (!empty($map['changed_journeys'])) {
                $model->changedJourneys = [];
                $n1 = 0;
                foreach ($map['changed_journeys'] as $item1) {
                    $model->changedJourneys[$n1] = changedJourneys::fromMap($item1);
                    ++$n1;
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
