<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Dara\Model;

class accessKeyPreference extends Model
{
    /**
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @var bool
     */
    public $allowUserToManageServiceCredentials;
    protected $_name = [
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
        'allowUserToManageServiceCredentials' => 'AllowUserToManageServiceCredentials',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }

        if (null !== $this->allowUserToManageServiceCredentials) {
            $res['AllowUserToManageServiceCredentials'] = $this->allowUserToManageServiceCredentials;
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
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }

        if (isset($map['AllowUserToManageServiceCredentials'])) {
            $model->allowUserToManageServiceCredentials = $map['AllowUserToManageServiceCredentials'];
        }

        return $model;
    }
}
