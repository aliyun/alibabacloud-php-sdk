<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class equityList extends Model
{
    /**
     * @var int
     */
    public $cycleEndTime;

    /**
     * @var string
     */
    public $cycleInstanceId;

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
     * @var int
     */
    public $cycleVersion;

    /**
     * @var string
     */
    public $equityType;
    protected $_name = [
        'cycleEndTime' => 'CycleEndTime',
        'cycleInstanceId' => 'CycleInstanceId',
        'cycleStartTime' => 'CycleStartTime',
        'cycleSurplusValue' => 'CycleSurplusValue',
        'cycleTotalValue' => 'CycleTotalValue',
        'cycleVersion' => 'CycleVersion',
        'equityType' => 'EquityType',
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

        if (null !== $this->cycleInstanceId) {
            $res['CycleInstanceId'] = $this->cycleInstanceId;
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

        if (null !== $this->cycleVersion) {
            $res['CycleVersion'] = $this->cycleVersion;
        }

        if (null !== $this->equityType) {
            $res['EquityType'] = $this->equityType;
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

        if (isset($map['CycleInstanceId'])) {
            $model->cycleInstanceId = $map['CycleInstanceId'];
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

        if (isset($map['CycleVersion'])) {
            $model->cycleVersion = $map['CycleVersion'];
        }

        if (isset($map['EquityType'])) {
            $model->equityType = $map['EquityType'];
        }

        return $model;
    }
}
