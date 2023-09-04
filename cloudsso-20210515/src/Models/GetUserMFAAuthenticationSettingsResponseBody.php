<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetUserMFAAuthenticationSettingsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5B598B62-85E6-5792-9DF1-246D251B07DA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether MFA is enabled for the user. Valid values:
     *
     *   Enabled: MFA is enabled for the user.
     *   Disabled: MFA is disabled for the user.
     *
     * @example Enabled
     *
     * @var string
     */
    public $userMFAAuthenticationSettings;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'userMFAAuthenticationSettings' => 'UserMFAAuthenticationSettings',
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
        if (null !== $this->userMFAAuthenticationSettings) {
            $res['UserMFAAuthenticationSettings'] = $this->userMFAAuthenticationSettings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserMFAAuthenticationSettingsResponseBody
     */
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
