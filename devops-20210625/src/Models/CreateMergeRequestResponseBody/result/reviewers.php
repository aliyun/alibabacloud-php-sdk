<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponseBody\result;

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
     * @example false
     *
     * @var bool
     */
    public $hasReviewed;

    /**
     * @example 7905
     *
     * @var int
     */
    public $id;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example PASS
     *
     * @var string
     */
    public $reviewOpinionStatus;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example root-codeup
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'avatarUrl'           => 'avatarUrl',
        'email'               => 'email',
        'hasReviewed'         => 'hasReviewed',
        'id'                  => 'id',
        'name'                => 'name',
        'reviewOpinionStatus' => 'reviewOpinionStatus',
        'state'               => 'state',
        'username'            => 'username',
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
        if (null !== $this->hasReviewed) {
            $res['hasReviewed'] = $this->hasReviewed;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->reviewOpinionStatus) {
            $res['reviewOpinionStatus'] = $this->reviewOpinionStatus;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['hasReviewed'])) {
            $model->hasReviewed = $map['hasReviewed'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['reviewOpinionStatus'])) {
            $model->reviewOpinionStatus = $map['reviewOpinionStatus'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
