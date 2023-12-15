<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateMemberRoleRequest extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $role;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'bid'    => 'Bid',
        'bizid'  => 'Bizid',
        'role'   => 'Role',
        'userId' => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMemberRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
