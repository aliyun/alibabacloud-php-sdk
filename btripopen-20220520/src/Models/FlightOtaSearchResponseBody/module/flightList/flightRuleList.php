<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\baggageItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\changeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\changeRuleItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\refundRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\refundRuleItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\signRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\upgradeRule;
use AlibabaCloud\Tea\Model;

class flightRuleList extends Model
{
    /**
     * @example demo
     *
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
     * @example {}
     *
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
        'baggageInfo'    => 'baggage_info',
        'baggageItem'    => 'baggage_item',
        'changeRule'     => 'change_rule',
        'changeRuleItem' => 'change_rule_item',
        'extra'          => 'extra',
        'refundRule'     => 'refund_rule',
        'refundRuleItem' => 'refund_rule_item',
        'signRule'       => 'sign_rule',
        'tuigaiqianInfo' => 'tuigaiqian_info',
        'upgradeRule'    => 'upgrade_rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageInfo) {
            $res['baggage_info'] = $this->baggageInfo;
        }
        if (null !== $this->baggageItem) {
            $res['baggage_item'] = null !== $this->baggageItem ? $this->baggageItem->toMap() : null;
        }
        if (null !== $this->changeRule) {
            $res['change_rule'] = null !== $this->changeRule ? $this->changeRule->toMap() : null;
        }
        if (null !== $this->changeRuleItem) {
            $res['change_rule_item'] = null !== $this->changeRuleItem ? $this->changeRuleItem->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->refundRule) {
            $res['refund_rule'] = null !== $this->refundRule ? $this->refundRule->toMap() : null;
        }
        if (null !== $this->refundRuleItem) {
            $res['refund_rule_item'] = null !== $this->refundRuleItem ? $this->refundRuleItem->toMap() : null;
        }
        if (null !== $this->signRule) {
            $res['sign_rule'] = null !== $this->signRule ? $this->signRule->toMap() : null;
        }
        if (null !== $this->tuigaiqianInfo) {
            $res['tuigaiqian_info'] = $this->tuigaiqianInfo;
        }
        if (null !== $this->upgradeRule) {
            $res['upgrade_rule'] = null !== $this->upgradeRule ? $this->upgradeRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRuleList
     */
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
