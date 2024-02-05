<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\userAccount;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $loginLimit;
    protected $_name = [
        'loginLimit' => 'LoginLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginLimit) {
            $res['LoginLimit'] = $this->loginLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginLimit'])) {
            $model->loginLimit = $map['LoginLimit'];
        }

        return $model;
    }
}
