<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleRequest extends Model
{
    /**
     * @example AliyunServiceRoleForSas
     *
     * @var string
     */
    public $serviceLinkedRole;
    protected $_name = [
        'serviceLinkedRole' => 'ServiceLinkedRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceLinkedRole) {
            $res['ServiceLinkedRole'] = $this->serviceLinkedRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceLinkedRole'])) {
            $model->serviceLinkedRole = $map['ServiceLinkedRole'];
        }

        return $model;
    }
}
