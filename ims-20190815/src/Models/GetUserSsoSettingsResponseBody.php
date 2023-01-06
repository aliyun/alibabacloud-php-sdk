<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponseBody\userSsoSettings;
use AlibabaCloud\Tea\Model;

class GetUserSsoSettingsResponseBody extends Model
{
    /**
     * @example 69FC3E5E-D3D9-434B-90CA-BBA8E0551A47
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userSsoSettings
     */
    public $userSsoSettings;
    protected $_name = [
        'requestId'       => 'RequestId',
        'userSsoSettings' => 'UserSsoSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userSsoSettings) {
            $res['UserSsoSettings'] = null !== $this->userSsoSettings ? $this->userSsoSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserSsoSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserSsoSettings'])) {
            $model->userSsoSettings = userSsoSettings::fromMap($map['UserSsoSettings']);
        }

        return $model;
    }
}
