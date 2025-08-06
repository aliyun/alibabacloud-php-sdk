<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus;

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
        if (\is_array($this->instancePluginStatus)) {
            Model::validateArray($this->instancePluginStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancePluginStatus) {
            if (\is_array($this->instancePluginStatus)) {
                $res['InstancePluginStatus'] = [];
                $n1 = 0;
                foreach ($this->instancePluginStatus as $item1) {
                    $res['InstancePluginStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InstancePluginStatus'])) {
            if (!empty($map['InstancePluginStatus'])) {
                $model->instancePluginStatus = [];
                $n1 = 0;
                foreach ($map['InstancePluginStatus'] as $item1) {
                    $model->instancePluginStatus[$n1] = instancePluginStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
