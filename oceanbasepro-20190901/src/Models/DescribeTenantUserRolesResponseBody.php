<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeTenantUserRolesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $role;
    protected $_name = [
        'requestId' => 'RequestId',
        'role' => 'Role',
    ];

    public function validate()
    {
        if (\is_array($this->role)) {
            Model::validateArray($this->role);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->role) {
            if (\is_array($this->role)) {
                $res['Role'] = [];
                $n1 = 0;
                foreach ($this->role as $item1) {
                    $res['Role'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = [];
                $n1 = 0;
                foreach ($map['Role'] as $item1) {
                    $model->role[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
