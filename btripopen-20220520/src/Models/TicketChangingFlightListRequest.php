<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListRequest\travelerInfoList;

class TicketChangingFlightListRequest extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var travelerInfoList[]
     */
    public $travelerInfoList;
    protected $_name = [
        'arrCity' => 'arr_city',
        'depCity' => 'dep_city',
        'depDate' => 'dep_date',
        'disOrderId' => 'dis_order_id',
        'isVoluntary' => 'is_voluntary',
        'travelerInfoList' => 'traveler_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->travelerInfoList)) {
            Model::validateArray($this->travelerInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->travelerInfoList)) {
                $res['traveler_info_list'] = [];
                $n1 = 0;
                foreach ($this->travelerInfoList as $item1) {
                    $res['traveler_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['traveler_info_list'] as $item1) {
                    $model->travelerInfoList[$n1++] = travelerInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
