<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var bool
     */
    public $withPermissionRole;
    protected $_name = [
        'withPermissionRole' => 'WithPermissionRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->withPermissionRole) {
            $res['WithPermissionRole'] = $this->withPermissionRole;
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
        if (isset($map['WithPermissionRole'])) {
            $model->withPermissionRole = $map['WithPermissionRole'];
        }

        return $model;
    }
}
