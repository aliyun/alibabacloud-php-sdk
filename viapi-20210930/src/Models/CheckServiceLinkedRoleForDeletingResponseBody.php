<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\SDK\Viapi\V20210930\Models\CheckServiceLinkedRoleForDeletingResponseBody\roleUsages;
use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var roleUsages[]
     */
    public $roleUsages;
    protected $_name = [
        'requestId'  => 'RequestId',
        'deletable'  => 'Deletable',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->roleUsages) {
            $res['RoleUsages'] = [];
            if (null !== $this->roleUsages && \is_array($this->roleUsages)) {
                $n = 0;
                foreach ($this->roleUsages as $item) {
                    $res['RoleUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['RoleUsages'])) {
            if (!empty($map['RoleUsages'])) {
                $model->roleUsages = [];
                $n                 = 0;
                foreach ($map['RoleUsages'] as $item) {
                    $model->roleUsages[$n++] = null !== $item ? roleUsages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
