<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example test@mail.com
     *
     * @var string
     */
    public $email;
    protected $_name = [
        'email' => 'Email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
