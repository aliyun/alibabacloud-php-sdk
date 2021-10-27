<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceKernelVersionRequest extends Model
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
    public $upgradeTime;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'regionId'       => 'RegionId',
        'switchTime'     => 'SwitchTime',
        'upgradeTime'    => 'UpgradeTime',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->upgradeTime) {
            $res['UpgradeTime'] = $this->upgradeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceKernelVersionRequest
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
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['UpgradeTime'])) {
            $model->upgradeTime = $map['UpgradeTime'];
        }

        return $model;
    }
}
