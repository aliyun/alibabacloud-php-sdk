<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponseBody\result\roomInfoList;

use AlibabaCloud\Tea\Model;

class pluginInstanceInfoList extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'extension'  => 'Extension',
        'pluginId'   => 'PluginId',
        'pluginType' => 'PluginType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        return $model;
    }
}
