<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class AuthConfig extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $authInfo;

    /**
     * @example anonymous, function, jwt
     *
     * @var string
     */
    public $authType;
    protected $_name = [
        'authInfo' => 'authInfo',
        'authType' => 'authType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AuthConfig
     */
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
