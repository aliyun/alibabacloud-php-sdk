<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetUserSsoSettingsResponseBody\userSsoSettings;

class SetUserSsoSettingsResponseBody extends Model
{
    /**
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
        if (null !== $this->userSsoSettings) {
            $this->userSsoSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userSsoSettings) {
            $res['UserSsoSettings'] = null !== $this->userSsoSettings ? $this->userSsoSettings->toArray($noStream) : $this->userSsoSettings;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserSsoSettings'])) {
            $model->userSsoSettings = userSsoSettings::fromMap($map['UserSsoSettings']);
        }

        return $model;
    }
}
