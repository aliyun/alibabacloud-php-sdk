<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchUserRequest extends Model
{
    /**
     * @example 123@pds.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @example pdsuer
     *
     * @var string
     */
    public $nickName;

    /**
     * @example la
     *
     * @var string
     */
    public $nickNameForFuzzy;

    /**
     * @example 13900001111
     *
     * @var string
     */
    public $phone;

    /**
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example pds
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'email'            => 'email',
        'limit'            => 'limit',
        'marker'           => 'marker',
        'nickName'         => 'nick_name',
        'nickNameForFuzzy' => 'nick_name_for_fuzzy',
        'phone'            => 'phone',
        'role'             => 'role',
        'status'           => 'status',
        'userName'         => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }
        if (null !== $this->nickNameForFuzzy) {
            $res['nick_name_for_fuzzy'] = $this->nickNameForFuzzy;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }
        if (isset($map['nick_name_for_fuzzy'])) {
            $model->nickNameForFuzzy = $map['nick_name_for_fuzzy'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
