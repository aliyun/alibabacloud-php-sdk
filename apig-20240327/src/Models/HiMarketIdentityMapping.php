<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketIdentityMapping extends Model
{
    /**
     * @var string
     */
    public $emailField;

    /**
     * @var string
     */
    public $userIdField;

    /**
     * @var string
     */
    public $userNameField;
    protected $_name = [
        'emailField' => 'emailField',
        'userIdField' => 'userIdField',
        'userNameField' => 'userNameField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emailField) {
            $res['emailField'] = $this->emailField;
        }

        if (null !== $this->userIdField) {
            $res['userIdField'] = $this->userIdField;
        }

        if (null !== $this->userNameField) {
            $res['userNameField'] = $this->userNameField;
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
        if (isset($map['emailField'])) {
            $model->emailField = $map['emailField'];
        }

        if (isset($map['userIdField'])) {
            $model->userIdField = $map['userIdField'];
        }

        if (isset($map['userNameField'])) {
            $model->userNameField = $map['userNameField'];
        }

        return $model;
    }
}
