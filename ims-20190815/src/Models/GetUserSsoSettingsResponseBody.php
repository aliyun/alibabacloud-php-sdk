<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponseBody\userSsoSettings;
use AlibabaCloud\Tea\Model;

class GetUserSsoSettingsResponseBody extends Model
{
    /**
     * @var userSsoSettings
     */
    public $userSsoSettings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'userSsoSettings' => 'UserSsoSettings',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userSsoSettings) {
            $res['UserSsoSettings'] = null !== $this->userSsoSettings ? $this->userSsoSettings->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['UserSsoSettings'])) {
            $model->userSsoSettings = userSsoSettings::fromMap($map['UserSsoSettings']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
