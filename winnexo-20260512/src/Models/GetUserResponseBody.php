<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string
     */
    public $wnUserId;
    protected $_name = [
        'accountId' => 'accountId',
        'code' => 'code',
        'displayName' => 'displayName',
        'gmtCreate' => 'gmtCreate',
        'isActive' => 'isActive',
        'lastLoginTime' => 'lastLoginTime',
        'message' => 'message',
        'requestId' => 'requestId',
        'roleCodes' => 'roleCodes',
        'userGroupIds' => 'userGroupIds',
        'wnUserId' => 'wnUserId',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        if (null !== $this->lastLoginTime) {
            $res['lastLoginTime'] = $this->lastLoginTime;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['roleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['roleCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['userGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['userGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wnUserId) {
            $res['wnUserId'] = $this->wnUserId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        if (isset($map['lastLoginTime'])) {
            $model->lastLoginTime = $map['lastLoginTime'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['roleCodes'])) {
            if (!empty($map['roleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['roleCodes'] as $item1) {
                    $model->roleCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userGroupIds'])) {
            if (!empty($map['userGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['userGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['wnUserId'])) {
            $model->wnUserId = $map['wnUserId'];
        }

        return $model;
    }
}
