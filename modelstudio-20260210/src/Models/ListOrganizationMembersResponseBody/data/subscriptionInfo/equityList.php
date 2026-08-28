<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data\subscriptionInfo;

use AlibabaCloud\Dara\Model;

class equityList extends Model
{
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
    public $cycleSurplusValue;

    /**
     * @var float
     */
    public $cycleTotalValue;

    /**
     * @var string
     */
    public $equityType;

    /**
     * @var string
     */
    public $equityUnit;
    protected $_name = [
        'cycleEndTime' => 'CycleEndTime',
        'cycleStartTime' => 'CycleStartTime',
        'cycleSurplusValue' => 'CycleSurplusValue',
        'cycleTotalValue' => 'CycleTotalValue',
        'equityType' => 'EquityType',
        'equityUnit' => 'EquityUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleEndTime) {
            $res['CycleEndTime'] = $this->cycleEndTime;
        }

        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }

        if (null !== $this->cycleSurplusValue) {
            $res['CycleSurplusValue'] = $this->cycleSurplusValue;
        }

        if (null !== $this->cycleTotalValue) {
            $res['CycleTotalValue'] = $this->cycleTotalValue;
        }

        if (null !== $this->equityType) {
            $res['EquityType'] = $this->equityType;
        }

        if (null !== $this->equityUnit) {
            $res['EquityUnit'] = $this->equityUnit;
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
        if (isset($map['CycleEndTime'])) {
            $model->cycleEndTime = $map['CycleEndTime'];
        }

        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }

        if (isset($map['CycleSurplusValue'])) {
            $model->cycleSurplusValue = $map['CycleSurplusValue'];
        }

        if (isset($map['CycleTotalValue'])) {
            $model->cycleTotalValue = $map['CycleTotalValue'];
        }

        if (isset($map['EquityType'])) {
            $model->equityType = $map['EquityType'];
        }

        if (isset($map['EquityUnit'])) {
            $model->equityUnit = $map['EquityUnit'];
        }

        return $model;
    }
}
