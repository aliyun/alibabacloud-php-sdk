<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result;

use AlibabaCloud\Dara\Model;

class reviewers extends Model
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
     * @var bool
     */
    public $hasCommented;
    /**
     * @var bool
     */
    public $hasReviewed;
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
    public $reviewOpinionStatus;
    /**
     * @var string
     */
    public $reviewTime;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
