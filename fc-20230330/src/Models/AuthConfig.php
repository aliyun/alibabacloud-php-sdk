<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class AuthConfig extends Model
{
    /**
     * @var string
     */
    public $authInfo;

    /**
     * @var string
     */
    public $authType;
    protected $_name = [
        'authInfo' => 'authInfo',
        'authType' => 'authType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authInfo) {
            $res['authInfo'] = $this->authInfo;
        }

        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
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
        if (isset($map['authInfo'])) {
            $model->authInfo = $map['authInfo'];
        }

        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        return $model;
    }
}
