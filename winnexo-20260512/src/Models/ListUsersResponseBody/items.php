<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUsersResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $accountId;

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
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'accountId' => 'accountId',
        'displayName' => 'displayName',
        'gmtCreate' => 'gmtCreate',
        'isActive' => 'isActive',
        'lastLoginTime' => 'lastLoginTime',
        'roleCodes' => 'roleCodes',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
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

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
