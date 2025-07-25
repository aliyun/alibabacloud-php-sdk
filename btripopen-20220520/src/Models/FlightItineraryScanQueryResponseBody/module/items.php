<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightItineraryScanQueryResponseBody\module\items\flights;

class items extends Model
{
    /**
     * @var string
     */
    public $agentCode;

    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $billDate;

    /**
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
     * @var string
     */
    public $fuelSurcharge;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $insurance;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $issueCompany;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $itineraryNum;

    /**
     * @var string
     */
    public $ofdOssUrl;

    /**
     * @var int
     */
    public $orderId;

    /**
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
    public $pdfOssUrl;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $promptMessage;

    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @var int
     */
    public $purchaserType;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $validationCode;
    protected $_name = [
        'agentCode' => 'agent_code',
        'applyId' => 'apply_id',
        'billDate' => 'bill_date',
        'build' => 'build',
        'costCenter' => 'cost_center',
        'department' => 'department',
        'flights' => 'flights',
        'fuelSurcharge' => 'fuel_surcharge',
        'id' => 'id',
        'insurance' => 'insurance',
        'invoiceTitle' => 'invoice_title',
        'invoiceType' => 'invoice_type',
        'issueCompany' => 'issue_company',
        'issueDate' => 'issue_date',
        'itineraryNum' => 'itinerary_num',
        'ofdOssUrl' => 'ofd_oss_url',
        'orderId' => 'order_id',
        'ossUrl' => 'oss_url',
        'passengerName' => 'passenger_name',
        'pdfOssUrl' => 'pdf_oss_url',
        'project' => 'project',
        'promptMessage' => 'prompt_message',
        'purchaserName' => 'purchaser_name',
        'purchaserTaxNo' => 'purchaser_tax_no',
        'purchaserType' => 'purchaser_type',
        'taxAmount' => 'tax_amount',
        'taxRate' => 'tax_rate',
        'ticketNo' => 'ticket_no',
        'ticketPrice' => 'ticket_price',
        'totalPrice' => 'total_price',
        'validationCode' => 'validation_code',
    ];

    public function validate()
    {
        if (\is_array($this->flights)) {
            Model::validateArray($this->flights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCode) {
            $res['agent_code'] = $this->agentCode;
        }

        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
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
            if (\is_array($this->flights)) {
                $res['flights'] = [];
                $n1 = 0;
                foreach ($this->flights as $item1) {
                    $res['flights'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
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

        if (null !== $this->ofdOssUrl) {
            $res['ofd_oss_url'] = $this->ofdOssUrl;
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

        if (null !== $this->pdfOssUrl) {
            $res['pdf_oss_url'] = $this->pdfOssUrl;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->promptMessage) {
            $res['prompt_message'] = $this->promptMessage;
        }

        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }

        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }

        if (null !== $this->purchaserType) {
            $res['purchaser_type'] = $this->purchaserType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_code'])) {
            $model->agentCode = $map['agent_code'];
        }

        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
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
                $n1 = 0;
                foreach ($map['flights'] as $item1) {
                    $model->flights[$n1] = flights::fromMap($item1);
                    ++$n1;
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

        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
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

        if (isset($map['ofd_oss_url'])) {
            $model->ofdOssUrl = $map['ofd_oss_url'];
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

        if (isset($map['pdf_oss_url'])) {
            $model->pdfOssUrl = $map['pdf_oss_url'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['prompt_message'])) {
            $model->promptMessage = $map['prompt_message'];
        }

        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }

        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }

        if (isset($map['purchaser_type'])) {
            $model->purchaserType = $map['purchaser_type'];
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
