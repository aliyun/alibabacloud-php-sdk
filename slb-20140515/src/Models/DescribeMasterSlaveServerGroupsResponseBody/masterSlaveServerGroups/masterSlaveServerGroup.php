<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\associatedObjects;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\tags;
use AlibabaCloud\Tea\Model;

class masterSlaveServerGroup extends Model
{
    /**
     * @description The associated resources.
     *
     * @var associatedObjects
     */
    public $associatedObjects;

    /**
     * @description The time when the CLB instance was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-12-02T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the primary/secondary server group.
     *
     * @example rsp-0bfuc******
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @description The name of the primary/secondary server group.
     *
     * @example Group3
     *
     * @var string
     */
    public $masterSlaveServerGroupName;

    /**
     * @description The tag key.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'associatedObjects'          => 'AssociatedObjects',
        'createTime'                 => 'CreateTime',
        'masterSlaveServerGroupId'   => 'MasterSlaveServerGroupId',
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
        'tags'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedObjects) {
            $res['AssociatedObjects'] = null !== $this->associatedObjects ? $this->associatedObjects->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['AssociatedObjects'])) {
            $model->associatedObjects = associatedObjects::fromMap($map['AssociatedObjects']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
