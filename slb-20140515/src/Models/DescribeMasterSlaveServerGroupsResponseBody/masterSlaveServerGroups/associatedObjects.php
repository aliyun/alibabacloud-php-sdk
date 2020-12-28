<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\associatedObjects\listeners;
use AlibabaCloud\Tea\Model;

class associatedObjects extends Model
{
    /**
     * @var listeners[]
     */
    public $listeners;
    protected $_name = [
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = [];
            if (null !== $this->listeners && \is_array($this->listeners)) {
                $n = 0;
                foreach ($this->listeners as $item) {
                    $res['Listeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                $n                = 0;
                foreach ($map['Listeners'] as $item) {
                    $model->listeners[$n++] = null !== $item ? listeners::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
