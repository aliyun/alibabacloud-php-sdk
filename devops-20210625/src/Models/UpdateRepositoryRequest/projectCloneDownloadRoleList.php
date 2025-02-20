<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest;

use AlibabaCloud\Dara\Model;

class projectCloneDownloadRoleList extends Model
{
    /**
     * @var bool
     */
    public $allowed;
    /**
     * @var int
     */
    public $roleCode;
    protected $_name = [
        'allowed'  => 'allowed',
        'roleCode' => 'roleCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowed) {
            $res['allowed'] = $this->allowed;
        }

        if (null !== $this->roleCode) {
            $res['roleCode'] = $this->roleCode;
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
        if (isset($map['allowed'])) {
            $model->allowed = $map['allowed'];
        }

        if (isset($map['roleCode'])) {
            $model->roleCode = $map['roleCode'];
        }

        return $model;
    }
}
