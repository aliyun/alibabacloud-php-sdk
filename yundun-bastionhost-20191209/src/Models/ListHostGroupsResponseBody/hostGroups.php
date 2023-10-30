<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @description The description of the host group.
     *
     * @example Description
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the host group.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The name of the host group.
     *
     * @example Host group 1
     *
     * @var string
     */
    public $hostGroupName;

    /**
     * @description The number of hosts in the host group.
     *
     * @example 1
     *
     * @var int
     */
    public $memberCount;
    protected $_name = [
        'comment'       => 'Comment',
        'hostGroupId'   => 'HostGroupId',
        'hostGroupName' => 'HostGroupName',
        'memberCount'   => 'MemberCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }

        return $model;
    }
}
