<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceClassRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cnClass;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dnClass;

    /**
     * @var string
     */
    public $dnStorageSpace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $specifiedDNScale;

    /**
     * @var string
     */
    public $specifiedDNSpecMapJson;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $switchTimeMode;

    /**
     * @var string
     */
    public $targetDBInstanceClass;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'cnClass' => 'CnClass',
        'DBInstanceName' => 'DBInstanceName',
        'dnClass' => 'DnClass',
        'dnStorageSpace' => 'DnStorageSpace',
        'regionId' => 'RegionId',
        'specifiedDNScale' => 'SpecifiedDNScale',
        'specifiedDNSpecMapJson' => 'SpecifiedDNSpecMapJson',
        'switchTime' => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
        'targetDBInstanceClass' => 'TargetDBInstanceClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cnClass) {
            $res['CnClass'] = $this->cnClass;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->dnClass) {
            $res['DnClass'] = $this->dnClass;
        }

        if (null !== $this->dnStorageSpace) {
            $res['DnStorageSpace'] = $this->dnStorageSpace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->specifiedDNScale) {
            $res['SpecifiedDNScale'] = $this->specifiedDNScale;
        }

        if (null !== $this->specifiedDNSpecMapJson) {
            $res['SpecifiedDNSpecMapJson'] = $this->specifiedDNSpecMapJson;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        if (null !== $this->targetDBInstanceClass) {
            $res['TargetDBInstanceClass'] = $this->targetDBInstanceClass;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CnClass'])) {
            $model->cnClass = $map['CnClass'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DnClass'])) {
            $model->dnClass = $map['DnClass'];
        }

        if (isset($map['DnStorageSpace'])) {
            $model->dnStorageSpace = $map['DnStorageSpace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SpecifiedDNScale'])) {
            $model->specifiedDNScale = $map['SpecifiedDNScale'];
        }

        if (isset($map['SpecifiedDNSpecMapJson'])) {
            $model->specifiedDNSpecMapJson = $map['SpecifiedDNSpecMapJson'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        if (isset($map['TargetDBInstanceClass'])) {
            $model->targetDBInstanceClass = $map['TargetDBInstanceClass'];
        }

        return $model;
    }
}
