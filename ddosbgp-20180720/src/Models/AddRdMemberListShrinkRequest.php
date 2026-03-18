<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class AddRdMemberListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $memberListShrink;
    protected $_name = [
        'memberListShrink' => 'MemberList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberListShrink) {
            $res['MemberList'] = $this->memberListShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberList'])) {
            $model->memberListShrink = $map['MemberList'];
        }

        return $model;
    }
}
