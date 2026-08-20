<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\refundRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\region;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\session;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\spu;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\ticketKind;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule;

class product extends Model
{
    /**
     * @var int
     */
    public $bookingType;

    /**
     * @var buyRule
     */
    public $buyRule;

    /**
     * @var string
     */
    public $costIncludeRemark;

    /**
     * @var int
     */
    public $deliverGuaranteeMinutes;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var int
     */
    public $invoiceIssuerType;

    /**
     * @var int
     */
    public $paymentLimitMinutes;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var refundRule
     */
    public $refundRule;

    /**
     * @var region
     */
    public $region;

    /**
     * @var int
     */
    public $scenicId;

    /**
     * @var session
     */
    public $session;

    /**
     * @var int
     */
    public $settlePriceCalculateType;

    /**
     * @var spu
     */
    public $spu;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var ticketKind
     */
    public $ticketKind;

    /**
     * @var useRule
     */
    public $useRule;
    protected $_name = [
        'bookingType' => 'BookingType',
        'buyRule' => 'BuyRule',
        'costIncludeRemark' => 'CostIncludeRemark',
        'deliverGuaranteeMinutes' => 'DeliverGuaranteeMinutes',
        'images' => 'Images',
        'invoiceIssuerType' => 'InvoiceIssuerType',
        'paymentLimitMinutes' => 'PaymentLimitMinutes',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'refundRule' => 'RefundRule',
        'region' => 'Region',
        'scenicId' => 'ScenicId',
        'session' => 'Session',
        'settlePriceCalculateType' => 'SettlePriceCalculateType',
        'spu' => 'Spu',
        'supplierName' => 'SupplierName',
        'ticketKind' => 'TicketKind',
        'useRule' => 'UseRule',
    ];

    public function validate()
    {
        if (null !== $this->buyRule) {
            $this->buyRule->validate();
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (null !== $this->refundRule) {
            $this->refundRule->validate();
        }
        if (null !== $this->region) {
            $this->region->validate();
        }
        if (null !== $this->session) {
            $this->session->validate();
        }
        if (null !== $this->spu) {
            $this->spu->validate();
        }
        if (null !== $this->ticketKind) {
            $this->ticketKind->validate();
        }
        if (null !== $this->useRule) {
            $this->useRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookingType) {
            $res['BookingType'] = $this->bookingType;
        }

        if (null !== $this->buyRule) {
            $res['BuyRule'] = null !== $this->buyRule ? $this->buyRule->toArray($noStream) : $this->buyRule;
        }

        if (null !== $this->costIncludeRemark) {
            $res['CostIncludeRemark'] = $this->costIncludeRemark;
        }

        if (null !== $this->deliverGuaranteeMinutes) {
            $res['DeliverGuaranteeMinutes'] = $this->deliverGuaranteeMinutes;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invoiceIssuerType) {
            $res['InvoiceIssuerType'] = $this->invoiceIssuerType;
        }

        if (null !== $this->paymentLimitMinutes) {
            $res['PaymentLimitMinutes'] = $this->paymentLimitMinutes;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->refundRule) {
            $res['RefundRule'] = null !== $this->refundRule ? $this->refundRule->toArray($noStream) : $this->refundRule;
        }

        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toArray($noStream) : $this->region;
        }

        if (null !== $this->scenicId) {
            $res['ScenicId'] = $this->scenicId;
        }

        if (null !== $this->session) {
            $res['Session'] = null !== $this->session ? $this->session->toArray($noStream) : $this->session;
        }

        if (null !== $this->settlePriceCalculateType) {
            $res['SettlePriceCalculateType'] = $this->settlePriceCalculateType;
        }

        if (null !== $this->spu) {
            $res['Spu'] = null !== $this->spu ? $this->spu->toArray($noStream) : $this->spu;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        if (null !== $this->ticketKind) {
            $res['TicketKind'] = null !== $this->ticketKind ? $this->ticketKind->toArray($noStream) : $this->ticketKind;
        }

        if (null !== $this->useRule) {
            $res['UseRule'] = null !== $this->useRule ? $this->useRule->toArray($noStream) : $this->useRule;
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
        if (isset($map['BookingType'])) {
            $model->bookingType = $map['BookingType'];
        }

        if (isset($map['BuyRule'])) {
            $model->buyRule = buyRule::fromMap($map['BuyRule']);
        }

        if (isset($map['CostIncludeRemark'])) {
            $model->costIncludeRemark = $map['CostIncludeRemark'];
        }

        if (isset($map['DeliverGuaranteeMinutes'])) {
            $model->deliverGuaranteeMinutes = $map['DeliverGuaranteeMinutes'];
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvoiceIssuerType'])) {
            $model->invoiceIssuerType = $map['InvoiceIssuerType'];
        }

        if (isset($map['PaymentLimitMinutes'])) {
            $model->paymentLimitMinutes = $map['PaymentLimitMinutes'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['RefundRule'])) {
            $model->refundRule = refundRule::fromMap($map['RefundRule']);
        }

        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }

        if (isset($map['ScenicId'])) {
            $model->scenicId = $map['ScenicId'];
        }

        if (isset($map['Session'])) {
            $model->session = session::fromMap($map['Session']);
        }

        if (isset($map['SettlePriceCalculateType'])) {
            $model->settlePriceCalculateType = $map['SettlePriceCalculateType'];
        }

        if (isset($map['Spu'])) {
            $model->spu = spu::fromMap($map['Spu']);
        }

        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        if (isset($map['TicketKind'])) {
            $model->ticketKind = ticketKind::fromMap($map['TicketKind']);
        }

        if (isset($map['UseRule'])) {
            $model->useRule = useRule::fromMap($map['UseRule']);
        }

        return $model;
    }
}
