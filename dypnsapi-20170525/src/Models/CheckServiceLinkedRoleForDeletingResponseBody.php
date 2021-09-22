<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CheckServiceLinkedRoleForDeletingResponseBody\roleUsages;
use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingResponseBody extends Model
{
    /**
     * @var string
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
        'deletable'  => 'Deletable',
        'requestId'  => 'RequestId',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
