<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ActivateMigrationTargetInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $forceSwitch;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $switchTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
