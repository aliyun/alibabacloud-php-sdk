<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class QueryAppQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $activeLicenseCount;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $licenseCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $usagePercent;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activeLicenseCount' => 'ActiveLicenseCount',
        'appId' => 'AppId',
        'licenseCount' => 'LicenseCount',
        'requestId' => 'RequestId',
        'usagePercent' => 'UsagePercent',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeLicenseCount) {
            $res['ActiveLicenseCount'] = $this->activeLicenseCount;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->licenseCount) {
            $res['LicenseCount'] = $this->licenseCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usagePercent) {
            $res['UsagePercent'] = $this->usagePercent;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ActiveLicenseCount'])) {
            $model->activeLicenseCount = $map['ActiveLicenseCount'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['LicenseCount'])) {
            $model->licenseCount = $map['LicenseCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsagePercent'])) {
            $model->usagePercent = $map['UsagePercent'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
