<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data;

use AlibabaCloud\Dara\Model;

class packLimitInfo extends Model
{
    /**
     * @var float
     */
    public $availableLimit;

    /**
     * @var int
     */
    public $cycleEndTime;

    /**
     * @var int
     */
    public $cycleStartTime;

    /**
     * @var float
     */
    public $frozenCredits;

    /**
     * @var bool
     */
    public $hasShareLimit;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var int
     */
    public $lastConfirmedTime;

    /**
     * @var float
     */
    public $upperLimit;

    /**
     * @var float
     */
    public $usedCredits;
    protected $_name = [
        'availableLimit' => 'AvailableLimit',
        'cycleEndTime' => 'CycleEndTime',
        'cycleStartTime' => 'CycleStartTime',
        'frozenCredits' => 'FrozenCredits',
        'hasShareLimit' => 'HasShareLimit',
        'isAvailable' => 'IsAvailable',
        'lastConfirmedTime' => 'LastConfirmedTime',
        'upperLimit' => 'UpperLimit',
        'usedCredits' => 'UsedCredits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableLimit) {
            $res['AvailableLimit'] = $this->availableLimit;
        }

        if (null !== $this->cycleEndTime) {
            $res['CycleEndTime'] = $this->cycleEndTime;
        }

        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }

        if (null !== $this->frozenCredits) {
            $res['FrozenCredits'] = $this->frozenCredits;
        }

        if (null !== $this->hasShareLimit) {
            $res['HasShareLimit'] = $this->hasShareLimit;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->lastConfirmedTime) {
            $res['LastConfirmedTime'] = $this->lastConfirmedTime;
        }

        if (null !== $this->upperLimit) {
            $res['UpperLimit'] = $this->upperLimit;
        }

        if (null !== $this->usedCredits) {
            $res['UsedCredits'] = $this->usedCredits;
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
        if (isset($map['AvailableLimit'])) {
            $model->availableLimit = $map['AvailableLimit'];
        }

        if (isset($map['CycleEndTime'])) {
            $model->cycleEndTime = $map['CycleEndTime'];
        }

        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }

        if (isset($map['FrozenCredits'])) {
            $model->frozenCredits = $map['FrozenCredits'];
        }

        if (isset($map['HasShareLimit'])) {
            $model->hasShareLimit = $map['HasShareLimit'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['LastConfirmedTime'])) {
            $model->lastConfirmedTime = $map['LastConfirmedTime'];
        }

        if (isset($map['UpperLimit'])) {
            $model->upperLimit = $map['UpperLimit'];
        }

        if (isset($map['UsedCredits'])) {
            $model->usedCredits = $map['UsedCredits'];
        }

        return $model;
    }
}
