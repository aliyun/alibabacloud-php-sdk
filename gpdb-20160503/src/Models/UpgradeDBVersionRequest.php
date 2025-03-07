<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBVersionRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example gp-wz9kmr708m155j***
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is no longer used and does not need to be specified.
     *
     * @example null
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @description The minor version of the instance.
     *
     * @example 6.3.6.1-202112012048
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is no longer used and does not need to be specified.
     *
     * @example null
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description This parameter is no longer used and does not need to be specified.
     *
     * @example null
     *
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'majorVersion'   => 'MajorVersion',
        'minorVersion'   => 'MinorVersion',
        'ownerId'        => 'OwnerId',
        'regionId'       => 'RegionId',
        'switchTime'     => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
