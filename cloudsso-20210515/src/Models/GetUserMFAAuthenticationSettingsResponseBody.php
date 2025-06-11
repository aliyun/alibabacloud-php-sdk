<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class GetUserMFAAuthenticationSettingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userMFAAuthenticationSettings;
    protected $_name = [
        'requestId' => 'RequestId',
        'userMFAAuthenticationSettings' => 'UserMFAAuthenticationSettings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userMFAAuthenticationSettings) {
            $res['UserMFAAuthenticationSettings'] = $this->userMFAAuthenticationSettings;
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

        if (isset($map['UserMFAAuthenticationSettings'])) {
            $model->userMFAAuthenticationSettings = $map['UserMFAAuthenticationSettings'];
        }

        return $model;
    }
}
