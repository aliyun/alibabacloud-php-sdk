<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class authnConfig extends Model
{
    /**
     * @description 对应IdP是否支持认证
     *
     * This parameter is required.
     *
     * @example enabled
     *
     * @var string
     */
    public $authnStatus;

    /**
     * @description 是否支持自动更新密码
     *
     * @example enabled
     *
     * @var string
     */
    public $autoUpdatePasswordStatus;
    protected $_name = [
        'authnStatus' => 'AuthnStatus',
        'autoUpdatePasswordStatus' => 'AutoUpdatePasswordStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnStatus) {
            $res['AuthnStatus'] = $this->authnStatus;
        }
        if (null !== $this->autoUpdatePasswordStatus) {
            $res['AutoUpdatePasswordStatus'] = $this->autoUpdatePasswordStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authnConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthnStatus'])) {
            $model->authnStatus = $map['AuthnStatus'];
        }
        if (isset($map['AutoUpdatePasswordStatus'])) {
            $model->autoUpdatePasswordStatus = $map['AutoUpdatePasswordStatus'];
        }

        return $model;
    }
}
