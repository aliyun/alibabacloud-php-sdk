<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Member extends Model
{
    /**
     * @example user: 181319557522****
     *
     * @var string
     */
    public $member;

    /**
     * @example VIEWER
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'member' => 'member',
        'role'   => 'role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->member) {
            $res['member'] = $this->member;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['member'])) {
            $model->member = $map['member'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
