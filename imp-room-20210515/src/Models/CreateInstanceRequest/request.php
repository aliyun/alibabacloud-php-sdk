<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 房间id
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 插件ID
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description 拓展字段
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'domain'    => 'Domain',
        'roomId'    => 'RoomId',
        'pluginId'  => 'PluginId',
        'extension' => 'Extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
