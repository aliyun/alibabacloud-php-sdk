<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class Rule extends Model
{
    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $destinationRegionId;

    /**
     * @var int
     */
    public $destinationRetention;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var bool
     */
    public $doCopy;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $schedule;
    protected $_name = [
        'backupType'           => 'BackupType',
        'destinationRegionId'  => 'DestinationRegionId',
        'destinationRetention' => 'DestinationRetention',
        'disabled'             => 'Disabled',
        'doCopy'               => 'DoCopy',
        'retention'            => 'Retention',
        'ruleName'             => 'RuleName',
        'schedule'             => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->destinationRetention) {
            $res['DestinationRetention'] = $this->destinationRetention;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->doCopy) {
            $res['DoCopy'] = $this->doCopy;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['DestinationRetention'])) {
            $model->destinationRetention = $map['DestinationRetention'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['DoCopy'])) {
            $model->doCopy = $map['DoCopy'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
