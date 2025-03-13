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
     * @var bool
     */
    public $hasCommented;

    /**
     * @var bool
     */
    public $hasReviewed;

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
     * @var string
     */
    public $reviewOpinionStatus;

    /**
     * @var string
     */
    public $reviewTime;

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
        'avatarUrl'           => 'avatarUrl',
        'email'               => 'email',
        'hasCommented'        => 'hasCommented',
        'hasReviewed'         => 'hasReviewed',
        'id'                  => 'id',
        'name'                => 'name',
        'reviewOpinionStatus' => 'reviewOpinionStatus',
        'reviewTime'          => 'reviewTime',
        'state'               => 'state',
        'status'              => 'status',
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
        if (null !== $this->hasCommented) {
            $res['hasCommented'] = $this->hasCommented;
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
        if (null !== $this->reviewTime) {
            $res['reviewTime'] = $this->reviewTime;
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
        if (isset($map['hasCommented'])) {
            $model->hasCommented = $map['hasCommented'];
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
        if (isset($map['reviewTime'])) {
            $model->reviewTime = $map['reviewTime'];
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
