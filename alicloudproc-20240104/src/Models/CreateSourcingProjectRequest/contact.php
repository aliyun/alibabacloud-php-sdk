<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest;

use AlibabaCloud\Tea\Model;

class contact extends Model
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
        'email' => 'Email',
        'name'  => 'Name',
        'phone' => 'Phone',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
