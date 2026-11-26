<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSecurityInfoPreferenceResponseBody;

use AlibabaCloud\Dara\Model;

class securityInfoPreference extends Model
{
    /**
     * @var bool
     */
    public $allowUserManageSecurityEmail;
    protected $_name = [
        'allowUserManageSecurityEmail' => 'AllowUserManageSecurityEmail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserManageSecurityEmail) {
            $res['AllowUserManageSecurityEmail'] = $this->allowUserManageSecurityEmail;
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
        if (isset($map['AllowUserManageSecurityEmail'])) {
            $model->allowUserManageSecurityEmail = $map['AllowUserManageSecurityEmail'];
        }

        return $model;
    }
}
