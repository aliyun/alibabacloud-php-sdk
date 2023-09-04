<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponseBody\MFAAuthenticationSettingInfo;
use AlibabaCloud\Tea\Model;

class GetMFAAuthenticationSettingInfoResponseBody extends Model
{
    /**
     * @description The MFA setting of all users.
     *
     * @var MFAAuthenticationSettingInfo
     */
    public $MFAAuthenticationSettingInfo;

    /**
     * @description The ID of the request.
     *
     * @example 95D3B107-DA80-5B34-A3D0-9E82F8F0DA0E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFAAuthenticationSettingInfo' => 'MFAAuthenticationSettingInfo',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFAAuthenticationSettingInfo) {
            $res['MFAAuthenticationSettingInfo'] = null !== $this->MFAAuthenticationSettingInfo ? $this->MFAAuthenticationSettingInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMFAAuthenticationSettingInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFAAuthenticationSettingInfo'])) {
            $model->MFAAuthenticationSettingInfo = MFAAuthenticationSettingInfo::fromMap($map['MFAAuthenticationSettingInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
