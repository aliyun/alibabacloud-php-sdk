<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class UpgradeCDCVersionRequest extends Model
{
    /**
     * @var string
     */
    public $cdcDbVersion;

    /**
     * @var string
     */
    public $cdcMinorVersion;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $switchMode;
    protected $_name = [
        'cdcDbVersion' => 'CdcDbVersion',
        'cdcMinorVersion' => 'CdcMinorVersion',
        'DBInstanceName' => 'DBInstanceName',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
        'switchMode' => 'SwitchMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdcDbVersion) {
            $res['CdcDbVersion'] = $this->cdcDbVersion;
        }

        if (null !== $this->cdcMinorVersion) {
            $res['CdcMinorVersion'] = $this->cdcMinorVersion;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
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
        if (isset($map['CdcDbVersion'])) {
            $model->cdcDbVersion = $map['CdcDbVersion'];
        }

        if (isset($map['CdcMinorVersion'])) {
            $model->cdcMinorVersion = $map['CdcMinorVersion'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
