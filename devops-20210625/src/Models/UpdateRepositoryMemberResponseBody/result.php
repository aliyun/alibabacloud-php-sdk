<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example test@alibaba.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 2020-08-08 08:08:08
     *
     * @var string
     */
    public $expireAt;

    /**
     * @example 30815
     *
     * @var int
     */
    public $id;

    /**
     * @example test_memeber_name
     *
     * @var string
     */
    public $memberName;

    /**
     * @example USERS
     *
     * @var string
     */
    public $memberType;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example 223241
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example Project
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example normal
     *
     * @var string
     */
    public $state;

    /**
     * @example codeup-test
     *
     * @var string
     */
    public $username;

    /**
     * @description web url
     *
     * @example ""
     *
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'accessLevel' => 'accessLevel',
        'avatarUrl'   => 'avatarUrl',
        'email'       => 'email',
        'expireAt'    => 'expireAt',
        'id'          => 'id',
        'memberName'  => 'memberName',
        'memberType'  => 'memberType',
        'name'        => 'name',
        'sourceId'    => 'sourceId',
        'sourceType'  => 'sourceType',
        'state'       => 'state',
        'username'    => 'username',
        'webUrl'      => 'webUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->memberName) {
            $res['memberName'] = $this->memberName;
        }
        if (null !== $this->memberType) {
            $res['memberType'] = $this->memberType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['memberName'])) {
            $model->memberName = $map['memberName'];
        }
        if (isset($map['memberType'])) {
            $model->memberType = $map['memberType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }

        return $model;
    }
}
