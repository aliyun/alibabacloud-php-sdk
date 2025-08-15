<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models;

use AlibabaCloud\Dara\Model;

class DescribeServiceLinkedRoleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $serviceLinkedRole;
    protected $_name = [
        'serviceLinkedRole' => 'ServiceLinkedRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceLinkedRole) {
            $res['ServiceLinkedRole'] = $this->serviceLinkedRole;
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
        if (isset($map['ServiceLinkedRole'])) {
            $model->serviceLinkedRole = $map['ServiceLinkedRole'];
        }

        return $model;
    }
}
