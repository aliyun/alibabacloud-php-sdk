<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\associatedObjects;
use AlibabaCloud\Tea\Model;

class masterSlaveServerGroup extends Model
{
    /**
     * @var string
     */
    public $masterSlaveServerGroupName;

    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var associatedObjects
     */
    public $associatedObjects;
    protected $_name = [
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
        'masterSlaveServerGroupId'   => 'MasterSlaveServerGroupId',
        'associatedObjects'          => 'AssociatedObjects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->associatedObjects) {
            $res['AssociatedObjects'] = null !== $this->associatedObjects ? $this->associatedObjects->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveServerGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['AssociatedObjects'])) {
            $model->associatedObjects = associatedObjects::fromMap($map['AssociatedObjects']);
        }

        return $model;
    }
}
