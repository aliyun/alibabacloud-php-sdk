<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\WaitApplyInvoiceTaskDetailQueryResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $email;

    /**
     * @example 0
     *
     * @var string
     */
    public $flightInvoiceFee;

    /**
     * @example 3.12
     *
     * @var string
     */
    public $fuPointInvoiceFee;

    /**
     * @example 0
     *
     * @var string
     */
    public $hotelNormalInvoiceFee;

    /**
     * @example 100
     *
     * @var string
     */
    public $hotelSpecialInvoiceFee;

    /**
     * @example 0
     *
     * @var string
     */
    public $internationalFlightInvoiceFee;

    /**
     * @var string
     */
    public $internationalHotelInvoiceFee;

    /**
     * @example 123
     *
     * @var string
     */
    public $invoiceThirdPartId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $mailAddress;

    /**
     * @var string
     */
    public $mailCity;

    /**
     * @var string
     */
    public $mailFullAddress;

    /**
     * @var string
     */
    public $mailProvince;

    /**
     * @example 0
     *
     * @var string
     */
    public $penaltyFee;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1.02
     *
     * @var string
     */
    public $serviceFee;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $telephone;

    /**
     * @example 0
     *
     * @var string
     */
    public $trainInvoiceFee;

    /**
     * @example 100
     *
     * @var string
     */
    public $vehicleInvoiceFee;
    protected $_name = [
        'contact'                       => 'contact',
        'email'                         => 'email',
        'flightInvoiceFee'              => 'flight_invoice_fee',
        'fuPointInvoiceFee'             => 'fu_point_invoice_fee',
        'hotelNormalInvoiceFee'         => 'hotel_normal_invoice_fee',
        'hotelSpecialInvoiceFee'        => 'hotel_special_invoice_fee',
        'internationalFlightInvoiceFee' => 'international_flight_invoice_fee',
        'internationalHotelInvoiceFee'  => 'international_hotel_invoice_fee',
        'invoiceThirdPartId'            => 'invoice_third_part_id',
        'invoiceTitle'                  => 'invoice_title',
        'mailAddress'                   => 'mail_address',
        'mailCity'                      => 'mail_city',
        'mailFullAddress'               => 'mail_full_address',
        'mailProvince'                  => 'mail_province',
        'penaltyFee'                    => 'penalty_fee',
        'remark'                        => 'remark',
        'serviceFee'                    => 'service_fee',
        'telephone'                     => 'telephone',
        'trainInvoiceFee'               => 'train_invoice_fee',
        'vehicleInvoiceFee'             => 'vehicle_invoice_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->flightInvoiceFee) {
            $res['flight_invoice_fee'] = $this->flightInvoiceFee;
        }
        if (null !== $this->fuPointInvoiceFee) {
            $res['fu_point_invoice_fee'] = $this->fuPointInvoiceFee;
        }
        if (null !== $this->hotelNormalInvoiceFee) {
            $res['hotel_normal_invoice_fee'] = $this->hotelNormalInvoiceFee;
        }
        if (null !== $this->hotelSpecialInvoiceFee) {
            $res['hotel_special_invoice_fee'] = $this->hotelSpecialInvoiceFee;
        }
        if (null !== $this->internationalFlightInvoiceFee) {
            $res['international_flight_invoice_fee'] = $this->internationalFlightInvoiceFee;
        }
        if (null !== $this->internationalHotelInvoiceFee) {
            $res['international_hotel_invoice_fee'] = $this->internationalHotelInvoiceFee;
        }
        if (null !== $this->invoiceThirdPartId) {
            $res['invoice_third_part_id'] = $this->invoiceThirdPartId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->mailAddress) {
            $res['mail_address'] = $this->mailAddress;
        }
        if (null !== $this->mailCity) {
            $res['mail_city'] = $this->mailCity;
        }
        if (null !== $this->mailFullAddress) {
            $res['mail_full_address'] = $this->mailFullAddress;
        }
        if (null !== $this->mailProvince) {
            $res['mail_province'] = $this->mailProvince;
        }
        if (null !== $this->penaltyFee) {
            $res['penalty_fee'] = $this->penaltyFee;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->telephone) {
            $res['telephone'] = $this->telephone;
        }
        if (null !== $this->trainInvoiceFee) {
            $res['train_invoice_fee'] = $this->trainInvoiceFee;
        }
        if (null !== $this->vehicleInvoiceFee) {
            $res['vehicle_invoice_fee'] = $this->vehicleInvoiceFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['flight_invoice_fee'])) {
            $model->flightInvoiceFee = $map['flight_invoice_fee'];
        }
        if (isset($map['fu_point_invoice_fee'])) {
            $model->fuPointInvoiceFee = $map['fu_point_invoice_fee'];
        }
        if (isset($map['hotel_normal_invoice_fee'])) {
            $model->hotelNormalInvoiceFee = $map['hotel_normal_invoice_fee'];
        }
        if (isset($map['hotel_special_invoice_fee'])) {
            $model->hotelSpecialInvoiceFee = $map['hotel_special_invoice_fee'];
        }
        if (isset($map['international_flight_invoice_fee'])) {
            $model->internationalFlightInvoiceFee = $map['international_flight_invoice_fee'];
        }
        if (isset($map['international_hotel_invoice_fee'])) {
            $model->internationalHotelInvoiceFee = $map['international_hotel_invoice_fee'];
        }
        if (isset($map['invoice_third_part_id'])) {
            $model->invoiceThirdPartId = $map['invoice_third_part_id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['mail_address'])) {
            $model->mailAddress = $map['mail_address'];
        }
        if (isset($map['mail_city'])) {
            $model->mailCity = $map['mail_city'];
        }
        if (isset($map['mail_full_address'])) {
            $model->mailFullAddress = $map['mail_full_address'];
        }
        if (isset($map['mail_province'])) {
            $model->mailProvince = $map['mail_province'];
        }
        if (isset($map['penalty_fee'])) {
            $model->penaltyFee = $map['penalty_fee'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['telephone'])) {
            $model->telephone = $map['telephone'];
        }
        if (isset($map['train_invoice_fee'])) {
            $model->trainInvoiceFee = $map['train_invoice_fee'];
        }
        if (isset($map['vehicle_invoice_fee'])) {
            $model->vehicleInvoiceFee = $map['vehicle_invoice_fee'];
        }

        return $model;
    }
}
