<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class autoUpdateUserConfig extends Model
{
    /**
     * @description Whether auto-updating of accounts is enabled. Possible values:
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example disabled
     *
     * @var string
     */
    public $autoUpdateUserStatus;
    protected $_name = [
        'autoUpdateUserStatus' => 'AutoUpdateUserStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpdateUserStatus) {
            $res['AutoUpdateUserStatus'] = $this->autoUpdateUserStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoUpdateUserConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpdateUserStatus'])) {
            $model->autoUpdateUserStatus = $map['AutoUpdateUserStatus'];
        }

        return $model;
    }
}
