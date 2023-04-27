<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TicketChangingFlightListShrinkRequest extends Model
{
    /**
     * @example BJS
     *
     * @var string
     */
    public $arrCity;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCity;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $depDate;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $travelerInfoListShrink;
    protected $_name = [
        'arrCity'                => 'arr_city',
        'depCity'                => 'dep_city',
        'depDate'                => 'dep_date',
        'disOrderId'             => 'dis_order_id',
        'isVoluntary'            => 'is_voluntary',
        'travelerInfoListShrink' => 'traveler_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }
        if (null !== $this->travelerInfoListShrink) {
            $res['traveler_info_list'] = $this->travelerInfoListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TicketChangingFlightListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }
        if (isset($map['traveler_info_list'])) {
            $model->travelerInfoListShrink = $map['traveler_info_list'];
        }

        return $model;
    }
}
