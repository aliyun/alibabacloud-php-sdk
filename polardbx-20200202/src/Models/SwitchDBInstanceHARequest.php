<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class SwitchDBInstanceHARequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $regionId;

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
    public $targetPrimaryAzoneId;

    /**
     * @var string
     */
    public $targetPrimaryRegionId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'regionId' => 'RegionId',
        'switchTime' => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
        'targetPrimaryAzoneId' => 'TargetPrimaryAzoneId',
        'targetPrimaryRegionId' => 'TargetPrimaryRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        if (null !== $this->targetPrimaryAzoneId) {
            $res['TargetPrimaryAzoneId'] = $this->targetPrimaryAzoneId;
        }

        if (null !== $this->targetPrimaryRegionId) {
            $res['TargetPrimaryRegionId'] = $this->targetPrimaryRegionId;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        if (isset($map['TargetPrimaryAzoneId'])) {
            $model->targetPrimaryAzoneId = $map['TargetPrimaryAzoneId'];
        }

        if (isset($map['TargetPrimaryRegionId'])) {
            $model->targetPrimaryRegionId = $map['TargetPrimaryRegionId'];
        }

        return $model;
    }
}
