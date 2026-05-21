<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateHoloWebLoginSettingRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $allowExternalAccountsLogin;
    protected $_name = [
        'regionId' => 'RegionId',
        'allowExternalAccountsLogin' => 'allowExternalAccountsLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->allowExternalAccountsLogin) {
            $res['allowExternalAccountsLogin'] = $this->allowExternalAccountsLogin;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['allowExternalAccountsLogin'])) {
            $model->allowExternalAccountsLogin = $map['allowExternalAccountsLogin'];
        }

        return $model;
    }
}
