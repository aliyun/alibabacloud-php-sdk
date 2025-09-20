<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CustomPrompt extends Model
{
    /**
     * @var string
     */
    public $roleDefinition;
    protected $_name = [
        'roleDefinition' => 'RoleDefinition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleDefinition) {
            $res['RoleDefinition'] = $this->roleDefinition;
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
        if (isset($map['RoleDefinition'])) {
            $model->roleDefinition = $map['RoleDefinition'];
        }

        return $model;
    }
}
