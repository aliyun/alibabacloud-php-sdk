<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint;

use AlibabaCloud\Dara\Model;

class rootPathPermission extends Model
{
    /**
     * @var int
     */
    public $ownerGroupId;
    /**
     * @var int
     */
    public $ownerUserId;
    /**
     * @var string
     */
    public $permission;
    protected $_name = [
        'ownerGroupId' => 'OwnerGroupId',
        'ownerUserId'  => 'OwnerUserId',
        'permission'   => 'Permission',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerGroupId) {
            $res['OwnerGroupId'] = $this->ownerGroupId;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
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
        if (isset($map['OwnerGroupId'])) {
            $model->ownerGroupId = $map['OwnerGroupId'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        return $model;
    }
}
