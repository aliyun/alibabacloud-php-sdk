<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus;
use AlibabaCloud\Tea\Model;

class instancePluginStatusSet extends Model
{
    /**
     * @var instancePluginStatus[]
     */
    public $instancePluginStatus;
    protected $_name = [
        'instancePluginStatus' => 'InstancePluginStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePluginStatus) {
            $res['InstancePluginStatus'] = [];
            if (null !== $this->instancePluginStatus && \is_array($this->instancePluginStatus)) {
                $n = 0;
                foreach ($this->instancePluginStatus as $item) {
                    $res['InstancePluginStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePluginStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePluginStatus'])) {
            if (!empty($map['InstancePluginStatus'])) {
                $model->instancePluginStatus = [];
                $n                           = 0;
                foreach ($map['InstancePluginStatus'] as $item) {
                    $model->instancePluginStatus[$n++] = null !== $item ? instancePluginStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
