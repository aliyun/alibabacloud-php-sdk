<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingForAdminResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $platformAppid;
    protected $_name = [
        'authStatus' => 'AuthStatus',
        'bizId' => 'BizId',
        'platformAppid' => 'PlatformAppid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->platformAppid) {
            $res['PlatformAppid'] = $this->platformAppid;
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
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['PlatformAppid'])) {
            $model->platformAppid = $map['PlatformAppid'];
        }

        return $model;
    }
}
