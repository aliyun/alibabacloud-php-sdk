<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponseBody\module\items\flights;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $agentCode;

    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;

    /**
     * @example 50
     *
     * @var string
     */
    public $build;

    /**
     * @var string
     */
    public $costCenter;

    /**
     * @var string
     */
    public $department;

    /**
     * @var flights[]
     */
    public $flights;

    /**
     * @example 120
     *
     * @var string
     */
    public $fuelSurcharge;

    /**
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var string
     */
    public $insurance;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $issueCompany;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @example 6666666666
     *
     * @var string
     */
    public $itineraryNum;

    /**
     * @example 4801105714092
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
    public $passengerName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $promptMessage;

    /**
     * @example 108.17
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
     * @example 784-1111111111
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @example 1190
     *
     * @var string
     */
    public $ticketPrice;

    /**
     * @example 1360
     *
     * @var string
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $validationCode;
    protected $_name = [
        'agentCode'      => 'agent_code',
        'billDate'       => 'bill_date',
        'build'          => 'build',
        'costCenter'     => 'cost_center',
        'department'     => 'department',
        'flights'        => 'flights',
        'fuelSurcharge'  => 'fuel_surcharge',
        'id'             => 'id',
        'insurance'      => 'insurance',
        'invoiceTitle'   => 'invoice_title',
        'issueCompany'   => 'issue_company',
        'issueDate'      => 'issue_date',
        'itineraryNum'   => 'itinerary_num',
        'orderId'        => 'order_id',
        'ossUrl'         => 'oss_url',
        'passengerName'  => 'passenger_name',
        'project'        => 'project',
        'promptMessage'  => 'prompt_message',
        'taxAmount'      => 'tax_amount',
        'taxRate'        => 'tax_rate',
        'ticketNo'       => 'ticket_no',
        'ticketPrice'    => 'ticket_price',
        'totalPrice'     => 'total_price',
        'validationCode' => 'validation_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentCode) {
            $res['agent_code'] = $this->agentCode;
        }
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }
        if (null !== $this->build) {
            $res['build'] = $this->build;
        }
        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->flights) {
            $res['flights'] = [];
            if (null !== $this->flights && \is_array($this->flights)) {
                $n = 0;
                foreach ($this->flights as $item) {
                    $res['flights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fuelSurcharge) {
            $res['fuel_surcharge'] = $this->fuelSurcharge;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->insurance) {
            $res['insurance'] = $this->insurance;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->issueCompany) {
            $res['issue_company'] = $this->issueCompany;
        }
        if (null !== $this->issueDate) {
            $res['issue_date'] = $this->issueDate;
        }
        if (null !== $this->itineraryNum) {
            $res['itinerary_num'] = $this->itineraryNum;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->promptMessage) {
            $res['prompt_message'] = $this->promptMessage;
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
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }
        if (null !== $this->validationCode) {
            $res['validation_code'] = $this->validationCode;
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
        if (isset($map['agent_code'])) {
            $model->agentCode = $map['agent_code'];
        }
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }
        if (isset($map['build'])) {
            $model->build = $map['build'];
        }
        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['flights'])) {
            if (!empty($map['flights'])) {
                $model->flights = [];
                $n              = 0;
                foreach ($map['flights'] as $item) {
                    $model->flights[$n++] = null !== $item ? flights::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fuel_surcharge'])) {
            $model->fuelSurcharge = $map['fuel_surcharge'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['insurance'])) {
            $model->insurance = $map['insurance'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['issue_company'])) {
            $model->issueCompany = $map['issue_company'];
        }
        if (isset($map['issue_date'])) {
            $model->issueDate = $map['issue_date'];
        }
        if (isset($map['itinerary_num'])) {
            $model->itineraryNum = $map['itinerary_num'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['prompt_message'])) {
            $model->promptMessage = $map['prompt_message'];
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
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }
        if (isset($map['validation_code'])) {
            $model->validationCode = $map['validation_code'];
        }

        return $model;
    }
}
