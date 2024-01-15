<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest\memberList;

use AlibabaCloud\Tea\Model;

class cdsIdentity extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example user01
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the user.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
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
