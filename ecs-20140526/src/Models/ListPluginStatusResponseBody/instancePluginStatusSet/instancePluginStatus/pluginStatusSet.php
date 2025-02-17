<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus\pluginStatusSet\pluginStatus;

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
        if (\is_array($this->pluginStatus)) {
            Model::validateArray($this->pluginStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginStatus) {
            if (\is_array($this->pluginStatus)) {
                $res['PluginStatus'] = [];
                $n1                  = 0;
                foreach ($this->pluginStatus as $item1) {
                    $res['PluginStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PluginStatus'])) {
            if (!empty($map['PluginStatus'])) {
                $model->pluginStatus = [];
                $n1                  = 0;
                foreach ($map['PluginStatus'] as $item1) {
                    $model->pluginStatus[$n1++] = pluginStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
