<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmConfigShrink;

    /**
     * @var bool
     */
    public $deleteAlarmRulesBeforeUpdate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'alarmConfigShrink' => 'AlarmConfig',
        'deleteAlarmRulesBeforeUpdate' => 'DeleteAlarmRulesBeforeUpdate',
        'description' => 'Description',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
