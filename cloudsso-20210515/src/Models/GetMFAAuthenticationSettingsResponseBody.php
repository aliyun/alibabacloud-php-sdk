<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetMFAAuthenticationSettingsResponseBody extends Model
{
    /**
     * @description Indicates whether MFA is enabled for all users. Valid values:
     *
     *   Enabled: MFA is enabled for all users.
     *   Byuser: User-specific settings are applied.
     *   Disabled: MFA is disabled for all users.
     *
     * @example Enabled
     *
     * @var string
     */
    public $MFAAuthenticationAdvanceSettings;

    /**
     * @description The ID of the request.
     *
     * @example A2BC00C5-76A2-5FFC-A340-927940A98377
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFAAuthenticationAdvanceSettings' => 'MFAAuthenticationAdvanceSettings',
        'requestId'                        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFAAuthenticationAdvanceSettings) {
            $res['MFAAuthenticationAdvanceSettings'] = $this->MFAAuthenticationAdvanceSettings;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMFAAuthenticationSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFAAuthenticationAdvanceSettings'])) {
            $model->MFAAuthenticationAdvanceSettings = $map['MFAAuthenticationAdvanceSettings'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
