<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus\pluginStatusSet\pluginStatus;
use AlibabaCloud\Tea\Model;

class pluginStatusSet extends Model
{
    /**
     * @var pluginStatus[]
     */
    public $pluginStatus;
    protected $_name = [
        'pluginStatus' => 'PluginStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginStatus) {
            $res['PluginStatus'] = [];
            if (null !== $this->pluginStatus && \is_array($this->pluginStatus)) {
                $n = 0;
                foreach ($this->pluginStatus as $item) {
                    $res['PluginStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginStatus'])) {
            if (!empty($map['PluginStatus'])) {
                $model->pluginStatus = [];
                $n                   = 0;
                foreach ($map['PluginStatus'] as $item) {
                    $model->pluginStatus[$n++] = null !== $item ? pluginStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
