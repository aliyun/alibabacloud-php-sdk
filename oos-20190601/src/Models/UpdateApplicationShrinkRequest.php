<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationShrinkRequest extends Model
{
    /**
     * @description The configurations of application alerts.
     *
     * @var string
     */
    public $alarmConfigShrink;

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
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'alarmConfigShrink'            => 'AlarmConfig',
        'deleteAlarmRulesBeforeUpdate' => 'DeleteAlarmRulesBeforeUpdate',
        'description'                  => 'Description',
        'name'                         => 'Name',
        'regionId'                     => 'RegionId',
        'tagsShrink'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmConfigShrink) {
            $res['AlarmConfig'] = $this->alarmConfigShrink;
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmConfig'])) {
            $model->alarmConfigShrink = $map['AlarmConfig'];
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
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
