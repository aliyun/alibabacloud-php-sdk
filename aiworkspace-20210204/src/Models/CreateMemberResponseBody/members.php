<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberResponseBody;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example myDisplayName
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 145883-21513926******88039
     *
     * @var string
     */
    public $memberId;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @example 21513926******88039
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'memberId'    => 'MemberId',
        'roles'       => 'Roles',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
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
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
