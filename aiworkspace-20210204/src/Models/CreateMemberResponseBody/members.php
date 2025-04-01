<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberResponseBody;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'memberId' => 'MemberId',
        'roles' => 'Roles',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
