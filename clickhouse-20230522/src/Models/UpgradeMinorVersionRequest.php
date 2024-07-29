<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMinorVersionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cc-bp1jyis8p15we****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2023-01-09T05:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @example Immediate
     *
     * @var string
     */
    public $switchTimeMode;

    /**
     * @example 23.8.1.41495_6
     *
     * @var string
     */
    public $targetMinorVersion;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'regionId'           => 'RegionId',
        'switchTime'         => 'SwitchTime',
        'switchTimeMode'     => 'SwitchTimeMode',
        'targetMinorVersion' => 'TargetMinorVersion',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMinorVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }

        return $model;
    }
}
