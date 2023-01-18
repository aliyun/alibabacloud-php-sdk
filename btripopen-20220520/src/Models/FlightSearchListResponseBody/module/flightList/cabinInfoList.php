<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList;
use AlibabaCloud\Tea\Model;

class cabinInfoList extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @example 100
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @example G
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassName;

    /**
     * @example G
     *
     * @var string
     */
    public $childCabin;

    /**
     * @var string
     */
    public $className;

    /**
     * @example demo
     *
     * @var string
     */
    public $classRule;

    /**
     * @example 10
     *
     * @var string
     */
    public $discount;

    /**
     * @var flightRuleList[]
     */
    public $flightRuleList;

    /**
     * @example demo
     *
     * @var string
     */
    public $flightRuleListStr;

    /**
     * @example 1
     *
     * @var int
     */
    public $invoiceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $memo;

    /**
     * @example 100
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @example 1000_1_0
     *
     * @var string
     */
    public $orderParams;

    /**
     * @example wisdiii2ii22ii2
     *
     * @var string
     */
    public $otaItemId;

    /**
     * @example 100
     *
     * @var int
     */
    public $price;

    /**
     * @example 1
     *
     * @var int
     */
    public $productType;

    /**
     * @example demo
     *
     * @var string
     */
    public $productTypeDesc;

    /**
     * @example 100
     *
     * @var string
     */
    public $promotionPrice;

    /**
     * @example 1
     *
     * @var string
     */
    public $remainedSeatCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'agentId'           => 'agent_id',
        'buildPrice'        => 'build_price',
        'cabin'             => 'cabin',
        'cabinClass'        => 'cabin_class',
        'cabinClassName'    => 'cabin_class_name',
        'childCabin'        => 'child_cabin',
        'className'         => 'class_name',
        'classRule'         => 'class_rule',
        'discount'          => 'discount',
        'flightRuleList'    => 'flight_rule_list',
        'flightRuleListStr' => 'flight_rule_list_str',
        'invoiceType'       => 'invoice_type',
        'isProtocol'        => 'is_protocol',
        'memo'              => 'memo',
        'oilPrice'          => 'oil_price',
        'orderParams'       => 'order_params',
        'otaItemId'         => 'ota_item_id',
        'price'             => 'price',
        'productType'       => 'product_type',
        'productTypeDesc'   => 'product_type_desc',
        'promotionPrice'    => 'promotion_price',
        'remainedSeatCount' => 'remained_seat_count',
        'ticketPrice'       => 'ticket_price',
        'totalPrice'        => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }
        if (null !== $this->childCabin) {
            $res['child_cabin'] = $this->childCabin;
        }
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->classRule) {
            $res['class_rule'] = $this->classRule;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightRuleList) {
            $res['flight_rule_list'] = [];
            if (null !== $this->flightRuleList && \is_array($this->flightRuleList)) {
                $n = 0;
                foreach ($this->flightRuleList as $item) {
                    $res['flight_rule_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRuleListStr) {
            $res['flight_rule_list_str'] = $this->flightRuleListStr;
        }
        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->orderParams) {
            $res['order_params'] = $this->orderParams;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->productType) {
            $res['product_type'] = $this->productType;
        }
        if (null !== $this->productTypeDesc) {
            $res['product_type_desc'] = $this->productTypeDesc;
        }
        if (null !== $this->promotionPrice) {
            $res['promotion_price'] = $this->promotionPrice;
        }
        if (null !== $this->remainedSeatCount) {
            $res['remained_seat_count'] = $this->remainedSeatCount;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cabinInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }
        if (isset($map['child_cabin'])) {
            $model->childCabin = $map['child_cabin'];
        }
        if (isset($map['class_name'])) {
            $model->className = $map['class_name'];
        }
        if (isset($map['class_rule'])) {
            $model->classRule = $map['class_rule'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_rule_list'])) {
            if (!empty($map['flight_rule_list'])) {
                $model->flightRuleList = [];
                $n                     = 0;
                foreach ($map['flight_rule_list'] as $item) {
                    $model->flightRuleList[$n++] = null !== $item ? flightRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_rule_list_str'])) {
            $model->flightRuleListStr = $map['flight_rule_list_str'];
        }
        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['order_params'])) {
            $model->orderParams = $map['order_params'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['product_type'])) {
            $model->productType = $map['product_type'];
        }
        if (isset($map['product_type_desc'])) {
            $model->productTypeDesc = $map['product_type_desc'];
        }
        if (isset($map['promotion_price'])) {
            $model->promotionPrice = $map['promotion_price'];
        }
        if (isset($map['remained_seat_count'])) {
            $model->remainedSeatCount = $map['remained_seat_count'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
