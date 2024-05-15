<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class AddRdMemberListShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $memberListShrink;
    protected $_name = [
        'memberListShrink' => 'MemberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberListShrink) {
            $res['MemberList'] = $this->memberListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRdMemberListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberList'])) {
            $model->memberListShrink = $map['MemberList'];
        }

        return $model;
    }
}
