<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody;

use AlibabaCloud\Tea\Model;

class aclGroupList extends Model
{
    /**
     * @var string
     */
    public $aclGroupId;

    /**
     * @var string
     */
    public $aclGroupName;

    /**
     * @var string
     */
    public $memberUid;
    protected $_name = [
        'aclGroupId'   => 'AclGroupId',
        'aclGroupName' => 'AclGroupName',
        'memberUid'    => 'MemberUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclGroupId) {
            $res['AclGroupId'] = $this->aclGroupId;
        }
        if (null !== $this->aclGroupName) {
            $res['AclGroupName'] = $this->aclGroupName;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclGroupId'])) {
            $model->aclGroupId = $map['AclGroupId'];
        }
        if (isset($map['AclGroupName'])) {
            $model->aclGroupName = $map['AclGroupName'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        return $model;
    }
}
