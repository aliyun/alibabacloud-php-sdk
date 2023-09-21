<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAssetGroupRequest extends Model
{
    /**
     * @description The ID of the new server group to which the servers belong.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of server groups.
     * @example 9586199
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The source IP address of the request.
     *
     * @example 10.12.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUIDs of the servers for which you want to change the server group. Separate multiple UUIDs with commas (,).
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 076a446d-df7d-424c-bdc5-bb5dc7f1****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'groupId'  => 'GroupId',
        'sourceIp' => 'SourceIp',
        'uuids'    => 'Uuids',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAssetGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
