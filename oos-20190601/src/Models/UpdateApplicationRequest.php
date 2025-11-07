<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationRequest\alarmConfig;

class UpdateApplicationRequest extends Model
{
    /**
     * @var alarmConfig
     */
    public $alarmConfig;

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
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'alarmConfig' => 'AlarmConfig',
        'deleteAlarmRulesBeforeUpdate' => 'DeleteAlarmRulesBeforeUpdate',
        'description' => 'Description',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->alarmConfig) {
            $this->alarmConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmConfig) {
            $res['AlarmConfig'] = null !== $this->alarmConfig ? $this->alarmConfig->toArray($noStream) : $this->alarmConfig;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
