<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TicketChangingEnquiryRequest extends Model
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
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $modifyDepartDate;

    /**
     * @example CA1704
     *
     * @var string
     */
    public $modifyFlightNo;

    /**
     * @example ece19e8b1047898a5a98b6487348c2
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'arrCity'          => 'arr_city',
        'depCity'          => 'dep_city',
        'disOrderId'       => 'dis_order_id',
        'isVoluntary'      => 'is_voluntary',
        'modifyDepartDate' => 'modify_depart_date',
        'modifyFlightNo'   => 'modify_flight_no',
        'sessionId'        => 'session_id',
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

    /**
     * @param array $map
     *
     * @return TicketChangingEnquiryRequest
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
