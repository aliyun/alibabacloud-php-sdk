<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\Dara\Model;

class disposableAccount extends Model
{
    /**
     * @var string
     */
    public $loginFormActionUrl;

    /**
     * @var string
     */
    public $loginUrl;
    protected $_name = [
        'loginFormActionUrl' => 'LoginFormActionUrl',
        'loginUrl' => 'LoginUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
