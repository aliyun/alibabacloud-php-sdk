<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetHoloWebLoginSettingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $allowExternalAccountsLogin;
    protected $_name = [
        'allowExternalAccountsLogin' => 'AllowExternalAccountsLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowExternalAccountsLogin) {
            $res['AllowExternalAccountsLogin'] = $this->allowExternalAccountsLogin;
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
        if (isset($map['AllowExternalAccountsLogin'])) {
            $model->allowExternalAccountsLogin = $map['AllowExternalAccountsLogin'];
        }

        return $model;
    }
}
