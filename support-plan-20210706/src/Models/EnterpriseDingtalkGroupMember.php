<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseDingtalkGroupMember extends Model
{
    /**
     * @var bool
     */
    public $isAdmin;
    /**
     * @var string
     */
    public $mobile;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'isAdmin' => 'IsAdmin',
        'mobile'  => 'Mobile',
        'name'    => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
