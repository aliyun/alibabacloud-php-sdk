<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\associatedObjects\listeners;
use AlibabaCloud\Tea\Model;

class associatedObjects extends Model
{
    /**
     * @description The listeners.
     *
     * @var listeners
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
            $res['Listeners'] = null !== $this->listeners ? $this->listeners->toMap() : null;
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
            $model->listeners = listeners::fromMap($map['Listeners']);
        }

        return $model;
    }
}
