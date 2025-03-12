<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class accessKeyPreference extends Model
{
    /**
     * @description Indicates whether RAM users can manage their AccessKey pairs. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $allowUserToManageAccessKeys;
    protected $_name = [
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKeyPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }

        return $model;
    }
}
