<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup;
use AlibabaCloud\Tea\Model;

class masterSlaveServerGroups extends Model
{
    /**
     * @var masterSlaveServerGroup[]
     */
    public $masterSlaveServerGroup;
    protected $_name = [
        'masterSlaveServerGroup' => 'MasterSlaveServerGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroup) {
            $res['MasterSlaveServerGroup'] = [];
            if (null !== $this->masterSlaveServerGroup && \is_array($this->masterSlaveServerGroup)) {
                $n = 0;
                foreach ($this->masterSlaveServerGroup as $item) {
                    $res['MasterSlaveServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveServerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveServerGroup'])) {
            if (!empty($map['MasterSlaveServerGroup'])) {
                $model->masterSlaveServerGroup = [];
                $n                             = 0;
                foreach ($map['MasterSlaveServerGroup'] as $item) {
                    $model->masterSlaveServerGroup[$n++] = null !== $item ? masterSlaveServerGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
