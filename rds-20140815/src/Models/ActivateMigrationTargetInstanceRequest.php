<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ActivateMigrationTargetInstanceRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description Specifies whether to forcefully perform a switchover. Set the value to 1. The value 1 specifies a forceful switchover.
     *
     * @example 1
     *
     * @var string
     */
    public $forceSwitch;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description A reserved parameter. This parameter does not take effect.
     *
     * @example 2022-02-25T06:57:41Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The time when you want to perform the switchover.
     *
     * Set the value to 0. The value 0 specifies an immediate switchover.
     * @example 0
     *
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'forceSwitch'     => 'ForceSwitch',
        'resourceOwnerId' => 'ResourceOwnerId',
        'switchTime'      => 'SwitchTime',
        'switchTimeMode'  => 'SwitchTimeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->forceSwitch) {
            $res['ForceSwitch'] = $this->forceSwitch;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
     * @return ActivateMigrationTargetInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ForceSwitch'])) {
            $model->forceSwitch = $map['ForceSwitch'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
