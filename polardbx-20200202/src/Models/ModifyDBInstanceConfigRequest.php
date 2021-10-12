<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $configValue;
    protected $_name = [
        'regionId'       => 'RegionId',
        'DBInstanceName' => 'DBInstanceName',
        'configName'     => 'ConfigName',
        'configValue'    => 'ConfigValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        return $model;
    }
}
