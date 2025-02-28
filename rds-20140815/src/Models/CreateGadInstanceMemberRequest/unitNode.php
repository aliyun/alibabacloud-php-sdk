<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest;

use AlibabaCloud\Dara\Model;

class unitNode extends Model
{
    /**
     * @var string
     */
    public $DBInstanceDescription;
    /**
     * @var int
     */
    public $DBInstanceStorage;
    /**
     * @var string
     */
    public $DBInstanceStorageType;
    /**
     * @var string
     */
    public $dbInstanceClass;
    /**
     * @var string
     */
    public $dtsConflict;
    /**
     * @var string
     */
    public $dtsInstanceClass;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var string
     */
    public $regionID;
    /**
     * @var string
     */
    public $securityIPList;
    /**
     * @var string
     */
    public $vSwitchID;
    /**
     * @var string
     */
    public $vpcID;
    /**
     * @var string
     */
    public $zoneID;
    /**
     * @var string
     */
    public $zoneIDSlave1;
    /**
     * @var string
     */
    public $zoneIDSlave2;
    protected $_name = [
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dbInstanceClass'       => 'DbInstanceClass',
        'dtsConflict'           => 'DtsConflict',
        'dtsInstanceClass'      => 'DtsInstanceClass',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'regionID'              => 'RegionID',
        'securityIPList'        => 'SecurityIPList',
        'vSwitchID'             => 'VSwitchID',
        'vpcID'                 => 'VpcID',
        'zoneID'                => 'ZoneID',
        'zoneIDSlave1'          => 'ZoneIDSlave1',
        'zoneIDSlave2'          => 'ZoneIDSlave2',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }

        if (null !== $this->dbInstanceClass) {
            $res['DbInstanceClass'] = $this->dbInstanceClass;
        }

        if (null !== $this->dtsConflict) {
            $res['DtsConflict'] = $this->dtsConflict;
        }

        if (null !== $this->dtsInstanceClass) {
            $res['DtsInstanceClass'] = $this->dtsInstanceClass;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->vSwitchID) {
            $res['VSwitchID'] = $this->vSwitchID;
        }

        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }

        if (null !== $this->zoneID) {
            $res['ZoneID'] = $this->zoneID;
        }

        if (null !== $this->zoneIDSlave1) {
            $res['ZoneIDSlave1'] = $this->zoneIDSlave1;
        }

        if (null !== $this->zoneIDSlave2) {
            $res['ZoneIDSlave2'] = $this->zoneIDSlave2;
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
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }

        if (isset($map['DbInstanceClass'])) {
            $model->dbInstanceClass = $map['DbInstanceClass'];
        }

        if (isset($map['DtsConflict'])) {
            $model->dtsConflict = $map['DtsConflict'];
        }

        if (isset($map['DtsInstanceClass'])) {
            $model->dtsInstanceClass = $map['DtsInstanceClass'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['VSwitchID'])) {
            $model->vSwitchID = $map['VSwitchID'];
        }

        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }

        if (isset($map['ZoneID'])) {
            $model->zoneID = $map['ZoneID'];
        }

        if (isset($map['ZoneIDSlave1'])) {
            $model->zoneIDSlave1 = $map['ZoneIDSlave1'];
        }

        if (isset($map['ZoneIDSlave2'])) {
            $model->zoneIDSlave2 = $map['ZoneIDSlave2'];
        }

        return $model;
    }
}
