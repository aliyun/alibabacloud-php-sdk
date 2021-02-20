<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'roleName' => 'RoleName',
        'language' => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
