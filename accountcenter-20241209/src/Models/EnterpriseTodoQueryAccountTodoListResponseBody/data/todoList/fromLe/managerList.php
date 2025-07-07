<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList\fromLe;

use AlibabaCloud\Dara\Model;

class managerList extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $pkEncoded;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'pk' => 'Pk',
        'pkEncoded' => 'PkEncoded',
        'role' => 'Role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->pkEncoded) {
            $res['PkEncoded'] = $this->pkEncoded;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['PkEncoded'])) {
            $model->pkEncoded = $map['PkEncoded'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
