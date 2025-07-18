<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteOtpConfigRequest extends Model
{
    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'username' => 'Username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOtpConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
