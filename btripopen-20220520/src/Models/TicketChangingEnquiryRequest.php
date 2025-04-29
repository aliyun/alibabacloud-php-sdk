<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TicketChangingEnquiryRequest extends Model
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
    public $disOrderId;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $modifyDepartDate;

    /**
     * @var string
     */
    public $modifyFlightNo;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'arrCity' => 'arr_city',
        'depCity' => 'dep_city',
        'disOrderId' => 'dis_order_id',
        'isVoluntary' => 'is_voluntary',
        'modifyDepartDate' => 'modify_depart_date',
        'modifyFlightNo' => 'modify_flight_no',
        'sessionId' => 'session_id',
    ];

    public function validate()
    {
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

        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }

        if (null !== $this->modifyDepartDate) {
            $res['modify_depart_date'] = $this->modifyDepartDate;
        }

        if (null !== $this->modifyFlightNo) {
            $res['modify_flight_no'] = $this->modifyFlightNo;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
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

        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }

        if (isset($map['modify_depart_date'])) {
            $model->modifyDepartDate = $map['modify_depart_date'];
        }

        if (isset($map['modify_flight_no'])) {
            $model->modifyFlightNo = $map['modify_flight_no'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        return $model;
    }
}
