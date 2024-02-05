<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\Tea\Model;

class disposableAccount extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $loginFormActionUrl;

    /**
     * @example abc
     *
     * @var string
     */
    public $loginUrl;
    protected $_name = [
        'loginFormActionUrl' => 'LoginFormActionUrl',
        'loginUrl'           => 'LoginUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginFormActionUrl) {
            $res['LoginFormActionUrl'] = $this->loginFormActionUrl;
        }
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disposableAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginFormActionUrl'])) {
            $model->loginFormActionUrl = $map['LoginFormActionUrl'];
        }
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }

        return $model;
    }
}
