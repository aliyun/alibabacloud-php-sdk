<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class UpdateUsersToRoleRequest extends Model
{
    /**
     * @var string[]
     */
    public $add;

    /**
     * @var string[]
     */
    public $remove;
    protected $_name = [
        'add' => 'add',
        'remove' => 'remove',
    ];

    public function validate()
    {
        if (\is_array($this->add)) {
            Model::validateArray($this->add);
        }
        if (\is_array($this->remove)) {
            Model::validateArray($this->remove);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->add) {
            if (\is_array($this->add)) {
                $res['add'] = [];
                $n1 = 0;
                foreach ($this->add as $item1) {
                    $res['add'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remove) {
            if (\is_array($this->remove)) {
                $res['remove'] = [];
                $n1 = 0;
                foreach ($this->remove as $item1) {
                    $res['remove'][$n1] = $item1;
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
        if (isset($map['add'])) {
            if (!empty($map['add'])) {
                $model->add = [];
                $n1 = 0;
                foreach ($map['add'] as $item1) {
                    $model->add[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['remove'])) {
            if (!empty($map['remove'])) {
                $model->remove = [];
                $n1 = 0;
                foreach ($map['remove'] as $item1) {
                    $model->remove[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
