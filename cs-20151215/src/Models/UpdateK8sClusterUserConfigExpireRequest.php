<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sClusterUserConfigExpireRequest extends Model
{
    /**
     * @description The validity period of the kubeconfig file. Unit: hours.
     *
     * This parameter is required.
     * @example 720
     *
     * @var int
     */
    public $expireHour;

    /**
     * @description The user ID.
     *
     * This parameter is required.
     * @example The ID of the Resource Access Management (RAM) user that you use.
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'expireHour' => 'expire_hour',
        'user'       => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireHour) {
            $res['expire_hour'] = $this->expireHour;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sClusterUserConfigExpireRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expire_hour'])) {
            $model->expireHour = $map['expire_hour'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
