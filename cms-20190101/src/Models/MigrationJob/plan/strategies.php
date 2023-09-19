<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies\escalationSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\strategies\pushingSetting;
use AlibabaCloud\Tea\Model;

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
        'name'              => 'Name',
        'pushingSetting'    => 'PushingSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationSetting) {
            $res['EscalationSetting'] = null !== $this->escalationSetting ? $this->escalationSetting->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pushingSetting) {
            $res['PushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
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
