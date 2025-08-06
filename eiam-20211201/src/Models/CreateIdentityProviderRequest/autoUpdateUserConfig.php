<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;

class autoUpdateUserConfig extends Model
{
    /**
     * @var string
     */
    public $autoUpdateUserStatus;
    protected $_name = [
        'autoUpdateUserStatus' => 'AutoUpdateUserStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpdateUserStatus) {
            $res['AutoUpdateUserStatus'] = $this->autoUpdateUserStatus;
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
        if (isset($map['AutoUpdateUserStatus'])) {
            $model->autoUpdateUserStatus = $map['AutoUpdateUserStatus'];
        }

        return $model;
    }
}
