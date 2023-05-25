<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Tea\Model;

class remoteConnectionOptions extends Model
{
    /**
     * @description > This parameter is available to select users and unavailable for general users.
     *
     * @example hide
     *
     * @var string
     */
    public $password;

    /**
     * @description > This parameter is available to select users and unavailable for general users.
     *
     * @example hide
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'password' => 'Password',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remoteConnectionOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
