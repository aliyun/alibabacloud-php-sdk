<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class SwitchGdnMemberRoleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pxc-********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $switchMode;

    /**
     * @var int
     */
    public $taskTimeout;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'regionId' => 'RegionId',
        'switchMode' => 'SwitchMode',
        'taskTimeout' => 'TaskTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }
        if (null !== $this->taskTimeout) {
            $res['TaskTimeout'] = $this->taskTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchGdnMemberRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }
        if (isset($map['TaskTimeout'])) {
            $model->taskTimeout = $map['TaskTimeout'];
        }

        return $model;
    }
}
