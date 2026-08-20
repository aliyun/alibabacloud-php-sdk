<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule\effectTimePointRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule\entryTimePeriods;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule\entryWithVoucherRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule\pickupsRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule\validityPeriodRule;

class useRule extends Model
{
    /**
     * @var effectTimePointRule
     */
    public $effectTimePointRule;

    /**
     * @var string
     */
    public $entryAddress;

    /**
     * @var string
     */
    public $entryRemark;

    /**
     * @var entryTimePeriods[]
     */
    public $entryTimePeriods;

    /**
     * @var int
     */
    public $entryType;

    /**
     * @var entryWithVoucherRule
     */
    public $entryWithVoucherRule;

    /**
     * @var bool
     */
    public $needAssemble;

    /**
     * @var bool
     */
    public $needPrebook;

    /**
     * @var string
     */
    public $otherNote;

    /**
     * @var pickupsRule
     */
    public $pickupsRule;

    /**
     * @var validityPeriodRule
     */
    public $validityPeriodRule;
    protected $_name = [
        'effectTimePointRule' => 'EffectTimePointRule',
        'entryAddress' => 'EntryAddress',
        'entryRemark' => 'EntryRemark',
        'entryTimePeriods' => 'EntryTimePeriods',
        'entryType' => 'EntryType',
        'entryWithVoucherRule' => 'EntryWithVoucherRule',
        'needAssemble' => 'NeedAssemble',
        'needPrebook' => 'NeedPrebook',
        'otherNote' => 'OtherNote',
        'pickupsRule' => 'PickupsRule',
        'validityPeriodRule' => 'ValidityPeriodRule',
    ];

    public function validate()
    {
        if (null !== $this->effectTimePointRule) {
            $this->effectTimePointRule->validate();
        }
        if (\is_array($this->entryTimePeriods)) {
            Model::validateArray($this->entryTimePeriods);
        }
        if (null !== $this->entryWithVoucherRule) {
            $this->entryWithVoucherRule->validate();
        }
        if (null !== $this->pickupsRule) {
            $this->pickupsRule->validate();
        }
        if (null !== $this->validityPeriodRule) {
            $this->validityPeriodRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectTimePointRule) {
            $res['EffectTimePointRule'] = null !== $this->effectTimePointRule ? $this->effectTimePointRule->toArray($noStream) : $this->effectTimePointRule;
        }

        if (null !== $this->entryAddress) {
            $res['EntryAddress'] = $this->entryAddress;
        }

        if (null !== $this->entryRemark) {
            $res['EntryRemark'] = $this->entryRemark;
        }

        if (null !== $this->entryTimePeriods) {
            if (\is_array($this->entryTimePeriods)) {
                $res['EntryTimePeriods'] = [];
                $n1 = 0;
                foreach ($this->entryTimePeriods as $item1) {
                    $res['EntryTimePeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }

        if (null !== $this->entryWithVoucherRule) {
            $res['EntryWithVoucherRule'] = null !== $this->entryWithVoucherRule ? $this->entryWithVoucherRule->toArray($noStream) : $this->entryWithVoucherRule;
        }

        if (null !== $this->needAssemble) {
            $res['NeedAssemble'] = $this->needAssemble;
        }

        if (null !== $this->needPrebook) {
            $res['NeedPrebook'] = $this->needPrebook;
        }

        if (null !== $this->otherNote) {
            $res['OtherNote'] = $this->otherNote;
        }

        if (null !== $this->pickupsRule) {
            $res['PickupsRule'] = null !== $this->pickupsRule ? $this->pickupsRule->toArray($noStream) : $this->pickupsRule;
        }

        if (null !== $this->validityPeriodRule) {
            $res['ValidityPeriodRule'] = null !== $this->validityPeriodRule ? $this->validityPeriodRule->toArray($noStream) : $this->validityPeriodRule;
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
        if (isset($map['EffectTimePointRule'])) {
            $model->effectTimePointRule = effectTimePointRule::fromMap($map['EffectTimePointRule']);
        }

        if (isset($map['EntryAddress'])) {
            $model->entryAddress = $map['EntryAddress'];
        }

        if (isset($map['EntryRemark'])) {
            $model->entryRemark = $map['EntryRemark'];
        }

        if (isset($map['EntryTimePeriods'])) {
            if (!empty($map['EntryTimePeriods'])) {
                $model->entryTimePeriods = [];
                $n1 = 0;
                foreach ($map['EntryTimePeriods'] as $item1) {
                    $model->entryTimePeriods[$n1] = entryTimePeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }

        if (isset($map['EntryWithVoucherRule'])) {
            $model->entryWithVoucherRule = entryWithVoucherRule::fromMap($map['EntryWithVoucherRule']);
        }

        if (isset($map['NeedAssemble'])) {
            $model->needAssemble = $map['NeedAssemble'];
        }

        if (isset($map['NeedPrebook'])) {
            $model->needPrebook = $map['NeedPrebook'];
        }

        if (isset($map['OtherNote'])) {
            $model->otherNote = $map['OtherNote'];
        }

        if (isset($map['PickupsRule'])) {
            $model->pickupsRule = pickupsRule::fromMap($map['PickupsRule']);
        }

        if (isset($map['ValidityPeriodRule'])) {
            $model->validityPeriodRule = validityPeriodRule::fromMap($map['ValidityPeriodRule']);
        }

        return $model;
    }
}
