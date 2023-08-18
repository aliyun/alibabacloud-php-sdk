<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result;

use AlibabaCloud\Tea\Model;

class reviewers extends Model
{
    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 43127
     *
     * @var int
     */
    public $id;

    /**
     * @example test-review-user
     *
     * @var string
     */
    public $name;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example approved
     *
     * @var string
     */
    public $status;

    /**
     * @example root-test-review-user
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'avatarUrl' => 'avatarUrl',
        'email'     => 'email',
        'id'        => 'id',
        'name'      => 'name',
        'state'     => 'state',
        'status'    => 'status',
        'username'  => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
