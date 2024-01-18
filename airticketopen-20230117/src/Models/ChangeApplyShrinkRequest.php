<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class ChangeApplyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $changePassengerListShrink;

    /**
     * @var string
     */
    public $changedJourneysShrink;

    /**
     * @var string
     */
    public $contactShrink;

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
        'changePassengerListShrink' => 'change_passenger_list',
        'changedJourneysShrink'     => 'changed_journeys',
        'contactShrink'             => 'contact',
        'orderNum'                  => 'order_num',
        'remark'                    => 'remark',
        'type'                      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changePassengerListShrink) {
            $res['change_passenger_list'] = $this->changePassengerListShrink;
        }
        if (null !== $this->changedJourneysShrink) {
            $res['changed_journeys'] = $this->changedJourneysShrink;
        }
        if (null !== $this->contactShrink) {
            $res['contact'] = $this->contactShrink;
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
     * @return ChangeApplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_passenger_list'])) {
            $model->changePassengerListShrink = $map['change_passenger_list'];
        }
        if (isset($map['changed_journeys'])) {
            $model->changedJourneysShrink = $map['changed_journeys'];
        }
        if (isset($map['contact'])) {
            $model->contactShrink = $map['contact'];
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
