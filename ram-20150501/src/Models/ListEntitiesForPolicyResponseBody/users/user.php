<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The time when the policy was attached to the RAM user.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @description The display name of the RAM user.
     *
     * @example Zhang*
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The unique ID of the RAM user.
     *
     * @example 122748924538****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'attachDate'  => 'AttachDate',
        'displayName' => 'DisplayName',
        'userId'      => 'UserId',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return user
     */
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
