<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Member extends Model
{
    /**
     * @var string
     */
    public $memberId;

    /**
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
     * @return Member
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
