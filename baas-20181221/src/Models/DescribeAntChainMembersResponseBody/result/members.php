<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMembersResponseBody\result;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example 1557477823000
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example uid-1388601577407805
     *
     * @var string
     */
    public $memberId;

    /**
     * @example uid-1562589998337656
     *
     * @var string
     */
    public $memberName;

    /**
     * @example Member
     *
     * @var string
     */
    public $role;

    /**
     * @example AllianceNotJoined
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'joinTime'   => 'JoinTime',
        'memberId'   => 'MemberId',
        'memberName' => 'MemberName',
        'role'       => 'Role',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
