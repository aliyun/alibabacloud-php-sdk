<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AuthConfig extends Model
{
    /**
     * @var string
     */
    public $authMode;

    /**
     * @var string
     */
    public $authType;
    protected $_name = [
        'authMode' => 'authMode',
        'authType' => 'authType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMode) {
            $res['authMode'] = $this->authMode;
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
        if (isset($map['authMode'])) {
            $model->authMode = $map['authMode'];
        }

        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        return $model;
    }
}
