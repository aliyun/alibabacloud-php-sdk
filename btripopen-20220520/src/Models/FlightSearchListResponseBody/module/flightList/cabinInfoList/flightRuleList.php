<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\changeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\changeRuleItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\refundRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\refundRuleItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\signRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\upgradeRule;

class flightRuleList extends Model
{
    /**
     * @var string
     */
    public $baggageInfo;

    /**
     * @var baggageItem
     */
    public $baggageItem;

    /**
     * @var changeRule
     */
    public $changeRule;

    /**
     * @var changeRuleItem
     */
    public $changeRuleItem;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var refundRule
     */
    public $refundRule;

    /**
     * @var refundRuleItem
     */
    public $refundRuleItem;

    /**
     * @var signRule
     */
    public $signRule;

    /**
     * @var string
     */
    public $tuigaiqianInfo;

    /**
     * @var upgradeRule
     */
    public $upgradeRule;
    protected $_name = [
        'baggageInfo' => 'baggage_info',
        'baggageItem' => 'baggage_item',
        'changeRule' => 'change_rule',
        'changeRuleItem' => 'change_rule_item',
        'extra' => 'extra',
        'refundRule' => 'refund_rule',
        'refundRuleItem' => 'refund_rule_item',
        'signRule' => 'sign_rule',
        'tuigaiqianInfo' => 'tuigaiqian_info',
        'upgradeRule' => 'upgrade_rule',
    ];

    public function validate()
    {
        if (null !== $this->baggageItem) {
            $this->baggageItem->validate();
        }
        if (null !== $this->changeRule) {
            $this->changeRule->validate();
        }
        if (null !== $this->changeRuleItem) {
            $this->changeRuleItem->validate();
        }
        if (null !== $this->refundRule) {
            $this->refundRule->validate();
        }
        if (null !== $this->refundRuleItem) {
            $this->refundRuleItem->validate();
        }
        if (null !== $this->signRule) {
            $this->signRule->validate();
        }
        if (null !== $this->upgradeRule) {
            $this->upgradeRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageInfo) {
            $res['baggage_info'] = $this->baggageInfo;
        }

        if (null !== $this->baggageItem) {
            $res['baggage_item'] = null !== $this->baggageItem ? $this->baggageItem->toArray($noStream) : $this->baggageItem;
        }

        if (null !== $this->changeRule) {
            $res['change_rule'] = null !== $this->changeRule ? $this->changeRule->toArray($noStream) : $this->changeRule;
        }

        if (null !== $this->changeRuleItem) {
            $res['change_rule_item'] = null !== $this->changeRuleItem ? $this->changeRuleItem->toArray($noStream) : $this->changeRuleItem;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->refundRule) {
            $res['refund_rule'] = null !== $this->refundRule ? $this->refundRule->toArray($noStream) : $this->refundRule;
        }

        if (null !== $this->refundRuleItem) {
            $res['refund_rule_item'] = null !== $this->refundRuleItem ? $this->refundRuleItem->toArray($noStream) : $this->refundRuleItem;
        }

        if (null !== $this->signRule) {
            $res['sign_rule'] = null !== $this->signRule ? $this->signRule->toArray($noStream) : $this->signRule;
        }

        if (null !== $this->tuigaiqianInfo) {
            $res['tuigaiqian_info'] = $this->tuigaiqianInfo;
        }

        if (null !== $this->upgradeRule) {
            $res['upgrade_rule'] = null !== $this->upgradeRule ? $this->upgradeRule->toArray($noStream) : $this->upgradeRule;
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
        if (isset($map['baggage_info'])) {
            $model->baggageInfo = $map['baggage_info'];
        }

        if (isset($map['baggage_item'])) {
            $model->baggageItem = baggageItem::fromMap($map['baggage_item']);
        }

        if (isset($map['change_rule'])) {
            $model->changeRule = changeRule::fromMap($map['change_rule']);
        }

        if (isset($map['change_rule_item'])) {
            $model->changeRuleItem = changeRuleItem::fromMap($map['change_rule_item']);
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['refund_rule'])) {
            $model->refundRule = refundRule::fromMap($map['refund_rule']);
        }

        if (isset($map['refund_rule_item'])) {
            $model->refundRuleItem = refundRuleItem::fromMap($map['refund_rule_item']);
        }

        if (isset($map['sign_rule'])) {
            $model->signRule = signRule::fromMap($map['sign_rule']);
        }

        if (isset($map['tuigaiqian_info'])) {
            $model->tuigaiqianInfo = $map['tuigaiqian_info'];
        }

        if (isset($map['upgrade_rule'])) {
            $model->upgradeRule = upgradeRule::fromMap($map['upgrade_rule']);
        }

        return $model;
    }
}
