<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus\pluginStatusSet;
use AlibabaCloud\Tea\Model;

class instancePluginStatus extends Model
{
    /**
     * @description The ID of the ECS instance.
     *
     * @example i-xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Details about the Cloud Assistant plug-in.
     *
     * @var pluginStatusSet
     */
    public $pluginStatusSet;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'pluginStatusSet' => 'PluginStatusSet',
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
        if (null !== $this->pluginStatusSet) {
            $res['PluginStatusSet'] = null !== $this->pluginStatusSet ? $this->pluginStatusSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePluginStatus
     */
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
