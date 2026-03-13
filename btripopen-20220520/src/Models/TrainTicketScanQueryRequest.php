<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainTicketScanQueryRequest extends Model
{
    /**
     * @var string
     */
    public $billDate;

    /**
     * @var int
     */
    public $billId;

    /**
     * @var string
     */
    public $invoiceDateEnd;

    /**
     * @var string
     */
    public $invoiceDateStart;

    /**
     * @var int
     */
    public $invoiceSubTaskId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'billDate' => 'bill_date',
        'billId' => 'bill_id',
        'invoiceDateEnd' => 'invoice_date_end',
        'invoiceDateStart' => 'invoice_date_start',
        'invoiceSubTaskId' => 'invoice_sub_task_id',
        'orderId' => 'order_id',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'serialNumber' => 'serial_number',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }

        if (null !== $this->billId) {
            $res['bill_id'] = $this->billId;
        }

        if (null !== $this->invoiceDateEnd) {
            $res['invoice_date_end'] = $this->invoiceDateEnd;
        }

        if (null !== $this->invoiceDateStart) {
            $res['invoice_date_start'] = $this->invoiceDateStart;
        }

        if (null !== $this->invoiceSubTaskId) {
            $res['invoice_sub_task_id'] = $this->invoiceSubTaskId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->serialNumber) {
            $res['serial_number'] = $this->serialNumber;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
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
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }

        if (isset($map['bill_id'])) {
            $model->billId = $map['bill_id'];
        }

        if (isset($map['invoice_date_end'])) {
            $model->invoiceDateEnd = $map['invoice_date_end'];
        }

        if (isset($map['invoice_date_start'])) {
            $model->invoiceDateStart = $map['invoice_date_start'];
        }

        if (isset($map['invoice_sub_task_id'])) {
            $model->invoiceSubTaskId = $map['invoice_sub_task_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['serial_number'])) {
            $model->serialNumber = $map['serial_number'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
