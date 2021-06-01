<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class pluginInstanceInfoList extends Model
{
    /**
     * @description 插件id
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description 对应实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 创建时间戳
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 拓展字段
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'pluginId'   => 'PluginId',
        'instanceId' => 'InstanceId',
        'createTime' => 'CreateTime',
        'extension'  => 'Extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginInstanceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
