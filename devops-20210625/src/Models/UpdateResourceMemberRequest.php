<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceMemberRequest extends Model
{
    /**
     * @example admin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleName' => 'roleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        return $model;
    }
}
