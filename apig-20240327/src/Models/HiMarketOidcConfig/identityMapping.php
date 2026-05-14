<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketOidcConfig;

use AlibabaCloud\Dara\Model;

class identityMapping extends Model
{
    /**
     * @var string[]
     */
    public $customFields;

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
        'customFields' => 'customFields',
        'emailField' => 'emailField',
        'userIdField' => 'userIdField',
        'userNameField' => 'userNameField',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                foreach ($this->customFields as $key1 => $value1) {
                    $res['customFields'][$key1] = $value1;
                }
            }
        }

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
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                foreach ($map['customFields'] as $key1 => $value1) {
                    $model->customFields[$key1] = $value1;
                }
            }
        }

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
