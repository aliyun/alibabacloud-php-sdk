<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponseBody\result\roomInfoList;

use AlibabaCloud\Tea\Model;

class pluginInstanceInfoList extends Model
{
    /**
     * @description 插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description 插件实例唯一标识。
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description 插件实例创建时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 插件拓展字段。
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'pluginType' => 'PluginType',
        'pluginId'   => 'PluginId',
        'createTime' => 'CreateTime',
        'extension'  => 'Extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
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
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
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
