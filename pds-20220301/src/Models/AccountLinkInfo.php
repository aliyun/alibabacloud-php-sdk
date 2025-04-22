<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class AccountLinkInfo extends Model
{
    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var int
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authenticationType' => 'authentication_type',
        'createdAt' => 'created_at',
        'displayName' => 'display_name',
        'domainId' => 'domain_id',
        'extra' => 'extra',
        'identity' => 'identity',
        'lastLoginTime' => 'last_login_time',
        'status' => 'status',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['authentication_type'] = $this->authenticationType;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }

        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }

        if (null !== $this->lastLoginTime) {
            $res['last_login_time'] = $this->lastLoginTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['authentication_type'])) {
            $model->authenticationType = $map['authentication_type'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['display_name'])) {
            $model->displayName = $map['display_name'];
        }

        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }

        if (isset($map['last_login_time'])) {
            $model->lastLoginTime = $map['last_login_time'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
