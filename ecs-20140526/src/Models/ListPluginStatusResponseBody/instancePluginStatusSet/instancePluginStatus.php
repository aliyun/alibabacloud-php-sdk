<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus\pluginStatusSet;

class instancePluginStatus extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var pluginStatusSet
     */
    public $pluginStatusSet;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pluginStatusSet' => 'PluginStatusSet',
    ];

    public function validate()
    {
        if (null !== $this->pluginStatusSet) {
            $this->pluginStatusSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pluginStatusSet) {
            $res['PluginStatusSet'] = null !== $this->pluginStatusSet ? $this->pluginStatusSet->toArray($noStream) : $this->pluginStatusSet;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PluginStatusSet'])) {
            $model->pluginStatusSet = pluginStatusSet::fromMap($map['PluginStatusSet']);
        }

        return $model;
    }
}
