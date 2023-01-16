<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListRequest\travelerInfoList;
use AlibabaCloud\Tea\Model;

class TicketChangingFlightListRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $isVoluntary;

    /**
     * @var travelerInfoList[]
     */
    public $travelerInfoList;
    protected $_name = [
        'arrCity'          => 'arr_city',
        'depCity'          => 'dep_city',
        'depDate'          => 'dep_date',
        'disOrderId'       => 'dis_order_id',
        'isVoluntary'      => 'is_voluntary',
        'travelerInfoList' => 'traveler_info_list',
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
        if (null !== $this->travelerInfoList) {
            $res['traveler_info_list'] = [];
            if (null !== $this->travelerInfoList && \is_array($this->travelerInfoList)) {
                $n = 0;
                foreach ($this->travelerInfoList as $item) {
                    $res['traveler_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TicketChangingFlightListRequest
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
            if (!empty($map['traveler_info_list'])) {
                $model->travelerInfoList = [];
                $n                       = 0;
                foreach ($map['traveler_info_list'] as $item) {
                    $model->travelerInfoList[$n++] = null !== $item ? travelerInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
