<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceUpgradePeriodRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $upgradeMode;

    /**
     * @var string
     */
    public $upgradeStartTime;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'lang'             => 'Lang',
        'regionId'         => 'RegionId',
        'upgradeMode'      => 'UpgradeMode',
        'upgradeStartTime' => 'UpgradeStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }
        if (null !== $this->upgradeStartTime) {
            $res['UpgradeStartTime'] = $this->upgradeStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceUpgradePeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }
        if (isset($map['UpgradeStartTime'])) {
            $model->upgradeStartTime = $map['UpgradeStartTime'];
        }

        return $model;
    }
}
