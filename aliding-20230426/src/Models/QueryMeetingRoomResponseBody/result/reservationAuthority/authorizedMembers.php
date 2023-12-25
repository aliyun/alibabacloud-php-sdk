<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result\reservationAuthority;

use AlibabaCloud\Tea\Model;

class authorizedMembers extends Model
{
    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $memberType;
    protected $_name = [
        'memberId'   => 'MemberId',
        'memberName' => 'MemberName',
        'memberType' => 'MemberType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }

        return $model;
    }
}
