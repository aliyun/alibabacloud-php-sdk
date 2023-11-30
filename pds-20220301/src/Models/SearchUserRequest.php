<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SearchUserRequest extends Model
{
    /**
     * @description The email address of the user.
     *
     * @example 123@pds.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The maximum number of results to return. Valid values: 1 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\
     * By default, this parameter is left empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The nickname of the user. The nickname can be up to 128 characters in length.
     *
     * @example pdsuer
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The nickname used for fuzzy searches. The nickname can be up to 128 characters in length.
     *
     * @example la
     *
     * @var string
     */
    public $nickNameForFuzzy;

    /**
     * @description The mobile number of the user.
     *
     * @example 13900001111
     *
     * @var string
     */
    public $phone;

    /**
     * @description The role of the user. Valid values:
     *
     *   superadmin
     *   admin
     *   user
     *
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description The state of the user. Valid values:
     *
     *   disabled: The user is prohibited from logon.
     *   enabled: The user is in a normal state.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the user. The name can be up to 128 characters in length.
     *
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
