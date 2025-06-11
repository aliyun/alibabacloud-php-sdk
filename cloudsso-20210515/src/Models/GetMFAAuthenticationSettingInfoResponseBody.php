<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetMFAAuthenticationSettingInfoResponseBody\MFAAuthenticationSettingInfo;

class GetMFAAuthenticationSettingInfoResponseBody extends Model
{
    /**
     * @var MFAAuthenticationSettingInfo
     */
    public $MFAAuthenticationSettingInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFAAuthenticationSettingInfo' => 'MFAAuthenticationSettingInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->MFAAuthenticationSettingInfo) {
            $this->MFAAuthenticationSettingInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MFAAuthenticationSettingInfo) {
            $res['MFAAuthenticationSettingInfo'] = null !== $this->MFAAuthenticationSettingInfo ? $this->MFAAuthenticationSettingInfo->toArray($noStream) : $this->MFAAuthenticationSettingInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MFAAuthenticationSettingInfo'])) {
            $model->MFAAuthenticationSettingInfo = MFAAuthenticationSettingInfo::fromMap($map['MFAAuthenticationSettingInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
