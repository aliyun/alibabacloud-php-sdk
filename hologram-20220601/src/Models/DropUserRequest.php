<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class DropUserRequest extends Model
{
    /**
     * @var string
     */
    public $superUser;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'superUser' => 'superUser',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->superUser) {
            $res['superUser'] = $this->superUser;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['superUser'])) {
            $model->superUser = $map['superUser'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
