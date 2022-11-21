<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryCommitResponseBody\result;

use AlibabaCloud\Tea\Model;

class committer extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $externUid;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $tbUserId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $websiteUrl;
    protected $_name = [
        'avatarUrl'  => 'avatarUrl',
        'email'      => 'email',
        'externUid'  => 'externUid',
        'id'         => 'id',
        'name'       => 'name',
        'state'      => 'state',
        'tbUserId'   => 'tbUserId',
        'username'   => 'username',
        'websiteUrl' => 'websiteUrl',
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
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
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
        if (null !== $this->tbUserId) {
            $res['tbUserId'] = $this->tbUserId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->websiteUrl) {
            $res['websiteUrl'] = $this->websiteUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return committer
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
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
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
        if (isset($map['tbUserId'])) {
            $model->tbUserId = $map['tbUserId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['websiteUrl'])) {
            $model->websiteUrl = $map['websiteUrl'];
        }

        return $model;
    }
}
