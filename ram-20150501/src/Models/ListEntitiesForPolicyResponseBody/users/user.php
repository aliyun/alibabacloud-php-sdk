<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\users;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'attachDate' => 'AttachDate',
        'displayName' => 'DisplayName',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
