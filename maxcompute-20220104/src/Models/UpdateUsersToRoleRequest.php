<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateUsersToRoleRequest extends Model
{
    /**
     * @description The accounts.
     *
     * @var string[]
     */
    public $add;

    /**
     * @description The accounts.
     *
     * @var string[]
     */
    public $remove;
    protected $_name = [
        'add' => 'add',
        'remove' => 'remove',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['add'] = $this->add;
        }
        if (null !== $this->remove) {
            $res['remove'] = $this->remove;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUsersToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['add'])) {
            if (!empty($map['add'])) {
                $model->add = $map['add'];
            }
        }
        if (isset($map['remove'])) {
            if (!empty($map['remove'])) {
                $model->remove = $map['remove'];
            }
        }

        return $model;
    }
}
