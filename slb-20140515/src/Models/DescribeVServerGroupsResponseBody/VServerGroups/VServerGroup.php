<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects;
use AlibabaCloud\Tea\Model;

class VServerGroup extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $VServerGroupName;

    /**
     * @var associatedObjects
     */
    public $associatedObjects;
    protected $_name = [
        'VServerGroupId'    => 'VServerGroupId',
        'VServerGroupName'  => 'VServerGroupName',
        'associatedObjects' => 'AssociatedObjects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
        }
        if (null !== $this->associatedObjects) {
            $res['AssociatedObjects'] = null !== $this->associatedObjects ? $this->associatedObjects->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }
        if (isset($map['AssociatedObjects'])) {
            $model->associatedObjects = associatedObjects::fromMap($map['AssociatedObjects']);
        }

        return $model;
    }
}
