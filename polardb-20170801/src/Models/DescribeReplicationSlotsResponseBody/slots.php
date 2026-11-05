<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeReplicationSlotsResponseBody;

use AlibabaCloud\Dara\Model;

class slots extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $plugin;

    /**
     * @var string
     */
    public $slotName;

    /**
     * @var string
     */
    public $slotStatus;

    /**
     * @var string
     */
    public $slotType;

    /**
     * @var string
     */
    public $subGroupName;

    /**
     * @var string
     */
    public $subReplayLag;

    /**
     * @var string
     */
    public $temporary;

    /**
     * @var string
     */
    public $walDelay;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'database' => 'Database',
        'plugin' => 'Plugin',
        'slotName' => 'SlotName',
        'slotStatus' => 'SlotStatus',
        'slotType' => 'SlotType',
        'subGroupName' => 'SubGroupName',
        'subReplayLag' => 'SubReplayLag',
        'temporary' => 'Temporary',
        'walDelay' => 'WalDelay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->plugin) {
            $res['Plugin'] = $this->plugin;
        }

        if (null !== $this->slotName) {
            $res['SlotName'] = $this->slotName;
        }

        if (null !== $this->slotStatus) {
            $res['SlotStatus'] = $this->slotStatus;
        }

        if (null !== $this->slotType) {
            $res['SlotType'] = $this->slotType;
        }

        if (null !== $this->subGroupName) {
            $res['SubGroupName'] = $this->subGroupName;
        }

        if (null !== $this->subReplayLag) {
            $res['SubReplayLag'] = $this->subReplayLag;
        }

        if (null !== $this->temporary) {
            $res['Temporary'] = $this->temporary;
        }

        if (null !== $this->walDelay) {
            $res['WalDelay'] = $this->walDelay;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Plugin'])) {
            $model->plugin = $map['Plugin'];
        }

        if (isset($map['SlotName'])) {
            $model->slotName = $map['SlotName'];
        }

        if (isset($map['SlotStatus'])) {
            $model->slotStatus = $map['SlotStatus'];
        }

        if (isset($map['SlotType'])) {
            $model->slotType = $map['SlotType'];
        }

        if (isset($map['SubGroupName'])) {
            $model->subGroupName = $map['SubGroupName'];
        }

        if (isset($map['SubReplayLag'])) {
            $model->subReplayLag = $map['SubReplayLag'];
        }

        if (isset($map['Temporary'])) {
            $model->temporary = $map['Temporary'];
        }

        if (isset($map['WalDelay'])) {
            $model->walDelay = $map['WalDelay'];
        }

        return $model;
    }
}
