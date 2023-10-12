<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersResponseBody;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @description The time when the member was added to Cloud Firewall. The value is a timestamp. Unit: seconds.
     *
     * @example 1615189819
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The remarks of the member.
     *
     * @example renewal
     *
     * @var string
     */
    public $memberDesc;

    /**
     * @description The name of the member.
     *
     * @example cloudfirewall_2
     *
     * @var string
     */
    public $memberDisplayName;

    /**
     * @description The status of the member. Valid values:
     *
     *   **normal**
     *   **deleting**
     *
     * @example normal
     *
     * @var string
     */
    public $memberStatus;

    /**
     * @description The UID of the member.
     *
     * @example 258039427902****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The time when the member was last modified. The value is a timestamp. Unit: seconds.
     *
     * @example 1615189819
     *
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'memberDesc'        => 'MemberDesc',
        'memberDisplayName' => 'MemberDisplayName',
        'memberStatus'      => 'MemberStatus',
        'memberUid'         => 'MemberUid',
        'modifyTime'        => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->memberDesc) {
            $res['MemberDesc'] = $this->memberDesc;
        }
        if (null !== $this->memberDisplayName) {
            $res['MemberDisplayName'] = $this->memberDisplayName;
        }
        if (null !== $this->memberStatus) {
            $res['MemberStatus'] = $this->memberStatus;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MemberDesc'])) {
            $model->memberDesc = $map['MemberDesc'];
        }
        if (isset($map['MemberDisplayName'])) {
            $model->memberDisplayName = $map['MemberDisplayName'];
        }
        if (isset($map['MemberStatus'])) {
            $model->memberStatus = $map['MemberStatus'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
