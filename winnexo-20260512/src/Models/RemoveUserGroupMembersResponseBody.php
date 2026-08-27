<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RemoveUserGroupMembersResponseBody extends Model
{
    /**
     * @var int
     */
    public $affectedCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requestedCount;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'affectedCount' => 'affectedCount',
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'requestedCount' => 'requestedCount',
        'userGroupId' => 'userGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedCount) {
            $res['affectedCount'] = $this->affectedCount;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestedCount) {
            $res['requestedCount'] = $this->requestedCount;
        }

        if (null !== $this->userGroupId) {
            $res['userGroupId'] = $this->userGroupId;
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
        if (isset($map['affectedCount'])) {
            $model->affectedCount = $map['affectedCount'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestedCount'])) {
            $model->requestedCount = $map['requestedCount'];
        }

        if (isset($map['userGroupId'])) {
            $model->userGroupId = $map['userGroupId'];
        }

        return $model;
    }
}
