<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $memberId;

    /**
     * @example USER
     *
     * @var string
     */
    public $memberType;
    protected $_name = [
        'memberId'   => 'MemberId',
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
        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
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
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }

        return $model;
    }
}
