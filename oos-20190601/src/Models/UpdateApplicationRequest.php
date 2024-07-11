<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationRequest\alarmConfig;
use AlibabaCloud\Tea\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @description The configurations of application alerts.
     *
     * @var alarmConfig
     */
    public $alarmConfig;

    /**
     * @description Specifies whether to delete existing alert rules before applying the alert template. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAlarmRulesBeforeUpdate;

    /**
     * @description The description to be updated for the application.
     *
     * @example test application
     *
     * @var string
     */
    public $description;

    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example My-Application
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'alarmConfig'                  => 'AlarmConfig',
        'deleteAlarmRulesBeforeUpdate' => 'DeleteAlarmRulesBeforeUpdate',
        'description'                  => 'Description',
        'name'                         => 'Name',
        'regionId'                     => 'RegionId',
        'tags'                         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmConfig) {
            $res['AlarmConfig'] = null !== $this->alarmConfig ? $this->alarmConfig->toMap() : null;
        }
        if (null !== $this->deleteAlarmRulesBeforeUpdate) {
            $res['DeleteAlarmRulesBeforeUpdate'] = $this->deleteAlarmRulesBeforeUpdate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmConfig'])) {
            $model->alarmConfig = alarmConfig::fromMap($map['AlarmConfig']);
        }
        if (isset($map['DeleteAlarmRulesBeforeUpdate'])) {
            $model->deleteAlarmRulesBeforeUpdate = $map['DeleteAlarmRulesBeforeUpdate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
