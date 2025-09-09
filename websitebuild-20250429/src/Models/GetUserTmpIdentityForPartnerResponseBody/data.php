<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponseBody\data\credentials;

class data extends Model
{
    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @var bool
     */
    public $hasCustomRoleAuth;
    protected $_name = [
        'credentials' => 'Credentials',
        'hasCustomRoleAuth' => 'HasCustomRoleAuth',
    ];

    public function validate()
    {
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->hasCustomRoleAuth) {
            $res['HasCustomRoleAuth'] = $this->hasCustomRoleAuth;
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
        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }

        if (isset($map['HasCustomRoleAuth'])) {
            $model->hasCustomRoleAuth = $map['HasCustomRoleAuth'];
        }

        return $model;
    }
}
