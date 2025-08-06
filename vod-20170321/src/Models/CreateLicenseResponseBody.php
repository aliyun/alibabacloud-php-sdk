<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateLicenseResponseBody\licenseInfo;

class CreateLicenseResponseBody extends Model
{
    /**
     * @var licenseInfo
     */
    public $licenseInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'licenseInfo' => 'LicenseInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->licenseInfo) {
            $this->licenseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licenseInfo) {
            $res['LicenseInfo'] = null !== $this->licenseInfo ? $this->licenseInfo->toArray($noStream) : $this->licenseInfo;
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
        if (isset($map['LicenseInfo'])) {
            $model->licenseInfo = licenseInfo::fromMap($map['LicenseInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
