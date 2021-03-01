<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccountInfoRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $email;
    protected $_name = [
        'name'      => 'Name',
        'telephone' => 'Telephone',
        'email'     => 'Email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccountInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
