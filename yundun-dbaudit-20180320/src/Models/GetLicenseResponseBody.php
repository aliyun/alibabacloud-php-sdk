<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $assetLimit;

    /**
     * @var int
     */
    public $assetLimitUsed;
    protected $_name = [
        'startTime'      => 'StartTime',
        'requestId'      => 'RequestId',
        'assetLimit'     => 'AssetLimit',
        'assetLimitUsed' => 'AssetLimitUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->assetLimit) {
            $res['AssetLimit'] = $this->assetLimit;
        }
        if (null !== $this->assetLimitUsed) {
            $res['AssetLimitUsed'] = $this->assetLimitUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssetLimit'])) {
            $model->assetLimit = $map['AssetLimit'];
        }
        if (isset($map['AssetLimitUsed'])) {
            $model->assetLimitUsed = $map['AssetLimitUsed'];
        }

        return $model;
    }
}
