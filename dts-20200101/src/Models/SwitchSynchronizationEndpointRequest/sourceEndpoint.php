<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest;

use AlibabaCloud\Dara\Model;

class sourceEndpoint extends Model
{
    /**
     * @var string
     */
    public $ownerID;
    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'ownerID' => 'OwnerID',
        'role'    => 'Role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
