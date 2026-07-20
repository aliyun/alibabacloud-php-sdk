<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class CreateContactRequest extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $idcard;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'email' => 'Email',
        'idcard' => 'Idcard',
        'mobile' => 'Mobile',
        'name' => 'Name',
        'webhooks' => 'Webhooks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->idcard) {
            $res['Idcard'] = $this->idcard;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Idcard'])) {
            $model->idcard = $map['Idcard'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
