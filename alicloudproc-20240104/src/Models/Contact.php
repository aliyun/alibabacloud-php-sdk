<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class Contact extends Model
{
    /**
     * @example XX@XX.XX
     *
     * @var string
     */
    public $email;

    /**
     * @example XXX
     *
     * @var string
     */
    public $name;

    /**
     * @example 1XXXXXXXXXX
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'email' => 'email',
        'name'  => 'name',
        'phone' => 'phone',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
