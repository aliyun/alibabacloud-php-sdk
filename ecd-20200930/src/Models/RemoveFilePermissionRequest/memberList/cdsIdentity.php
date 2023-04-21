<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest\memberList;

use AlibabaCloud\Tea\Model;

class cdsIdentity extends Model
{
    /**
     * @example 249dsfseee643h33g3dv****
     *
     * @var string
     */
    public $id;

    /**
     * @example IT_User
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'   => 'Id',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cdsIdentity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
