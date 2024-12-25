<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\tags;
use AlibabaCloud\Tea\Model;

class VServerGroup extends Model
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
     * @example 2022-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of servers.
     *
     * This parameter is unavailable by default. To use this parameter, submit a ticket or contact your account manager.
     * @example 1
     *
     * @var int
     */
    public $serverCount;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The server group ID.
     *
     * @example rsp-0bfuc*****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The server group name.
     *
     * @example Group3
     *
     * @var string
     */
    public $VServerGroupName;
    protected $_name = [
        'associatedObjects' => 'AssociatedObjects',
        'createTime'        => 'CreateTime',
        'serverCount'       => 'ServerCount',
        'tags'              => 'Tags',
        'VServerGroupId'    => 'VServerGroupId',
        'VServerGroupName'  => 'VServerGroupName',
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
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
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
        if (isset($map['AssociatedObjects'])) {
            $model->associatedObjects = associatedObjects::fromMap($map['AssociatedObjects']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }

        return $model;
    }
}
