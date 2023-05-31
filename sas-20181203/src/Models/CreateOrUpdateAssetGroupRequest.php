<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateAssetGroupRequest extends Model
{
    /**
     * @description The ID of the server group for which you want to add to or remove servers.
     *
     * >  To modify the mapping between an asset and an asset group, you must provide the ID of the asset group. You can call the [DescribeAllGroups](~~DescribeAllGroups~~) to query the IDs of asset groups. If you do not configure this parameter when you call this operation, an asset group is created.
     * @example 55426
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the server group that you want to create or the server group for which you want to add or remove a server.
     *
     * >  To modify the mapping between a server and a server group, you must provide the name of the server group. You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the names of server groups. If you do not configure GroupID when you call this operation, a server group is created. In this case, you must configure GroupName.
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The UUID of the server in the server group that you want to create or the server group for which you want to add or remove servers. Separate multiple UUIDs with commas (,).
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example aq12-***,s23***
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'uuids'     => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAssetGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
