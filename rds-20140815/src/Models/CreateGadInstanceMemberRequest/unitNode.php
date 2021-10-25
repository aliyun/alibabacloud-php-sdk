<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest;

use AlibabaCloud\Tea\Model;

class unitNode extends Model
{
    /**
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $zoneID;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string
     */
    public $vSwitchID;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $zoneIDSlave1;

    /**
     * @var string
     */
    public $zoneIDSlave2;

    /**
     * @var string
     */
    public $dtsInstanceClass;

    /**
     * @var string
     */
    public $dbInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

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
    public $dtsConflict;
    protected $_name = [
        'regionID'              => 'RegionID',
        'zoneID'                => 'ZoneID',
        'vpcID'                 => 'VpcID',
        'vSwitchID'             => 'VSwitchID',
        'securityIPList'        => 'SecurityIPList',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'zoneIDSlave1'          => 'ZoneIDSlave1',
        'zoneIDSlave2'          => 'ZoneIDSlave2',
        'dtsInstanceClass'      => 'DtsInstanceClass',
        'dbInstanceClass'       => 'DbInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'dtsConflict'           => 'DtsConflict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->zoneID) {
            $res['ZoneID'] = $this->zoneID;
        }
        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }
        if (null !== $this->vSwitchID) {
            $res['VSwitchID'] = $this->vSwitchID;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->zoneIDSlave1) {
            $res['ZoneIDSlave1'] = $this->zoneIDSlave1;
        }
        if (null !== $this->zoneIDSlave2) {
            $res['ZoneIDSlave2'] = $this->zoneIDSlave2;
        }
        if (null !== $this->dtsInstanceClass) {
            $res['DtsInstanceClass'] = $this->dtsInstanceClass;
        }
        if (null !== $this->dbInstanceClass) {
            $res['DbInstanceClass'] = $this->dbInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->dtsConflict) {
            $res['DtsConflict'] = $this->dtsConflict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unitNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['ZoneID'])) {
            $model->zoneID = $map['ZoneID'];
        }
        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }
        if (isset($map['VSwitchID'])) {
            $model->vSwitchID = $map['VSwitchID'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['ZoneIDSlave1'])) {
            $model->zoneIDSlave1 = $map['ZoneIDSlave1'];
        }
        if (isset($map['ZoneIDSlave2'])) {
            $model->zoneIDSlave2 = $map['ZoneIDSlave2'];
        }
        if (isset($map['DtsInstanceClass'])) {
            $model->dtsInstanceClass = $map['DtsInstanceClass'];
        }
        if (isset($map['DbInstanceClass'])) {
            $model->dbInstanceClass = $map['DbInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DtsConflict'])) {
            $model->dtsConflict = $map['DtsConflict'];
        }

        return $model;
    }
}
