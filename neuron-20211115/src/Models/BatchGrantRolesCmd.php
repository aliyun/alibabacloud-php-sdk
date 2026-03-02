<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class BatchGrantRolesCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int[]
     */
    public $roleIds;
    protected $_name = [
        'accountId' => 'accountId',
        'roleIds' => 'roleIds',
    ];

    public function validate()
    {
        if (\is_array($this->roleIds)) {
            Model::validateArray($this->roleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->roleIds) {
            if (\is_array($this->roleIds)) {
                $res['roleIds'] = [];
                $n1 = 0;
                foreach ($this->roleIds as $item1) {
                    $res['roleIds'][$n1] = $item1;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['roleIds'])) {
            if (!empty($map['roleIds'])) {
                $model->roleIds = [];
                $n1 = 0;
                foreach ($map['roleIds'] as $item1) {
                    $model->roleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
