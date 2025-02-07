<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateK8sClusterUserConfigExpireRequest extends Model
{
    /**
     * @var int
     */
    public $expireHour;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'expireHour' => 'expire_hour',
        'user'       => 'user',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireHour) {
            $res['expire_hour'] = $this->expireHour;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
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
        if (isset($map['expire_hour'])) {
            $model->expireHour = $map['expire_hour'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
