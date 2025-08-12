<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies\escalationSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies\pushingSetting;

class strategies extends Model
{
    /**
     * @var escalationSetting
     */
    public $escalationSetting;

    /**
     * @var string
     */
    public $name;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;
    protected $_name = [
        'escalationSetting' => 'EscalationSetting',
        'name' => 'Name',
        'pushingSetting' => 'PushingSetting',
    ];

    public function validate()
    {
        if (null !== $this->escalationSetting) {
            $this->escalationSetting->validate();
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalationSetting) {
            $res['EscalationSetting'] = null !== $this->escalationSetting ? $this->escalationSetting->toArray($noStream) : $this->escalationSetting;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pushingSetting) {
            $res['PushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
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
        if (isset($map['EscalationSetting'])) {
            $model->escalationSetting = escalationSetting::fromMap($map['EscalationSetting']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['PushingSetting']);
        }

        return $model;
    }
}
