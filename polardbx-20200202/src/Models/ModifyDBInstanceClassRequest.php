<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceClassRequest extends Model
{
    /**
     * @example FEA5DC20-6D8A-5979-97AA-FC57546ADC20
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cnClass;

    /**
     * @description This parameter is required.
     *
     * @example pxc-hzjasd****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dnClass;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
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
     * @example polarx.x4.xlarge.2e
     *
     * @var string
     */
    public $targetDBInstanceClass;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'cnClass'                => 'CnClass',
        'DBInstanceName'         => 'DBInstanceName',
        'dnClass'                => 'DnClass',
        'regionId'               => 'RegionId',
        'specifiedDNScale'       => 'SpecifiedDNScale',
        'specifiedDNSpecMapJson' => 'SpecifiedDNSpecMapJson',
        'switchTime'             => 'SwitchTime',
        'switchTimeMode'         => 'SwitchTimeMode',
        'targetDBInstanceClass'  => 'TargetDBInstanceClass',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceClassRequest
     */
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
