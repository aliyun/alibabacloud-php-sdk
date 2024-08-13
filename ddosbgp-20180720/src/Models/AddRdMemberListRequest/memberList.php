<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddRdMemberListRequest;

use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 19510843762****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'uid' => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
