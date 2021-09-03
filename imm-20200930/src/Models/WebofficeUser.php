<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class WebofficeUser extends Model
{
    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description 名字
     *
     * @var string
     */
    public $name;

    /**
     * @description 头像
     *
     * @var string
     */
    public $avatar;
    protected $_name = [
        'id'     => 'Id',
        'name'   => 'Name',
        'avatar' => 'Avatar',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebofficeUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        return $model;
    }
}
