<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class SwitchGdnMemberRoleRequest extends Model
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
    public $switchMode;
    /**
     * @var int
     */
    public $taskTimeout;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'regionId'       => 'RegionId',
        'switchMode'     => 'SwitchMode',
        'taskTimeout'    => 'TaskTimeout',
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

        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }

        if (null !== $this->taskTimeout) {
            $res['TaskTimeout'] = $this->taskTimeout;
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

        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        if (isset($map['TaskTimeout'])) {
            $model->taskTimeout = $map['TaskTimeout'];
        }

        return $model;
    }
}
