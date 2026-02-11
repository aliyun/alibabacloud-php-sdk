<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckServiceLinkedRoleForDeletingResponseBody\roleUsages;

class CheckServiceLinkedRoleForDeletingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roleUsages[]
     */
    public $roleUsages;
    protected $_name = [
        'deletable' => 'Deletable',
        'requestId' => 'RequestId',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
        if (\is_array($this->roleUsages)) {
            Model::validateArray($this->roleUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleUsages) {
            if (\is_array($this->roleUsages)) {
                $res['RoleUsages'] = [];
                $n1 = 0;
                foreach ($this->roleUsages as $item1) {
                    $res['RoleUsages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleUsages'])) {
            if (!empty($map['RoleUsages'])) {
                $model->roleUsages = [];
                $n1 = 0;
                foreach ($map['RoleUsages'] as $item1) {
                    $model->roleUsages[$n1] = roleUsages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
