<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainTicketScanQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $arrStation;

    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $coachName;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @example 2023-01-12 10:00:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 71
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example 3137168772101111000
     *
     * @var int
     */
    public $orderId;

    /**
     * @example https://www.testurl.com
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $passenger;

    /**
     * @example 100
     *
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $seat;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @example 30671211200127U123456
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example 8.26
     *
     * @var string
     */
    public $taxAmount;

    /**
     * @example 9%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @description 取票号
     *
     * @example 784-1111111111
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @description 车次
     *
     * @example G99
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStation'   => 'arr_station',
        'billDate'     => 'bill_date',
        'coachName'    => 'coach_name',
        'costCenter'   => 'cost_center',
        'depStation'   => 'dep_station',
        'depTime'      => 'dep_time',
        'department'   => 'department',
        'id'           => 'id',
        'invoiceTitle' => 'invoice_title',
        'orderId'      => 'order_id',
        'ossUrl'       => 'oss_url',
        'passenger'    => 'passenger',
        'price'        => 'price',
        'project'      => 'project',
        'seat'         => 'seat',
        'seatNo'       => 'seat_no',
        'serialNumber' => 'serial_number',
        'taxAmount'    => 'tax_amount',
        'taxRate'      => 'tax_rate',
        'ticketNo'     => 'ticket_no',
        'trainNo'      => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }
        if (null !== $this->coachName) {
            $res['coach_name'] = $this->coachName;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }
        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }
        if (null !== $this->passenger) {
            $res['passenger'] = $this->passenger;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->seat) {
            $res['seat'] = $this->seat;
        }
        if (null !== $this->seatNo) {
            $res['seat_no'] = $this->seatNo;
        }
        if (null !== $this->serialNumber) {
            $res['serial_number'] = $this->serialNumber;
        }
        if (null !== $this->taxAmount) {
            $res['tax_amount'] = $this->taxAmount;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }
        if (isset($map['coach_name'])) {
            $model->coachName = $map['coach_name'];
        }
        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }
        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }
        if (isset($map['passenger'])) {
            $model->passenger = $map['passenger'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['seat'])) {
            $model->seat = $map['seat'];
        }
        if (isset($map['seat_no'])) {
            $model->seatNo = $map['seat_no'];
        }
        if (isset($map['serial_number'])) {
            $model->serialNumber = $map['serial_number'];
        }
        if (isset($map['tax_amount'])) {
            $model->taxAmount = $map['tax_amount'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
