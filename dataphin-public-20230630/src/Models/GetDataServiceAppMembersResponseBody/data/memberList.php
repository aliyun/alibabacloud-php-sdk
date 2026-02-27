<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAppMembersResponseBody\data;

use AlibabaCloud\Dara\Model;

class memberList extends Model
{
    /**
     * @var string
     */
    public $effectiveEnd;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'effectiveEnd' => 'EffectiveEnd',
        'role' => 'Role',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveEnd) {
            $res['EffectiveEnd'] = $this->effectiveEnd;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['EffectiveEnd'])) {
            $model->effectiveEnd = $map['EffectiveEnd'];
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
