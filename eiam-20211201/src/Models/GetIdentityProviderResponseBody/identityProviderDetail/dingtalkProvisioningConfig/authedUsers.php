<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig;

use AlibabaCloud\Tea\Model;

class authedUsers extends Model
{
    /**
     * @description 钉钉用户名称
     *
     * @example 张三
     *
     * @var string
     */
    public $name;

    /**
     * @description 钉钉用户userId
     *
     * @example 130308333929200479
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'name' => 'Name',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authedUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
