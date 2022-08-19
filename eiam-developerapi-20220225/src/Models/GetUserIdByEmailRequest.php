<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdByEmailRequest extends Model
{
    /**
     * @var string
     */
    public $email;
    protected $_name = [
        'email' => 'email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdByEmailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        return $model;
    }
}
